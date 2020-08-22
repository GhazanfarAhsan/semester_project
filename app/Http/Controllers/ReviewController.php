<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ReviewController extends Controller
{
    public function ajaxsubmitReview(Request $req){
      /*==Validate and Submit Reviews By Ghazanfar==*/
    	 $req->validate([
    	'name' => 'required',
    	'email' => 'required',
    	'comments' => 'required',
    	'rating' => 'required',
        'captcha' => 'required|captcha',
		  ]);

    	 $review=new Review();

    	$review->full_name=$req->name;
    	$review->email=$req->email;
    	$review->comments=$req->comments;
    	$review->rating=$req->rating;
    	$review->anonymous=$req->anonymous;
    	$review->active=$req->active;
    	$review->allow_deny=$req->allow_deny;
    	$review->product_id=$req->pid;

    	$review->save();

    }

   public function ajaxfetchReview($id){
    /*==Fetching Reviews By Ghazanfar==*/
       	$reviewData=Review::select('id','full_name','comments','product_id','email')->where('product_id',$id)->get();
       
      	return view('ajax.ajax_product_review',compact('reviewData'));

   }

   public function getCaptcha(){
    return captcha_img('flat');
   }
}
