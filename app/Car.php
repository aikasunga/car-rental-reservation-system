<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function price(){
    	return $this->belongsTo('App\Price');
    }

    public function client_car(){
    	return $this->belongsToMany('App\Client','car_clients')->withTimestamps();
    }

   
}
