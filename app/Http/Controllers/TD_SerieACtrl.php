<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TD_SerieA;
use App\Models\User;
use App\Models\favorite;
use App\Models\clb_SerieA;
use Illuminate\Support\Facades\Auth;


class TD_SerieACtrl extends Controller
{
    //
    public function listclb(){
        $clb = clb_SerieA::all();
        if( auth::check()){
            $favorite = $this->favorite();
            return view('SerieA.clb',['favorite'=>$favorite,'clb'=>$clb]);
        }
    	return view('SerieA.clb',['clb'=>$clb]);
    }

	public function bxh(){
        if( auth::check()){
            $favorite = $this->favorite();
            return view('SerieA.bxh',['favorite'=>$favorite]);
        }
    	return view('SerieA.bxh');
    }

    public function lich(){
    	$trandau = TD_SerieA::all();
        if( auth::check()){
            $favorite = $this->favorite();
            return view('SerieA.lichthidau',['trandau'=>$trandau,'favorite'=>$favorite]);
        }
        return view('SerieA.lichthidau',['trandau'=>$trandau]);
    }  
    public function favorite(){
        $favorite = favorite::where('IDuser',Auth::user()->id)->get();
        return $favorite;
    }

}
