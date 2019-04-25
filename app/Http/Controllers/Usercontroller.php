<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }   
    public function getLogin()
    {
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
            $arr = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if ($request->input('remember') == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        //kiểm tra trường remember có được chọn hay không
         
        if (Auth::guard('User')->attempt($arr) ) {

           
        } else {

           
        }
    }
}
