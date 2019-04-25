<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblhtlamviec extends Model
{
    Protected $table='dm_hinhthuclamviec';
    public function tintd(){
    	return $this->hasManyy('App\tbltintd','id_hinhthuc','id');
    }
}
