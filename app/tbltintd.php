<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbltintd extends Model
{
    Protected $table='tbl_tintd';
    Public $timestamps=true;
    public function thongtinntd(){
    	return $this->belongsTo('App\tblthongtinntd','id_ntd','id');
    }
    public function nganh(){
    	return $this->belongsTo('App\tblnganh','id_nganh','id');
    }
    public function hinhthuclamviec(){
    	return $this->belongsTo('App\tblhtlamviec','id_hinhthuc','id');
    }
}
		