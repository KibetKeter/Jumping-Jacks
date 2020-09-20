@extends('layouts.general')
@section('content')
<title>Manage Accounts</title>
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Accounts</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Supplier Name</th>
                          <th>Item Ordered</th>
                          <th>Quantity of Material Ordered</th>
                          <th>Cost of Order(Kshs)</th>
                          <th>Order Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($accounts as $row)
                            <tr>
                                <td>{{$row->id }}</td> 
                                <td>{{$row->supplier_name }}</td>
                                <td>{{$row->item_ordered }}</td>
                                <td>{{$row->quantity }}</td>
                                <td>{{$row->amount}}</td>
                                <td>@if($row->notDelivered == 1) <b> Not Delivered <b> @else  <b>  Delivered  <b> @endif</td>
                                <td>
                                    <a href= "/admin/accountsview/edit/{{ $row->id }} " class= "btn btn-info">Click me to set order Status</a>
                                </td>
                              </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <br/>
                    <a href="{{url('/admin')}}" class="btn btn-primary" type="button">Back to  Admin Dashboard</a>
                    <a href="{{url('/admin/orderinput/table') }}" type="button" class="btn btn-success">Back to order table</a>
                  </div>
                </div>
              </div>
            </div>
 </div>
 </div>
@endsection