<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductDecor extends Model
{
    /*Relation method with Product*/
    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
