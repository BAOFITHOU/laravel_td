<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblthongtinntd extends Model
{
    Protected $table='tbl_thongtinntd';
    Public $timestamps=false;
    public function users(){
    	return $this->belongsTo('App\User','id_account','id');
    }
    public function tintd(){
    	return $this->hasMany('App\tbltintd','id_ntd','id');
    }
}
