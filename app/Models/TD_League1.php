<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TD_League1 extends Model
{
    use HasFactory;
    protected $table= "TD_League1";
    public function clb_League11(){
    	return $this->belongsto('app\clb_League1','CLB1','CLB');
    }
    public function clb_League12(){
    	return $this->belongsto('app\clb_League1','CLB2','CLB');
    }
}
