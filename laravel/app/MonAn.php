<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonAn extends Model
{
    protected $table = "monan";
    public $timestamps = false;

    public function loaimon(){
    	return $this->belongsTo('App\LoaiMon', 'idloaimonan', 'id');
    }
}
