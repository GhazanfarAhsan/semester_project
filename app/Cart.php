<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CartDetail;
use Cookie;
use Illuminate\Http\Request;
class Cart extends Model
{
   /*==Relation method with CartDetail==*/
   public function cartDetail(){

   		return $this->hasMany(CartDetail::class);
   } 


}
