<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
         
    }

    public function index()
    {
        {
            return view('GeneralUser/dashboard');
        }
     }
                   // Stock INPUTS
// start
           // Load the Page
                   public function stock()
                   {
                       return view('GeneralUser.stock');
                   }
           // Push to DB
                   public function push_to_form()
                   {
                    $stock = new stock();
                    $stock->stock_id = request('id');
                    $stock->stock_type = request('stock_type');
                    $stock->stock_amount = request('stock_amount');
                    $stock->supplierId = request('supplierId');
                       
                    $stock->save();
                  return redirect()->route('GeneralUser.stock')->withSuccess(['Stock Updated Successfully👍🏿']);
                  //<a href= "{{route('stock')}}" ->withSuccess 'Stock Updated Successfully👍🏿'>;
                }
// end
                   // VIEW STOCK TABLE CONTROLLER
// START
                   public function viewstock()
                       {
                           $stock = DB::select('select * from stocks');
                           return view('viewstock', ['stock'=>$stock]);
                       }
// END
// ********************EDIT STOCK TABLE
// START
                   public function editstock($id)
                       {
                           $suppliers = DB::select('select * from stocks where id = ?', [$id]);
                           return view ('editstock' , ['stock'=>$stock]);
                       }
// END
// ********************UPDATE STOCK TABLE
// START
                   public function updatestock(Request $request,$id)
                   {
                       $updated_stock_type = $request->input('stock_type');
                       $updated_stock_amount = $request->input('stock_amount');
                       $updated_supplierId= $request->input('supplierId');
                       DB::UPDATE('update stocks set stock_type=?, stock_amount=?, supplierId=?',[$updated_stock_type,$updated_stock_amount, $updated_supplerId, $id]);return redirect()->route('view_stock')->withSuccess('success','Stock Updated');
                   }
//END


    

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
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
