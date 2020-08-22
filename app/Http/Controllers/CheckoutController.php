<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Customer;
use App\Http\Controllers\MetaController;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $meta=new MetaController();
        $MetaData=$meta->getMeta($req);

        return view('checkout',compact('brandData','CatData','MetaData'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
/*Customer Registration by Ghazanfar 11-02-2020 */
    public function payment(Request $request){

        // $request->validate(['
        //     fname => required,
        //     lname => required,
        //     email => required,
        //     ']);
        // $customer=new Customer();
        // $customer->first_name=$request->fname;
        // $customer->last_name=$request->lname;
        // $customer->email=$request->email;
        // $customer->password=$request->password;
        // $customer->default_shipping=0;
        // $customer->default_billing=0;
        // $customer->is_subscribe=0;
        // $customer->is_guest=0;
        // $customer->active=0;
        // $customer->last_login=date("Y/m/d");
        // $customer->save();
    }
}
