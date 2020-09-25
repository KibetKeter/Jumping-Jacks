@extends('layouts.general')
@section('content')
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
										
									<form action="{{ route('admin_input_order.create') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="heard"><strong>Choose Supplier:</strong></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <select id = "supplier_name" name="supplier_name" class="form-control" required>
                                                        <option value="">Choose Supplier</option>
														@foreach($supplier_name as $supplier_name)
															<option value="{{ $supplier_name->supplier_name}}">{{ $supplier_name->supplier_name}}</option>
														@endforeach                                                        
                                                    </select>
                                                </div>
                                            </div>

                                        
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><strong>Item to be supplied</strong><span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input name="order_item" type="text" id="first-name" required="required" class="form-control ">
                                            </div>
                                        </div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><strong>Quantity of Supply</strong><span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="quantity" type="text" id="first-name" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><strong>Cost of Order(Kshs)</strong><span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="amount" name="amount" required="required" class="form-control" placeholder="Input numbers only!">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"><strong>Expected day of delivery</strong><span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                 <input name="delivery" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" 
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
																
									<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-round btn-primary">Submit the form</button><br/>
												<button class="btn btn-round btn-danger" type="reset">Reset the form</button>
												<a href="{{url('/admin/orderinput/table')}}" type="button" class="btn btn-round btn-success">View Orders table</a><br/>
												<a href="{{url('/admin')}}" class="btn btn-warning" type="button">Back to Admin Dashboard</a><br/>
												
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
@endsection