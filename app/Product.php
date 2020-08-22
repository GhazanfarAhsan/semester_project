<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;
use App\ProductRug;
use App\ProductDecor;
use App\Brand;
use App\Review;
use App\CartDetail;
class Product extends Model
{
    //
    /*Relation method with Category */
    public function category(){
    	return $this->belongsTo(Category::class);
    }
    /*Relation method with Brand */
    public function brand(){
    	return $this->belongsTo(Brand::class);
    }
    /*Relation method with ProductRug */
    public function productRug(){
    	return $this->hasOne(ProductRug::class);
    }
    /*Relation method with ProductDecor */
    public function productDecor(){
    	 return $this->hasOne(ProductDecor::class);
    }
    /*Relation method with ProductReviews */
    public function productReviews(){
        return $this->hasMany(Review::class);
    }
    /*Get attribute of price field */
    public function getPriceAttribute($price)
    {
        return $this->attributes['price'] = sprintf('$%s', number_format($price, 2));
    }
     /*Set attribute of price field */
    public function getMsrpAttribute($msrp)
    {
        return $this->attributes['msrp'] = sprintf('$%s', number_format($msrp, 2));
    }

    public function cartDetail(){
        return $this->hasOne(CartDetail::class,'product_id', 'cart_id');
    }



}
