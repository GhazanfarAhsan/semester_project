<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
use App\Product;
class CartDetail extends Model
{
   	/*==Relation method with Cart==*/
    public function cart(){
    	return $this->belongsTo(Cart::class);
    } 

    public function productsData(){
    	return $this->belongsTo(Product::class);
    }
}
