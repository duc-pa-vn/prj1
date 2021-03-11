<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotgame;
use App\Models\User;
use App\Models\favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\TD_BundesLiga;
use App\Models\TD_LaLiga;
use App\Models\TD_PremierLeague;
use App\Models\TD_SerieA;
use App\Models\TD_League1;

class HomeCtrl extends Controller
{
    
    // public function __construct()
    // {
    //     if(Auth::check())
    //     {
    //         $favorite = $this->favorite();
    //     }
    // }
    public function test(){
        $favorite = $this->favorite();
        $n = 0;
        foreach($favorite as $favorite){
            $favoritegame[$n++] = TD_BundesLiga::where('CLB1',$favorite->CLB)->orWhere('CLB2',$favorite->CLB);
            $favoritegame[$n++] = TD_LaLiga::where('CLB1',$favorite->CLB)->orWhere('CLB2',$favorite->CLB);
            $favoritegame[$n++] = TD_PremierLeague::where('CLB1',$favorite->CLB)->orWhere('CLB2',$favorite->CLB);
            $favoritegame[$n++] = TD_League1::where('CLB1',$favorite->CLB)->orWhere('CLB2',$favorite->CLB);
            $favoritegame[$n++] = TD_SerieA::where('CLB1',$favorite->CLB)->orWhere('CLB2',$favorite->CLB);
        }
        $favoritegameall = TD_League1::where('CLB1','a');
        for( $i = 0 ; $i < $n ; $i++){
            if( $i != $n-1) $favoritegameall = $favoritegameall->union($favoritegame[$i]);
            else $favoritegameall = $favoritegameall->union($favoritegame[$i])->get()->toArray();
        }
        return dd($favoritegameall);
    }

    public function gethotgame(){
    	$hotgame = hotgame::all();
        if(auth::check())
        {
        $favorite1 = $this->favorite();
        $n = 0;
        foreach($favorite1 as $favorite){
            $favoritegame[$n++] = TD_BundesLiga::where('CLB1',$favorite->CLB)->orWhere('CLB2',$favorite->CLB);
            $favoritegame[$n++] = TD_LaLiga::where('CLB1',$favorite->CLB)->orWhere('CLB2',$favorite->CLB);
            $favoritegame[$n++] = TD_PremierLeague::where('CLB1',$favorite->CLB)->orWhere('CLB2',$favorite->CLB);
            $favoritegame[$n++] = TD_League1::where('CLB1',$favorite->CLB)->orWhere('CLB2',$favorite->CLB);
            $favoritegame[$n++] = TD_SerieA::where('CLB1',$favorite->CLB)->orWhere('CLB2',$favorite->CLB);
        }
        $favoritegameall = TD_League1::where('CLB1','a');
        for( $i = 0 ; $i < $n ; $i++){
            if( $i != $n-1) $favoritegameall = $favoritegameall->union($favoritegame[$i]);
            else $favoritegameall = $favoritegameall->union($favoritegame[$i])->get();
        }
        return view('home.home',['hotgame'=>$hotgame,'favorite'=>$favorite1,'favoritegameall'=>$favoritegameall]);
        }
        else return view('home.home',['hotgame'=>$hotgame]);
    }   

    public function getLogin(){
    	return view('home.login');
    }

    public function postLogin(Request $request){
    	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('page/home');
        }
        else
        {
            return redirect('login')->with('thongbao','dang nhap ko thanh cong');
        }
    }
    public function getRegister(){
        return view('home.register');
    }
    public function postRegister(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('register')->with('thongbao','them nguoi dung thanh cong');
    }
    public function logout(){
        Auth::logout();
        return redirect('page/home');
    }
    public function favorite(){
        $favorite = favorite::where('IDuser',Auth::user()->id)->get();
        return $favorite;
    }
}
