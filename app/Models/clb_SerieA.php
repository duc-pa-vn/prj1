<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clb_SerieA extends Model
{
    use HasFactory;
    protected $table = "clb_SerieA";
    public function TD_SerieA1(){
    	return $this->hasMany('app\TD_SerieA','CLB1','CLB');
    } 
    public function TD_SerieA2(){
    	return $this->hasMany('app\TD_SerieA','CLB2','CLB');
    } 
}
