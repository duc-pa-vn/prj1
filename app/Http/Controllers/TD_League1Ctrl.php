<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TD_League1;
use App\Models\User;
use App\Models\favorite;
use App\Models\clb_League1;
use Illuminate\Support\Facades\Auth;


class TD_League1Ctrl extends Controller
{
    //
      public function listclb(){
        $clb = clb_League1::all();
        if( auth::check()){
            $favorite = $this->favorite();
            return view('League1.clb',['favorite'=>$favorite,'clb'=>$clb]);
        }
    	return view('League1.clb',['clb'=>$clb]);
    }

	public function bxh(){
        if( auth::check()){
            $favorite = $this->favorite();
            return view('League1.bxh',['favorite'=>$favorite]);
        }
    	return view('League1.bxh');
    }

    public function lich(){
    	$trandau = TD_League1::all();
        if( auth::check()){
            $favorite = $this->favorite();
            return view('League1.lichthidau',['trandau'=>$trandau,'favorite'=>$favorite]);
        }
        return view('League1.lichthidau',['trandau'=>$trandau]);
    } 
    public function favorite(){
        $favorite = favorite::where('IDuser',Auth::user()->id)->get();
        return $favorite;
    }
}
