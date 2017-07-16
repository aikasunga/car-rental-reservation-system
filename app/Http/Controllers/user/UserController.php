<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Car;
use App\Category;

use App\Http\Requests\userreserve;
use App\reserve_check;


class UserController extends Controller
{
    public function rusi(){
    	$cars = Car::where('category_id',1)->where('status',0)->get();
    	return view('main', compact('cars'));
    }

    public function honda(){
    	$cars = Car::where('category_id', 2)->where('status',0)->get();
    	return view('cars.honda', compact('cars'));
    }

    public function kawasaki(){
    	$cars = Car::where('category_id', 3)->where('status',0)->get();
    	return view('cars.kawasaki', compact('cars'));
    }

    public function yamaha(){
    	$cars = Car::where('category_id', 4)->where('status',0)->get();
    	return view('cars.yamaha', compact('cars'));
    }

    public function rent($car_id){
    	$car = Car::findOrFail( $car_id);
    	return view('user.rent', compact('car'));
    }

    public function rent_request($car_id, userreserve $request , reserve_check $check){
    	return $check->check($car_id);
    }
}
