<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Brand extends Model
{
	/*==Relation method with Product==*/
	public function products(){

		return $this->hasMany(Brand::class);
	}
    //
}
