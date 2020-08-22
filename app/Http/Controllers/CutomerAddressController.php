<?php

namespace App\Http\Controllers;

use App\CutomerAddress;
use Illuminate\Http\Request;

class CutomerAddressController extends Controller
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
     

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CutomerAddress  $cutomerAddress
     * @return \Illuminate\Http\Response
     */
    public function show(CutomerAddress $cutomerAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CutomerAddress  $cutomerAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(CutomerAddress $cutomerAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CutomerAddress  $cutomerAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CutomerAddress $cutomerAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CutomerAddress  $cutomerAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(CutomerAddress $cutomerAddress)
    {
        //
    }

    public function savingCustomerAddress($id,array $data){
           /*==Saving Customer Addresses by Ghazanfar 12-02-2020==*/ 
         CutomerAddress::insert([
            'customer_id' => $id,
            'full_name' => $data['name'],
            'address1' => $data['sddress'],
            'address2' => "",
            'company_name' => $data['cname'],
            'phone_no' => $data['phone'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'country' => $data['country'],
            'is_billing' => 0,
            'active' => 0,  
     ]); 

        
    }

}
