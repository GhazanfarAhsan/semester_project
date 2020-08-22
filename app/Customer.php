<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\CutomerAddress;
class Customer extends Model
{
	/*Relation method with user by Ghazanfar 11-02-2020*/
	public function customerasUser(){
		return $this->belongsTo(User::class);
	} 
	/*Relation method with CustomerAddress by Ghazanfar 11-02-2020*/
	public function customerAddresses(){
		return $this->hasMany(CutomerAddress::class,'customer_id');
	}
  
}
