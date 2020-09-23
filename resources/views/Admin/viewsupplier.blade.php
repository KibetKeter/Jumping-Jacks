@extends('layouts.general')
@section('content')
<title>Suppliers Table</title>
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Suppliers Registered in the Database</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                     The table below shows all the Suppliers registered in the Jumping Jacks Database
                    </p>
                    <!-- Success Message -->
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
                          <th>Edit</th>
                          <th>Delete</th>
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
                    <a href="{{url('/admin/supplierinput') }}" type="button" class="btn btn-primary">Register a Supplier</a><br/>
                    <a href="{{url('/generaluser')}}" class="btn btn-secondary" type="button">Back to Admin Dashboard Page</a>
                  </div>
                </div>
              </div>
            </div>
 </div>
 </div>
 @endsection
