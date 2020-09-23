@extends('layouts.general')
@section('content')
<title>Donors Table</title>

<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Donors Registered in the Database<small>Users</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                     The table below shows all the Donors registered in the Jumping Jacks Database
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
                          <th>Donor Name</th>
                          <th>Donor Location</th>
                          <th>Telephone Number</th>
                          <th>Donor Email</th>
                          <th>Donor Product</th>
                          <th>Created at</th>
                          <th>Updated at</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($donor__accounts as $row)
                            <tr>
                                <td>{{$row->id }}</td>
                                <td>{{$row->donor_name }}</td>
                                <td>{{$row->donor_location }}</td>
                                <td>{{$row->tel_no }}</td>
                                <td>{{$row->donor_email}}</td>
                                <td>{{$row->donor_product}}</td>
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
                    <a href="{{url('/admin/donorinput') }}" type="button" class="btn btn-primary">Register a Donor</a><br/>
                    <a href="{{url('/generaluser')}}" class="btn btn-primary" type="button">Back to General User Page</a>
                  </div>
                </div>
              </div>
            </div>
 </div>
 </div>
 @endsection