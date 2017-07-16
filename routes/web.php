<?php

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





// Route::get('/addCar', function(){
	
// 	$price = new Price;
// 	$price->price = '5000';
// 	$price->save();
// 	 $find = Category::findOrFail(1);

// 	 $car = new Car;
// 	 $car->name = 'RUSI Pick-up Van';
// 	 $car->description = 'automatic hindi na kailangan nang gasolina';
// 	 $car->price_id = $price->id;
// 	 $car->status = 0;
// 	 $find->cars()->save($car);
// });

Route::get('/reserve', function(){
	$find = Car::findOrFail(4);
	$client = new Client;
	$client->lname = 'badiday';
	$client->mname = 'hokage';
	$client->fname = 'telay';
	$client->dob  = '1-1-1993';
	$client->email = 'email@yahoo.com';
	$client->contact = '435432343';
	$client->addr = 'quezon city';

	$find->client_car()->save($client);
});

// Route::get('/addCat', function(){
// 	$car = new Category;
// 	$car->category_name = 'YAMAHA';
// 	$car->save();
// });

