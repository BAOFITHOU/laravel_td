<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class tblketquatuyendung extends Model
{
    Protected $table='tbl_ketquatuyendung';
    protected $fillable = ['id_cv','id_tin','id_trangthai'];
    public $timestamps = true;
    public function trangthai(){
        return $this->belongsTo('App\tbltrangthai','id_trangthai','id');
    }
    public function cvs(){
        return $this->belongsTo('App\tblcv','id_cv','id');
    }
    public function tintd(){
        return $this->belongsTo('App\tbltintd','id_tin','id');
    }
}
