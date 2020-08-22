<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meta;

class MetaController extends Controller
{
    //
    public function getMeta(Request $request){

    	$MetaData = Meta::where('url',$request->path())->first();
    	return $MetaData;
    }
}
