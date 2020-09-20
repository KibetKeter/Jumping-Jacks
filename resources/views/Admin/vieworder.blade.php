@extends('layouts.general')
@section('content')
<title>Orders Table</title>
@if(session()->has('success'))
            <div class="alert">
              <ul>
                  @foreach(session()->get('success') as $message)
                      <li>
                         {{$message}}
                      </li>
                  @endforeach
              </ul>
            </div>
  @endif
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pending orders</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                     The table below shows all the Order registered in the Jumping Jacks Database
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Supplier Name</th>
                          <th>Item Ordered</th>
                          <th>Quantity of Material Ordered</th>
                          <th>Cost of Order(Kshs)</th>
                          <th>Date of Delivery</th>
                          <th>Created at</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($orders as $row)
                            <tr>
                                <td>{{$row->id }}</td>
                                <td>{{$row->supplier_name }}</td>
                                <td>{{$row->item_ordered }}</td>
                                <td>{{$row->quantity }}</td>
                                <td>{{$row->amount}}</td>
                                <td>{{$row->delivery_date}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>
                                    <a href= "click_edit/{{ $row->id }} " class= "btn btn-round btn-warning">Edit</a>
                                </td>
                                <td>
                                    <a href= "click_delete/{{ $row->id }} " class="btn btn-round btn-danger">Delete</a>
                                </td>
                              </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <br/>
                    <a href="{{url('/admin/orderinput') }}" type="button" class="btn btn-primary">Register an Order</a><br/>
                    <a href="{{url('/admin')}}" class="btn btn-secondary" type="button">Back to Admin Dashboard Page</a>
                    <a href="{{ route('view_accounts')}} " type="button" class="btn btn-success">Manage Order Transactions</a>
                  </div>
                </div>
              </div>
            </div>
 </div>
 </div>
@endsection