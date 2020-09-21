<?php

namespace App\Http\Controllers;
use App\Supplier; 
use App\Donor_Accounts;
use App\Supplier_Accounts;
use App\Orders;
use App\Donation;
use Illuminate\Http\Request;
use DB;

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
                    // VIEW SUPPLIER TABLE CONTROLLER
// START
                    public function viewSupplier()
                        {
                            $suppliers = DB::select('select * from suppliers');
                            return view('Admin/viewsupplier', ['suppliers'=>$suppliers]);
                        }
// END
// ********************EDIT SUPPLIER TABLE
// START
                    public function editSupplier($id)
                        {
                            $suppliers = DB::select('select * from suppliers where id = ?', [$id]);
                            return view ('Admin/suppliersedit' , ['suppliers' => $suppliers]);
                        }
// END
// ********************UPDATE SUPPLIER TABLE
// START
                    public function updateSupplier(Request $request,$id)
                        {
                            $updated_suppliers_name = $request->input('supplier_name');
                            $updated_suppliers_location = $request->input('supplier_location');
                            $updated_suppliers_telephone= $request->input('tel_no');
                            $updated_suppliers_email = $request->input('supplier_email');
                            $updated_suppliers_product = $request->input('supplier_product');
                            DB::UPDATE('update suppliers set supplier_name=?, supplier_location=?, tel_no=?, supplier_email=?, supplier_product=? where id=?',[$updated_suppliers_name,$updated_suppliers_location, $updated_suppliers_telephone, $updated_suppliers_email, $updated_suppliers_product, $id]);
                            return redirect()->route('view_supplier')->withSuccess(['Order has been Edited Successfully👍🏿']);
                        }
//END
               
                  // VIEW SUPPLIER TABLE CONTROLLER
// START

// END
                    // DELETE SUPPLIER TABLE
//START 
                    public function deleteSupplier($id)
                        {
                            DB::delete('delete from suppliers where id =?',[$id]);
                            return redirect()->route('view_supplier')->withSuccess(['Supplier has been Deleted Successfully👍🏿']);
                       }                       


// END
                      // DONOR INPUTS
 // start
            // Load the Page
            public function input_donor()
            {
                return view('Admin/donorinput');
            }
    // Push to DB
            public function push_form()
            {
                $donor = new Donor_Accounts();
                $donor->donor_name = request('donor_name');
                $donor->donor_location = request('donor_location');
                $donor->tel_no = request('telephone_number');
                $donor->donor_email = request('email');
                $donor->donor_product = request('product');
                $donor->save();
            return redirect()->route('admin_input_donor')->withSuccess(['Supplier has been Registered Successfully👍🏿']);
            }
            

            // View donor inputs
            public function viewDonor()
            {
                $donor = DB::select('select * from donor__accounts');
                return view('Admin/viewdonor', ['donor__accounts'=>$donor]);
            }

            // Edit Donor
            public function editDonor($id)
                        {
                            $donor__accounts = DB::select('select * from donor__accounts where id = ?', [$id]);
                            return view ('Admin/donoredit' , ['donor__accounts'=>$donor__accounts]);
                        }
            public function updateDonor(Request $request,$id)
                    {
                        $updated_donor_name = $request->input('donor_name');
                        $updated_donor_location = $request->input('donor_location');
                        $updated_donor_telephone= $request->input('tel_no');
                        $updated_donor_email = $request->input('donor_email');
                        $updated_donor_product = $request->input('donor_product');
                        DB::UPDATE('update donor__accounts set donor_name=?, donor_location=?, tel_no=?, donor_email=?, donor_product=? where id=?',[$updated_donor_name,$updated_donor_location, $updated_donor_telephone, $updated_donor_email, $updated_donor_product, $id]);
                         return redirect()->route('view_donor')->withSuccess(['Donor has been Edited Successfully👍🏿']);
                    }

            //DELETE
            public function deleteDonor($id)
                        {
                            DB::delete('delete from donor__accounts where id =?',[$id]);
                            return redirect()->route('view_donor')->withSuccess(['Donor has been Deleted Successfully👍🏿']);
                       }       

// end
                            // ORDER INPUTS
// start
            // Load the Page
            public function input_order()
            {   $supplier_name =DB::select('select supplier_name from suppliers');
                return view('Admin/orderinput')-> with('supplier_name',$supplier_name);
            }
// End
// ********************INPUT ORDER INTO TABLE
            // START
                public function push_order_form()
                    {

                        $order = new Orders();
                        $order->supplier_name = request('supplier_name');
                        $order->item_ordered = request('order_item');
                        $order->quantity = request('quantity');
                        $order->delivery_date = request('delivery');
                        $order->amount= request('amount');
                        $order->save();
                    
                        $accounts = new Supplier_Accounts();
                        $accounts->supplier_name = request('supplier_name');
                        $accounts->item_ordered = request('order_item');
                        $accounts->quantity = request('quantity');
                        $accounts->amount= request('amount');
                        $accounts->save();

                        return redirect()->route('admin_input_order')->withSuccess(['Order has been Registered Successfully👍🏿']);
                    }
            //END
                    

             // VIEW ORDERTABLE CONTROLLER
    // START
            public function viewOrder()
                { 
                    $orders = DB::select('select * from orders');
                    return view('Admin/vieworder', ['orders'=>$orders]);
                }
    // END

                // DELETE SUPPLIER TABLE
 //START 
            public function deleteOrder($id)
            {
                DB::delete('delete from orders where id =?',[$id]);
                return redirect()->route('view_order')->withSuccess(['Order has been Deleted Successfully👍🏿']);
            }                       

// END

             // VIEW ACCOUNTS CONTROLLER

    public function viewAccounts()
    { 
        $accounts = DB::select('select * from supplier__accounts');
        return view('Admin/checkaccounts', ['accounts'=>$accounts]);
    }
    // END

     // EDIT ACCOUNTS CONTROLLER

     public function editAccounts($id)
     { 
        $accounts = DB::select('select * from supplier__accounts where id = ?', [$id]);
        return view ('Admin/editaccounts' , ['accounts' => $accounts]);
     }

     public function updateAccounts(Request $request,$id)
     { 
                    // $updated_accounts_name = $request->input('supplier_name');
                    // $updated_accounts_itemordered = $request->input('item_ordered');
                    // $updated_accounts_quantity= $request->input('quantity');
                    $updated_delivery_status= $request->input('status');
                    DB::UPDATE('update supplier__accounts set notDelivered=? where id=?',
                    [$updated_delivery_status, $id]);
                    return redirect()->route('view_accounts')->withSuccess('success','Data Updated');
     }
// END

            // ********************EDIT ORDERS TABLE
// START
        public function editOrder($id)
                {
                    $supplier_name =DB::select('select supplier_name from suppliers');
                    $orders = DB::select('select * from orders where id = ?', [$id]);
                    return view ('Admin/orderedit', ['supplier_name'=>$supplier_name ,'orders' => $orders]);
                    
                }
// END

// ********************UPDATE ORDER TABLE
            // START
                public function updateOrder(Request $request,$id)
                    {
                        $updated_orders_name = $request->input('supplier_name');
                        $updated_orders_itemordered = $request->input('item_ordered');
                        $updated_orders_quantity= $request->input('quantity');
                        $updated_orders_delivery = $request->input('delivery_date');
                        DB::UPDATE('update orders set supplier_name=?, item_ordered=?, quantity=?, delivery_date=? where id=?',
                        [$updated_orders_name, $updated_orders_itemordered, $updated_orders_quantity, $updated_orders_delivery, $id]);
                        return redirect()->route('view_order')->withSuccess(['Order has been Updated Successfully👍🏿']);
                    }
//END

// **********************INPUT DONATIONS IN ADMIN

              public function input_donations()
    {
      return view('Admin/donationsadmin');
    }
    public function push_towards_form()
    {
        $donations = new Donation();
        $donations->donor_name  = request('donor_name');
        $donations->description = request('description');
        $donations->amount = request('amount');
        $donations->save();
    return redirect()->route('input_donations')->withSuccess(['Donations have been Recorded Successfully👍🏿']);
   }


// VIEW DONATIONS TABLE

// START
                    
 public function viewdonations()
                        {
                            $donations = DB::select('select * from donations');
                            return view('Admin/viewdonations', ['donations'=>$donations]);
                        }


// CRUD DONATIONS TABLE





                        

    /**
     * 
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
