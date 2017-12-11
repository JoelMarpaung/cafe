<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use App\User;
class LoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'logout']);
    }

    // <!-- code : login - krs app - arnosa.net - and modified by group 9 -->
    public function Login(Request $request){
             if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
                if(Auth::user()->role == 'admin'){
                    return redirect()->intended('admin');
                } elseif(Auth::user()->role == 'customer'){
                    return redirect()->intended('customer');
                } elseif(Auth::user()->role == 'kasir'){
                    return redirect()->intended('kasir');
                } elseif(Auth::user()->role == 'inventori'){
                    return redirect()->intended('inventori');
                }
                 else {
                    return redirect()->intended('pelayan');
                }
            } else {
                $validator->errors()->add('password', 'Password tidak benar');
                return redirect('/')
                            ->withErrors($validator)
                            ->withInput();
            }
        
    }
}
