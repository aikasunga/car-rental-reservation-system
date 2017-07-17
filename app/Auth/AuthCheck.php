<?php 

namespace App\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCheck{

	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function check(){
		$data = $this->request->only('email', 'password');
		if(!Auth::attempt($data)){
			return false;
		}else{
			return true;
		}
		
	}


}