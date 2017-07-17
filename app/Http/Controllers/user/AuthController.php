<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\auth\logincheck;
use App\Auth\AuthCheck;

class AuthController extends Controller
{
    public function login(){
    	return view('auth.login');
    }

    public function login_check(logincheck $request, AuthCheck $check){
    	if($check->check() == false){
    		return redirect()->back()->with('error', 'Invalid Email/Password');
    	}
    	
    	return redirect()->route('staff');
    }
}
