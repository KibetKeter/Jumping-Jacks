@extends('layouts.general')
@section('content')
This is the accounts edit page
<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Input Order details</h2>
								<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
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
                                      
									<form   action="/admin/stockedit/update/{{ $accounts[0]->id}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="heard"><strong>Stock ID</strong></label>

                                                <div class="col-md-6 col-sm-6 ">
                                                <input name="supplier_name" type="text" id="first-name"  value= "{{ }}" required="required" class="form-control" disabled>

                                                   
                                                </div>
                                            </div>                                        
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><strong>Type of stock</strong><span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input name="item_ordered" type="text" id="first-name"  value= "{{ }}" required="required" class="form-control" disabled>
                                            </div>
                                        </div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><strong>Quantity brought In</strong><span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="quantity" type="text" id="first-name" value= "{{ }}"  required="required" class="form-control" disabled>
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><strong>Delivery Date</strong><span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                <select id = "supplier_name" name="status" class="form-control" required>
                                                        <option disabled selected>@if($accounts[0]->notDelivered == 1) <b> Not Delivered <b> @else Delivered @endif</option>
                                                        <option value="0">Delivered</option>
                                                        
                                                    </select>
                                            </div>
										</div>

										 
										</div>
										</div>
                                        </div>
        <button type="submit" class="btn btn-round btn-danger">Update</button>
        <a href="{{url('/admin')}}" class="btn btn-primary" type="button">Back to  Admin Dashboard</a>
		<a href="{{url('/admin/stockinput/table') }}" type="button" class="btn btn-success">Back to order table</a>
@endsection