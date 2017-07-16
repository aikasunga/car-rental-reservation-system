<?php 


namespace App;

use Illuminate\Http\Request;
use App\Car;
use App\Client;

class Reserve_check{
	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function check($cat_id){
		$find_car = Car::findOrFail($cat_id);

		$client = new Client;
		$client->lname = 	$this->request['lname'];
		$client->mname = 	$this->request['mname'];
		$client->fname = 	$this->request['fname'];
		$client->dob  = 	$this->request['dob'];
		$client->email = 	$this->request['email'];
		$client->contact =	$this->request['contact'];
		$client->addr = 	$this->request['addr'];

		$find_car->client_car()->save($client);
	}
}