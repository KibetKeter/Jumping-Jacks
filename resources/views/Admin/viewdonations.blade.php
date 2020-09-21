@extends('layouts.general')
@section('content')
<title>Donations Table</title>

<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Donations Recorded in the Database<small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                     The table below shows all the Donations recorded in the Jumping Jacks Database
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Donor Name</th>
                          <th>Description</th>
                          <th>Amount</th>
                          <th>Created at</th>
                          <th>Updated at</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($donations as $row)
                            <tr>
                                <td>{{$row->id }}</td>
                                <td>{{$row->donor_name }}</td>
                                <td>{{$row->description}}</td>
                                <td>{{$row->amount }}</td>                                                  
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
                    <a href="{{url('/admin/donationsadmin') }}" type="button" class="btn btn-primary">Record Donation</a><br/>
                    <a href="{{url('/admin')}}" class="btn btn-secondary" type="button">Back to Admin Dashboard Page</a>
                   
                  </div>
                </div>
              </div>
            </div>
 </div>
 </div>
 @endsection
