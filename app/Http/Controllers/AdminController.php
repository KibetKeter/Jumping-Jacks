<?php

namespace App\Http\Controllers;
use App\Supplier; 
use App\Donor_Accounts;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('admin');
     }

      public function index()
      {
             return view('Admin/dashboard');
      }
                    // SUPPLIER INPUTS
// start
            // Load the Page
                    public function input_supplier()
                    {
                        return view('Admin/supplierinput');
                    }
            // Push to DB
                    public function push_to_form()
                    {
                        $supplier = new Supplier();
                        $supplier->supplier_name = request('supplier_name');
                        $supplier->supplier_location = request('supplier_location');
                        $supplier->tel_no = request('telephone_number');
                        $supplier->supplier_email = request('email');
                        $supplier->supplier_product = request('product');
                        $supplier->save();
                    return redirect()->route('admin_input_supplier')->withSuccess(['Supplier has been Registered Successfully👍🏿']);
                    }
// end

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
