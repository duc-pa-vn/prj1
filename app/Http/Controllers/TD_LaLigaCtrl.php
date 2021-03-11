<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TD_LaLiga;
use App\Models\User;
use App\Models\favorite;
use App\Models\clb_LaLiga;
use Illuminate\Support\Facades\Auth;

class TD_LaLigaCtrl extends Controller
{
    //
     public function listclb(){
        $clb = clb_LaLiga::all();
        if( auth::check()){
            $favorite = $this->favorite();
            return view('LaLiga.clb',['favorite'=>$favorite,'clb'=>$clb]);
        }
    	return view('LaLiga.clb',['clb'=>$clb]);
    }

	public function bxh(){
        if( auth::check()){
            $favorite = $this->favorite();
            return view('LaLiga.bxh',['favorite'=>$favorite]);
        }
        return view('LaLiga.bxh');
    }

    public function lich(){
    	$trandau = TD_LaLiga::all();
        if( auth::check()){
            $favorite = $this->favorite();
            return view('LaLiga.lichthidau',['trandau'=>$trandau,'favorite'=>$favorite]);
        }
        return view('LaLiga.lichthidau',['trandau'=>$trandau]);
    } 
    public function favorite(){
        $favorite = favorite::where('IDuser',Auth::user()->id)->get();
        return $favorite;
    }
}
