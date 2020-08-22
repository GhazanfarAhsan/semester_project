<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\CutomerAddress;
use Session;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //dd("XXXXXXXXXXXXXX");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
//=======Saving Customers with customer address by Ghazanfar on 12-02-2020==========// 
    public function savingCustomer(array $data,$id){

       // if($validate->fails()){
       //     // dd('ddddd');
       //       return $validate;
       //  }
        // $req=new Request();
        //$req->cookie();
        
        $customerAddress = new CutomerAddressController();
        $customer =new Customer();
        $customer->user_id=$id;
        $customer->first_name=$data['name'];
        $customer->last_name=$data['lname'];
        $customer->email=$data['email'];
        $customer->password=Hash::make($data['password']);
        $customer->default_shipping=0;
        $customer->default_billing=0;
        $customer->is_subscribe=0;
        $customer->is_guest=0;
        $customer->active=0;
        $customer->last_login=date('Y/m/d');

        $customer->save();
        //Starting customer address
        $customerAddress->savingCustomerAddress($customer->id,$data);

       
    }

/*======login as Guest by Ghazanfar on 12-02-2020========*/

    public function guestCustomer(Request $request){

        $customer =new Customer();
        $customer->user_id=0;
        $customer->first_name='guest';
        $customer->last_name="";
        $customer->email=$request->email;
        $customer->password='';
        $customer->default_shipping=0;
        $customer->default_billing=0;
        $customer->is_subscribe=0;
        $customer->is_guest=$request->is_guest;
        $customer->active=0;
        $customer->last_login=date('Y/m/d');

        $customer->save();
        Session::put('guest_customer_id',$customer->id);

        return redirect('/checkout/payment');

    }
}
