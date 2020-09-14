@extends('layouts.general')
@section('content')
<title>Suppliers Table</title>

<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Suppliers Registered in the Database<small>Users</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                     The table below shows all the Suppliers registered in the Jumping Jacks Database
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Supplier Name</th>
                          <th>Supplier Location</th>
                          <th>Telephone Number</th>
                          <th>Supplier Email</th>
                          <th>Supplier Product</th>
                          <th>Created at</th>
                          <th>Updated at</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($suppliers as $row)
                            <tr>
                                <td>{{$row->id }}</td>
                                <td>{{$row->supplier_name }}</td>
                                <td>{{$row->supplier_location }}</td>
                                <td>{{$row->tel_no }}</td>
                                <td>{{$row->supplier_email}}</td>
                                <td>{{$row->supplier_product}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->updated_at }}</td>
                                <td>
                                    <a href= "click_edit/{{ $row->id }} " class= "btn btn-info">Edit</a>
                                </td>
                              </tr>
                              
                        @endforeach
                        <!-- <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                          <td>$183,000</td>
                          <td>$183,000</td>
                        </tr>
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                          <td>$183,000</td>
                          <td>$183,000</td>
                        </tr> -->
                      </tbody>
                    </table>
                    <a href="{{url('/generaluser')}}" class="btn btn-primary" type="button">Back to General User Page</a>
                  </div>
                </div>
              </div>
            </div>
 </div>
 </div>
 @endsection
