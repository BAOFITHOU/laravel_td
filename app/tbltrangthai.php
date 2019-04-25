<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbltrangthai extends Model
{
    Protected $table='dm_trangthai';
    public function ketquatuyendung(){
    	return $this->hasMany('App\tblketquatuyendung','id_trangthai','id');
    }
}
