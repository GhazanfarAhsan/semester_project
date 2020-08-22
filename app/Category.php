<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;

class Category extends Model
{
    //
    /*Relation method(Child) for Self-Join*/
    public function children(){
    	return $this->hasMany(Category::class, 'parent_id', 'id');
    }
    /*Relation method(Parent) for Self-Join*/
    public function parent(){
    	return $this->belongsTo(Category::class,'parent_id', 'id');
    }
    /*Relation method with product*/
    public function products(){
    	return $this->hasMany(Product::class);
    }


}
