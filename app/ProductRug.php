<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;


class ProductRug extends Model
{
    /*Relation method with Product*/
    public function product(){
    	return $this->belongsTo(Product::class);
    }

    public function setMapSize(){
    	return $this->attribute['map_size']=sprintf("regex:/\d+'\sX\s\d+'/");
    }

}
