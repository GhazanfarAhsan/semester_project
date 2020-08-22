<?php

namespace App\Libraries;

class ConstantsClass{

	private $product_type_id=10;
	private $parent_category=272;

 
	public function getproducttypeId(){
		return $this->product_type_id;
	}

	public function getparentCategory(){
		return $this->parent_category;
	}

	public function setproducttypeId($product_type_id){
		return $this->product_type_id=$product_type_id;
	}

	public function setparentCategory($parent_category){
		return $this->product_type_id=$parent_category;
	}
}