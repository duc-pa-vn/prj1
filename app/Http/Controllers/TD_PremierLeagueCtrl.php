<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TD_PremierLeague;
use App\Models\User;
use App\Models\favorite;
use App\Models\clb_PremierLeague;
use Illuminate\Support\Facades\Auth;


class TD_PremierLeagueCtrl extends Controller
{
    //
     public function listclb(){
        $clb = clb_PremierLeague::all();
        if( auth::check()){
            $favorite = $this->favorite();
            return view('PremierLeague.clb',['favorite'=>$favorite,'clb'=>$clb]);
        }
    	return view('PremierLeague.clb',['clb'=>$clb]);
    }

	public function bxh(){
        if( auth::check()){
            $favorite = $this->favorite();
            return view('PremierLeague.bxh',['favorite'=>$favorite]);
        }
    	return view('PremierLeague.bxh');
    }

    public function lich(){
    	$trandau = TD_PremierLeague::all();
        if( auth::check()){
            $favorite = $this->favorite();
            return view('PremierLeague.lichthidau',['trandau'=>$trandau,'favorite'=>$favorite]);
        }
        return view('PremierLeague.lichthidau',['trandau'=>$trandau]);
    } 
    public function favorite(){
        $favorite = favorite::where('IDuser',Auth::user()->id)->get();
        return $favorite;
    }
}
