<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblnganh extends Model
{
    Protected $table='dm_nganh';
    public function tintd(){
    	return $this->hasMany('App\tbltintd','id_nganh','id');
    }
    public function cvs(){
    	return $this->hasMany('App\tblcv','id_nganh','id');
    }
    
}
