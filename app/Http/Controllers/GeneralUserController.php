<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier; 
use App\Donor_Accounts;
use App\Donation;

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
<<<<<<< HEAD
                            // SUPPLIER INPUTS
// start
=======

   

>>>>>>> 760392cb5ae52759b50a8a8b0881ed4ad56a6561
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
<<<<<<< HEAD
// end
                             //DONOR DETAILS INPUTS
// Start
=======

   

>>>>>>> 760392cb5ae52759b50a8a8b0881ed4ad56a6561
     public function input_donor()
    {
      return view('GeneralUser/donorinput');
    }
    public function push_form()
    {
        $donor = new Donor_Accounts();
        $donor->donor_name = request('donor_name');
        $donor->donor_location = request('donor_location');
        $donor->tel_no = request('telephone_number');
        $donor->donor_email = request('email');
        $donor->donor_product = request('product');
        $donor->save();
    return redirect()->route('input_donor')->withSuccess(['Donor has been Registered Successfully👍🏿']);

   }
// end


// Donations
public function input_donations()
    {
      return view('GeneralUser/donationsinput');
    }
    public function push_towards_form()
    {
        $donations = new Donation();
        $donations->donor_name  = request('donor_name');
        $donations->description = request('description');
       
    return redirect()->route('input_donations')->withSuccess(['Donations have been Recorded Successfully👍🏿']);

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
