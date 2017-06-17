<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order';
    public $timestamps = false;

    // public function monan(){
    // 	return $this->hasMany('App\MonAn', '');
    // }
}
