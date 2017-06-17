<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiMon extends Model
{
    protected $table = "loaimonan";
    public $timestamps  = false;

    public function monan(){
    	return $this->hasMany('App\MonAn', 'idloaimonan', 'id');
    }
}
