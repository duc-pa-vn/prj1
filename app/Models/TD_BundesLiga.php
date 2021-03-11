<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TD_BundesLiga extends Model
{
    use HasFactory;
    protected $table= "TD_BundesLiga";
    public function clb_BundesLiga1(){
    	return $this->belongsto('app\clb_BundesLiga','CLB1','CLB');
    }
    public function clb_BundesLiga2(){
    	return $this->belongsto('app\clb_BundesLiga','CLB2','CLB');
    }

}
