<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TD_LaLiga extends Model
{
    use HasFactory;
    protected $table="TD_LaLiga";
    public function clb_LaLiga1(){
    	return $this->belongsto('app\clb_LaLiga','CLB1','CLB');
    }
    public function clb_LaLiga2(){
    	return $this->belongsto('app\clb_LaLiga','CLB2','CLB');
    }
}
