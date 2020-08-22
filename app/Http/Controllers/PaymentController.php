<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\CutomerAddress;
use Auth;
use Session;
class PaymentController extends Controller
{
    //
   public $guest_customer_id = 0;
    public function index(Request $req){

    	
    	$this->guest_customer_id = (Session::get('guest_customer_id') > 0) ? Session::get('guest_customer_id') : 0;
    	
    	if($this->guest_customer_id == 0){


    		
    		$CustomerAddress = Customer::select('customers.id','cutomer_addresses.id as CID','cutomer_addresses.customer_id','cutomer_addresses.full_name','cutomer_addresses.address1','cutomer_addresses.address2','cutomer_addresses.city','cutomer_addresses.state','cutomer_addresses.is_billing','cutomer_addresses.country')
            ->Join('cutomer_addresses','customers.id','=','cutomer_addresses.customer_id')
            ->Join('users','customers.user_id','=','users.id')
            ->where('users.id',Auth::user()->id)->get();

           

    		//$guest_customer_id = 0;
    		
    		return view('payment')->with(['CustomerAddressDetail' => $CustomerAddress,'guest_customer' => $this->guest_customer_id]);

    	}
    	else{

            $CustomerAddress = Customer::select('customers.id as CID','customers.email')
            ->where('customers.id',$this->guest_customer_id)->get();

    		return view('payment')->with(['CustomerAddressDetail' => $CustomerAddress,'guest_customer' => $this->guest_customer_id]);
    	}
    }


    public function addnewCustomerAddress(Request $req){

        //dd($req->input());

       $req->validate([
        'fname' => 'required|string|max:255', 
        'lname' => 'required|string|max:255',
        'phone_no' => 'required|string|max:255',
          ]);

    	$cust_address = new CutomerAddress();
        // dd($req->input());
        if($req->address_2 == null)
            $address2 = "";
        else
            $address2 = $req->address_2;

        $cust_address->customer_id = $req->cus_id;
        $cust_address->full_name = $req->fname." ".$req->lname;
        $cust_address->address1 = $req->address_1;
        $cust_address->address2 = $address2;
        $cust_address->company_name = $req->cname;
        $cust_address->city = $req->city;
        $cust_address->state = $req->state;
        $cust_address->zip = $req->zip;
        $cust_address->country = $req->country;
        $cust_address->is_billing = $req->isbilling;
        $cust_address->active = 0;
        $cust_address->save();

        // $this->guest_customer_id = (Session::get('guest_customer_id') > 0) ? Session::get('guest_customer_id') : 0;

        // Returning Customer 

        $CustomerAddress = CutomerAddress::where('customer_id',$cust_address->customer_id)->get();

        return view("ajax.ajax_shipping_address")->with(['CustomerAddressDetail' => $CustomerAddress,'guest_customer' => $this->guest_customer_id]);
    }

//  Getting Shipping Address for billing
    public function getCustomerAddress(Request $req){
        //dd($req->id);
        $CustomerAddress = Customer::select('customers.id','customers.first_name','customers.last_name','cutomer_addresses.id as CID','cutomer_addresses.customer_id','cutomer_addresses.full_name','cutomer_addresses.address1','cutomer_addresses.address2','cutomer_addresses.city','cutomer_addresses.state','cutomer_addresses.zip')
            ->Join('cutomer_addresses','customers.id','=','cutomer_addresses.customer_id')
            ->where('cutomer_addresses.id',$req->id)->first();
        //dd($CustomerAddress);
        return $CustomerAddress;

    }

//  Guest Customer Update

    public function updateGuestCustomer(Request $req){

        $req->validate([
        'fname' => 'required|string|max:255', 
        'lname' => 'required|string|max:255',
        'phone_no' => 'required|string|max:255',
        ]);
    
        $Guest = Customer::where('id',$req->CustomerID)->first();
        $Guest->first_name = $req->fname;
        $Guest->last_name = $req->lname;
        $Guest->save();

        if($req->address_2 == null)
            $address2 = "";
        else
            $address2 = $req->address_2;
        
    // Saving Customer Address
        $cust_address = new CutomerAddress();
        $cust_address->customer_id = $Guest->id;
        $cust_address->full_name = $req->fname." ".$req->lname;
        $cust_address->address1 = $req->address_1;
        $cust_address->address2 = $address2;
        $cust_address->company_name = $req->cname;
        $cust_address->city = $req->city;
        $cust_address->state = $req->state;
        $cust_address->zip = $req->zip;
        $cust_address->country = "USA";
        $cust_address->is_billing = $req->isbilling;
        $cust_address->active = 0;
        $cust_address->save();

        Session::forget('guest_customer_id');
        $this->guest_customer_id = 0;

        $CustomerAddress = CutomerAddress::where('customer_id',$cust_address->customer_id)->get();
        return view("ajax.ajax_shipping_address")->with(['CustomerAddressDetail' => $CustomerAddress,'guest_customer' => $this->guest_customer_id]);
    }
}
