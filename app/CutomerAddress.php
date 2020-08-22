<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
class CutomerAddress extends Model
{
    /*Relation method with User*/
    public function customer(){
    	return $this->belongsTo(Customer::class);
    }
}
