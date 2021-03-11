<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clb_PremierLeague extends Model
{
    use HasFactory;
    protected $table = "clb_PremierLeague";
    public function TD_PremierLeague1(){
    	return $this->hasMany('app\TD_PremierLeague','CLB1','CLB');
    } 
    public function TD_PremierLeague2(){
    	return $this->hasMany('app\TD_PremierLeague','CLB2','CLB');
    } 
}
