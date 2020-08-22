<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Http\Controllers\MetaController;

class MainPageController extends Controller
{
    /*For render main page*/
    
    public function mainLayout(Request $req){
         $meta=new MetaController();
        $MetaData=$meta->getMeta($req);
        return view('main',compact('MetaData'));
    }

    public function contactUs(Request $req){
         $meta=new MetaController();
        $MetaData=$meta->getMeta($req);
        return view('contact-us',compact('MetaData'));

    }
    public function aboutUs(Request $req){
    	 return view('about',compact('MetaData'));
    }
}
