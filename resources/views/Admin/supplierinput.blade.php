@extends('layouts.general')
@section('content')
                <div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Input Supplier details</h2>
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
									<form action="{{ route('admin_input_supplier.create') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Supplier Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input name="supplier_name" type="text" id="first-name" required="required" class="form-control ">
                                                </div>
                                            </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Supplier Location<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name= "supplier_location"type="text" id="first-name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Telephone Number<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name= "telephone_number" type="text" id="last-name"  required="required" class="form-control">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Supplier E-Mail<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="email" id="last-name" name="email" required="required" class="form-control">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Supplier Product-<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" name="product" required="required" class="form-control">
											</div>
										</div>
																
									<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-round btn-primary">Submit the form</button><br/>
												<button class="btn btn-round btn-danger" type="reset">Reset the form</button>
												<a href="{{url('/admin/supplierinput/table') }}" type="button" class="btn btn-round btn-success">View Suppliers</a><br/>
												<a href="{{url('/admin')}}" class="btn btn-warning" type="button">Back to Admin Dashboard</a><br/>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

    

@endsection