<?php

namespace Fortross\Http\Controllers;

use Illuminate\Http\Request;
use Fortross\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use Session;
session_start();

class AjaxController extends Controller
{
    public function test(Request $request)
    {
        echo '<h1>Test HELLO</h1>';
        //$user = \Auth::user();
        //var_dump($user);
        //$user = User::where(['email'=>'admin@i.ua','password'=>'1111'])->first();
        ///////////
        // $email = 'admin@i.ua';
        // $password = '1111';
        // $remember = true;
        // Session::put('email', $email);
        //  if (Auth::attempt(['email' => $email, 'password' => $password], $remember)){
        //      echo '1';
        //  } else{
        //      echo '0';
        //  }
        /////////////
        //$s = Session::get('email');
        //echo '<h2>s mail='.$s.'</h2>';
        // if(Auth::user()){
        //     echo ' USER '.Auth::user()->name;
        // } else{
        //     echo ' not user';
        // }
        // if(Auth::viaRemember()){
        //     echo ' remembered';
        // } else{
        //     echo ' not rem';
        // }
        //Auth::logout();
        //Session::flush();
    }

    public function login(Request $request)
    {
        $remember = true;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)){
            echo '0';
        } else{
            echo '1';
        }
    }

    public function loginTest(Request $request)
    {
        if(Auth::check()){
            echo '0';
        } else{
            echo '1';
        }
    }
}
