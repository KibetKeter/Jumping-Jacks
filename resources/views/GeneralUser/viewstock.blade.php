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
                          <th>Supplier ID</th>
                          <th>Created At</th>
                          <th>Update At</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($stocks as $row)
                        <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->stock_type}}</td>
                                <td>{{$row->stock_amount}}</td>
                                <td>{{$row->supplierId}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->updated_at}}</td>
                        </tr>
                    @endforeach
                      <tbody>
                      </tbody>
                    </table>
                  
                  </div>
                  <a href="{{url('/generaluser')}}" class="btn btn-primary" type="button">Back to previous page</a>
                </div>
              </div>
            </div>
                </div>
              </div>
@endsection