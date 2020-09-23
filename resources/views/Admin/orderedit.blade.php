@extends('layouts.general')
@section('content')
This is the order edit page
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
									<form   action="/admin/orderinput/update/{{ $orders[0]->id}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf
                                        <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="heard"><strong>Choose Supplier:</strong></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <select id = "supplier_name" name="supplier_name" class="form-control">
                                                        <option value="{{ $orders[0] ->supplier_name}}"></option>
                                                        <option>Choose a new Supplier to edit the Supplier</option>
														@foreach($supplier_name as $supplier_name)
															<option value="{{ $supplier_name->supplier_name}}">{{ $supplier_name->supplier_name}}</option>
														@endforeach                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="heard"><strong>Choose Supplier:</strong></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <select id = "supplier_name" name="supplier_name" class="form-control" required>
                                                        <option value="press"> <strong>Select a new value from the options below</strong> </option>
                                                        <option value="press">Press</option>
                                                        <option value="net">Internet</option>
                                                        <option value="mouth">Word of mouth</option>
                                                    </select>
                                                </div>
                                            </div>                                         -->
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><strong>Item to be supplied</strong><span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input name="item_ordered" type="text" id="first-name"  value= "{{ $orders[0] ->item_ordered}}" required="required" class="form-control ">
                                            </div>
                                        </div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><strong>Quantity of Supply</strong><span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="quantity" type="text" id="first-name" value= "{{ $orders[0] ->quantity}}"  required="required" class="form-control ">
											</div>
										</div>
                                         
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" ><strong>Order Status</strong><span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                            <select id = "supplier_name" name="payment_status" class="form-control" required>
                                                        <option disabled selected>@if($orders[0]->paid == 0) <b> Not Paid <b> @else Paid @endif</option>
                                                        <option value="1">Paid</option>
                                                        
                                                    </select>
 											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"><strong>Expected day of delivery</strong><span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                 <input  value= "{{ $orders[0] ->delivery_date}}" name="delivery_date" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" 
                                                 type="text" onfocus="this.type='date'" onmouseover="this.type='date'" 
                                                 onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                                        <script>
                                                            function timeFunctionLong(input) 
                                                                {
                                                                    setTimeout(function() {
                                                                        input.type = 'text';
                                                                    }, 60000);
                                                                }
                                                        </script>
                                                    </div>
										</div>
										</div>
                                        </div>
        <button type="submit" class="btn btn-round btn-danger">Update</button>
        <a href="{{url('/admin/orderinput/table') }}" class="btn btn-primary" type="button">Back to Order Table</a>
        <a href="{{url('/admin')}}" class="btn btn-primary" type="button">Back to  Admin Dashboard</a>
@endsection