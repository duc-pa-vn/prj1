<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clb_LaLiga extends Model
{
    use HasFactory;
    protected $table = "clb_LaLiga";
    public function TD_LaLiga1(){
    	return $this->hasMany('app\TD_LaLiga','CLB1','CLB');
    } 
    public function TD_LaLiga2(){
    	return $this->hasMany('app\TD_LaLiga','CLB2','CLB');
    } 
}
