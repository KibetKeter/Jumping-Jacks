@extends('layouts.general')
@section('content')

<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2><strong>Stock Information</strong></h2>
								<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
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
									<form action="/admin/stockinput/update{{ $stocks[0]-> id}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf

                                           <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="stock_type">Type of Stock<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name= "stock_type"type="text" id="stock_type" value = "{{ $stocks[0]-> stock_type}}" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="stock_amount">Quantity brought in<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name= "stock_amount" type="int" id="stock_amount" value = "{{ $stocks[0]-> stock_amount}}" required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Delivery Date</strong><span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                 <input name="delivery_date" class="date-picker form-control"  value = "{{ $stocks[0]-> delivery_date}}"placeholder="dd-mm-yyyy" type="text" required="required"
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
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Best Before<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                 <input name="best_before_date" class="date-picker form-control" value = "{{ $stocks[0]-> best_before_date}}" placeholder="dd-mm-yyyy" type="text" 
                                                 type="text" onfocus="this.type='date'" onmouseover="this.type='date'"  required="required"
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

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="message">Description of Stock:</label>
											<div class="col-md-6 col-sm-6 ">
												<input value = "{{ $stocks[0]-> description}}" id="description" required="required" class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" 
													  data-parsley-minlength-message="Come on! You need to enter at least a 20 characters long comment.." data-parsley-validation-threshold="10"></textarea>
										</div>
										</div>

										
									<button type="submit" class="btn btn-round btn-danger">Update</button>
									<a href="{{url('/admin')}}" class="btn btn-primary" type="button">Back to  Admin Dashboard</a>
									<a href = "{{ url('/admin/stockview/table')}}" type="button" class="btn btn-success">Back to Stock table</a>
								</div>
							</div>
						</div>
					</div>
@endsection
    

        