<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */ 
   // protected $redirectTo = '/Trangchu';

    /**
     * Create a new controller instance.
     *
     * @return void
     */ 
    public $maxAttempts = 10;

    /**
     * Set how many seconds a lockout will last.
     */
    public $decayMinutes = 30;
    public function __construct() 
        {
        $this->middleware('guest')->except('logout');
        }
    public function login(Request $request)
        {  
             $email = $request->input('email');
             
             $password = ($request->input('password')) ;
             
             $arr = [
              
                    'email'=> $email, 
                    'password'=>$password
                    ];
      
             
             if(Auth::guard('web')->attempt($arr) &&  Auth::user()->id_permission == 1)
              {
                return redirect('nhatuyendung/trangchu');
              }
              else if(Auth::guard('web')->attempt($arr) &&  Auth::user()->id_permission == 2){
              return redirect('Ungvien/trangchu');
              }
              else if(Auth::guard('web')->attempt($arr) &&  Auth::user()->id_permission == 3)
              {
                return redirect('quantri');
              }
              else
              {
                return redirect('login')->withErrors([
                 'password' => 'Sai tài khoản hoặc mật khẩu!',
                ]);
              }

            
        }

}
