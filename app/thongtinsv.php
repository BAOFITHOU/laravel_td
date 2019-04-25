<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblthongtinsv extends Model
{
    Protected $table='tbl_thongtinsv';
    
    public function users(){
    	return $this->belongsTo('App\User','id_account','id');
    }
    public function cvs(){
    	return $this->hasMany('App\tblcv','id_masv','id');
    }
    public function trinhdo(){
    	return $this->belongsTo('App\tbltrinhdo','id_trinhdo','id');
    }
    public function nganh(){
        return $this->belongsTo('App\tblnganh','id_nganh','id');
    }
}
