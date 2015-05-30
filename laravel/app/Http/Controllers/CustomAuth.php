<?php namespace App\Http\Controllers;

use Auth;
use Request;

class CustomAuth extends Controller {

    public function getLogin() {
        return view('cauth.login');
    }

    public function postLogin() {
        $cn = Request::input('cn');
        $password = Request::input('password');
        $remember = Request::input('remember');
            
        if (Auth::attempt(['cn' => $cn, 'password' => $password], $remember))
        {
            //echo "success";
            return redirect('documentacion');
        }
        else {
            return redirect('cauth/login');
        }
    }
}
