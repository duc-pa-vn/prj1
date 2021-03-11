<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TD_PremierLeague extends Model
{
    use HasFactory;
    protected  $table= "TD_PremierLeague";
    public function clb_premierLeague1(){
    	return $this->belongsto('app\clb_PremierLeague','CLB1','CLB');
    }
    public function clb_PremierLeague2(){
    	return $this->belongsto('app\clb_PremierLeague','CLB2','CLB');
    }
}
