<?php 

namespace App\Staff;
use Illuminate\Http\Request;
use App\Price;
use App\Car;
use App\Category;

class Honda{

	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function new(){
		$find = Category::findOrFail(2);
		$price = new Price;
		$price->price = $this->request['price'];
		$price->save();
		$car = new Car;
		$car->price_id = $price->id;
		$car->name = $this->request['model'];
		$car->description = $this->request['desc'];
		$car->status = 0;
		$find->cars()->save($car);
		return redirect()->back()->with('info', 'New Car Added Successfully.!');
	}
}