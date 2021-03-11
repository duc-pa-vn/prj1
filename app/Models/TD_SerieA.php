<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TD_SerieA extends Model
{
    use HasFactory;
    protected $table="TD_SerieA";
    public function clb_SerieA1(){
    	return $this->belongsto('app\clb_SerieA','CLB1','CLB');
    }
    public function clb_SerieA2(){
    	return $this->belongsto('app\clb_SerieA','CLB2','CLB');
    }
}
