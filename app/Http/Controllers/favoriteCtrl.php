<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\favorite;
use Illuminate\Support\Facades\Auth;

class favoriteCtrl extends Controller
{
    //
    public function postFavorite($clb){
    	$data = favorite::where('IDuser',Auth::user()->id)->get();
    	foreach ($data as $data) {
    		if ( $data->CLB==$clb) return redirect('page/BundesLiga/clb');
    	}
    	$newdata = new favorite;
    	$newdata->IDuser = Auth::user()->id;
    	$newdata->CLB = $clb;
    	$newdata->save();
    	return redirect()->back();
    }
}
