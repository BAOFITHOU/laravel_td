<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbltrinhdo extends Model
{
    Protected $table='dm_trinhdo';
    public function thongtinsv(){
    	return $this->hasMany('App\tblthongtinsv','id_trinhdo','id');
    }
}
