<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StaffController extends Controller
{
    public function __construct(){
    	$this->middleware('usercheck');
    }

    public function main(){
    	return view('staff.main');
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function cars(){
    	return view('staff.car');
    }

    public function honda(){
    	return view('staff.honda');
    }

    public function kawasaki(){
    	return view('staff.kawasaki');
    }

    public function yamaha(){
    	return view('staff.yamaha');
    }
}
