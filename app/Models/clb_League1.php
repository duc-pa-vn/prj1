<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clb_League1 extends Model
{
    use HasFactory;
    protected $table = "clb_League1";
    public function TD_League11(){
    	return $this->hasMany('app\TD_League1','CLB1','CLB');
    } 
    public function TD_League12(){
    	return $this->hasMany('app\TD_League1','CLB2','CLB');
    } 
}
