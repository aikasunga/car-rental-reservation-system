<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Car;

use App\Http\Requests\staff\rusiNew;
use App\Staff\Rusi;

use App\Http\Requests\staff\hondaNew;
use App\Staff\Honda;

use App\Http\Requests\staff\kawasakiNew;
use App\Staff\Kawasaki;

use App\Http\Requests\staff\yamahaNew;
use App\Staff\Yamaha;


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
        $cars = Car::where('category_id',1)->get();
    	return view('staff.car', compact('cars'));
    }

    public function honda(){
         $cars = Car::where('category_id',2)->get();
    	return view('staff.honda', compact('cars'));
    }

    public function kawasaki(){
         $cars = Car::where('category_id',3)->get();
    	return view('staff.kawasaki', compact('cars'));
    }

    public function yamaha(){
         $cars = Car::where('category_id',4)->get();
    	return view('staff.yamaha', compact('cars'));
    }

    public function rusi_new(rusiNew $request, Rusi $new){
        return $new->new();

    }

    public function honda_new(hondaNew $request, Honda $new){
        return $new->new();
    }

    public function kawasaki_new(kawasakiNew $request, Kawasaki $new){
        return $new->new();
    }

    public function yamaha_new(yamahaNew $request, Yamaha $new){
         return $new->new();
    }
}
