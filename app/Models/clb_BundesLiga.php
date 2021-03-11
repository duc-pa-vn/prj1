<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clb_BundesLiga extends Model
{
    use HasFactory;
    protected $table = "clb_BundesLiga";
    public function TD_BundesLiga1(){
    	return $this->hasMany('app\TD_BundesLiga','CLB1','CLB');
    } 
    public function TD_BundesLiga2(){
    	return $this->hasMany('app\TD_BundesLiga','CLB2','CLB');
    } 
}
