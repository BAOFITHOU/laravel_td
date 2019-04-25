<?php

namespace App; 
use Illuminate\Notifications\Notifiable; 
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     Protected $table='users';
     Protected $fillable=['id','email','name','password','id_permission'];
    Public $timestamps=true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function thongtinsv(){
        return $this->hasMany('App\tblthongtinsv','id_account','id');
    }
     public function thongtinntd(){
        return $this->hasMany('App\tblthongtinntd','id_account','id');
    }
    public function cvs(){
        return $this->hasManyThrough('App\tblcv','App\tblthongtinsv','id_account','id_masv','id');
    }
    public function tintd(){
        return $this->hasManyThrough('App\tblcv','App\tblthongtinntd','id_account','id_ntd','id');
    }
}
