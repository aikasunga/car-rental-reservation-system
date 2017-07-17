<?php

use App\User;
use App\Category;
use App\Car;
use App\Price;
use App\Client;
use App\car_client;

Route::get('/', function () {
  return redirect()->route('rusi');
});



Route::group(['prefix'=> 'car'], function(){

	Route::get('/rusi', [
		'as'=> 'rusi',
		'uses'=> 'user\UserController@rusi'
	]);

	Route::get('/honda', [
		'as'=> 'honda',
		'uses'=> 'user\UserController@honda'
	]);

	Route::get('/kawasaki', [
		'as'=> 'kawasaki',
		'uses'=> 'user\UserController@kawasaki'
	]);

	Route::get('/yamaha', [
		'as'=> 'yamaha',
		'uses'=> 'user\UserController@yamaha'
	]);

	Route::get('/rent/{car_id}', [
		'as'=> 'rent',
		'uses'=> 'user\UserController@rent'
	]);

	Route::post('/rent/{car_id}', [
		'as'=> 'rent_request',
		'uses'=> 'user\UserController@rent_request'
	]);

});

Route::group(['prefix'=> 'auth'], function(){
	Route::get('/login', [
		'as'=> 'login',
		'uses'=> 'user\AuthController@login'
	]);

	Route::post('/login', [
		'as'=> 'login_check',
		'uses'=> 'user\AuthController@login_check'
	]);

});

Route::group(['prefix'=> 'staff'], function(){


	Route::get('/main', [
		'as'=> 'staff',
		'uses'=> 'user\StaffController@main'

	]);

	Route::get('/logout', [
		'as'=> 'logout',
		'uses'=> 'user\StaffController@logout'
	]);

	Route::get('/cars', [
		'as'=> 'cars',
		'uses'=> 'user\StaffController@cars'
	]);

	Route::get('/honda', [
		'as'=> 'staff_honda',
		'uses'=> 'user\StaffController@honda'
	]);

	Route::get('/kawasaki', [
		'as'=> 'staff_kawasaki',
		'uses'=> 'user\StaffController@kawasaki'
	]);

	Route::get('/yamaha', [
		'as'=> 'staff_yamaha',
		'uses'=> 'user\StaffController@yamaha'
	]);

});





// Route::get('/addCar', function(){
	
// 	$price = new Price;
// 	$price->price = '300';
// 	$price->save();
// 	 $find = Category::findOrFail(1);

// 	 $car = new Car;
// 	 $car->name = 'RUSI Motor XRM-125';
// 	 $car->description = 'automatic hindi na kailangan nang gasolina';
// 	 $car->price_id = $price->id;
// 	 $car->status = 0;
// 	 $find->cars()->save($car);
// });


