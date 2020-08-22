<?php

namespace App\Libraries;

use App\Brand;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Controllers\CartController;
use Cookie;
use App\Libraries\ConstantsClass;

class MenuClass{

	public $CatData=null,$brandData=null;

	public function getBrandMenu(){

		$this->brandData = Brand::select('id','name','dest_link')->where('active', 1)->get();

		return $this->brandData;
	}

	public function getCatMenu(){

		$constant=new ConstantsClass();
		$this->CatData = Category::with('children')->select('id','parent_id','name')->where('parent_id',$constant->getparentCategory())->get();

		return $this->CatData;
	}

	public function showHeaderCart(){

	//****Showing cart in header******//
		$Cart=new CartController();
		$Cart_id=Cookie::get('SI_CartID');
        $AllDetail=$Cart->showCart($Cart_id);

        return $AllDetail;
	}
}  