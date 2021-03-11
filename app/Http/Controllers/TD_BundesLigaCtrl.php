<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TD_BundesLiga;
use App\Models\User;
use App\Models\favorite;
use App\Models\clb_BundesLiga;
use Illuminate\Support\Facades\Auth;

class TD_BundesLigaCtrl extends Controller
{
    //
    public function listclb(){
        $clb = clb_BundesLiga::all();
        if( auth::check()){
            $favorite = $this->favorite();
            return view('BundesLiga.clb',['favorite'=>$favorite,'clb'=>$clb]);
        }
    	return view('BundesLiga.clb',['clb'=>$clb]);
    }

	public function bxh(){
        if( auth::check()){
            $favorite = $this->favorite();
            return view('BundesLiga.bxh',['favorite'=>$favorite]);
        }
    	return view('BundesLiga.bxh');
    }

    public function lich(){
    	$trandau = TD_BundesLiga::all();
        if( auth::check()){
            $favorite = $this->favorite();
            return view('BundesLiga.lichthidau',['trandau'=>$trandau,'favorite'=>$favorite]);
        }
        return view('BundesLiga.lichthidau',['trandau'=>$trandau,]);
    } 
    public function favorite(){
        $favorite = favorite::where('IDuser',Auth::user()->id)->get();
        return $favorite;
    }
}
