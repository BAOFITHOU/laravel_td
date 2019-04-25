<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblcv extends Model
{
    Protected $table='tbl_cv';
    public $timestamps = true;
    public function ketquatuyendung(){
    	return $this->hasMany('App\tblketquatuyendung','id_cv','id');
    }
    public function thongtinsv(){
    	return $this->belongsTo('App\tblthongtinsv','id_masv','id');
    }
     public function nganh(){
        return $this->belongsTo('App\tblnganh','id_nganh','id');
    }
}
