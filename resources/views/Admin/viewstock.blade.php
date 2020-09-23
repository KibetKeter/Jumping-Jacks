@extends('layouts.general')
@section('content')
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stock Table</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Stock ID</th>
                          <th>Type of Stock Available</th>
                          <th>Amount of Stock Available</th>
                          <th>Delivery Date</th>
                          <th>Best Before</th>
                          <th>Description of the stock</th>
                          <th>Created At</th>
                          <th>Update At</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($stocks as $row)
                        <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->stock_type}}</td>
                                <td>{{$row->stock_amount}}</td>
                                <td>{{$row->delivery_date}}</td>
                                <td>{{$row->best_before_date}}</td>
                                <td>{{$row->description}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->updated_at}}</td>
                                <td>
                                    <a href= "click_edit/{{ $row->id }} " class= "btn btn-round btn-warning">Edit</a>
                                </td>
                                <td>
                                    <a href= "click_delete/{{ $row->id }} " class="btn btn-round btn-danger">Delete</a>
                                </td>
                        </tr>
                    @endforeach
                      <tbody>
                      </tbody>
                    </table>
                  
                  </div>
                  <a href = "{{ url ('/admin/stockinput')}}" type="button" class="btn btn-primary">Record Stock Details</a><br/>
                  <a href="{{url('/admin')}}" class="btn btn-primary" type="button">Back to Dashboard</a>
                </div>
              </div>
            </div>
                </div>
              </div>
@endsection