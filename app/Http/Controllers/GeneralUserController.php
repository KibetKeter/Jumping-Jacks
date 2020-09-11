<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier; 

class GeneralUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('generaluser');
     }

    public function index()
    {
      return view('GeneralUser/dashboard');
    }

    public function input_supplier()
    {
      return view('GeneralUser/supplierinput');
    }
    
    public function push_to_form()
    {
        $supplier = new Supplier();
        $supplier->supplier_name = request('supplier_name');
        $supplier->supplier_location = request('supplier_location');
        $supplier->tel_no = request('telephone_number');
        $supplier->supplier_email = request('email');
        $supplier->supplier_product = request('product');
        $supplier->save();
    return redirect()->route('input_supplier')->withSuccess(['Supplier has been Registered Successfully👍🏿']);

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
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
