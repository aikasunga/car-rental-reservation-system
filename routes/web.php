<?php

use App\Category;
use App\Car;
use App\Price;

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


});





Route::get('/addCar', function(){
	
	$price = new Price;
	$price->price = '2000';
	$price->save();
	 $find = Category::findOrFail(2);
	 $car = new Car;
	 $car->name = 'Honda Rider';
	 $car->description = 'automatic hindi na kailangan nang gasolina';
	 $car->price_id = $price->id;
	 $find->cars()->save($car);
});

