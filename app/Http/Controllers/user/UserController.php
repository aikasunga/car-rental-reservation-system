<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Car;
use App\Category;


class UserController extends Controller
{
    public function rusi(){
    	$cars = Car::where('category_id',1)->get();
    	return view('main', compact('cars'));
    }

    public function honda(){
    	$cars = Car::where('category_id', 2)->get();
    	return view('cars.honda', compact('cars'));
    }

    public function kawasaki(){

    }

    public function yamaha(){
    	
    }
}
