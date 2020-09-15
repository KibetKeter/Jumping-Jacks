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
									<form action="{{ route('stock.create') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf
                                           <? /* <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Stock ID <span class="required">*</span>
                                                </label>
                                              <div class="col-md-6 col-sm-6 ">
                                                    <input name="id" type="text" id="first-name" required="required" class="form-control ">
                                                </div> */ ?
                                            </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="stock_type">Type of Stock<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name= "stock_type"type="text" id="stock_type" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="stock_amount">Stock In<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name= "stock_amount" type="int" id="stock_amount"  required="required" class="form-control">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="supplierId">Supplier Id<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="supplierId" type="" id="supplierId" required="required" class="form-control">
											</div>
										</div>
																
									<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<a href="{{url('/generaluser')}}" class="btn btn-primary" type="button">Back to previous page</a>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

    

@endsection