@extends('layouts.general')
@section('content')
                <div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2><strong>Record Donation details</strong></h2>
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
									<form action="{{ route('input_donations.create') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Donor Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input name="donor_name" type="text" id="donor_name" required="required" class="form-control ">
                                                </div>
                                            </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Description-<span class="required">*</span>
											</label>
												<div class="col-md-6 col-sm-6 ">
													<input type="text" id="description" name="description" required="required" class="form-control">
													</div>
                                            </div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Donation Amount(Kshs)<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="amount" name="amount" required="required" class="form-control" placeholder="Input numbers only!">
										</div>
                                    </div>
<div class = "container">
<div class="ln_solid"></div>
	<div class="item form-group">
											
<a href="{{url('/generaluser')}}" class="btn btn-primary" type="button">Back to previous page</a>
<button class="btn btn-primary" type="reset">Reset form</button>
<button type="submit" class="btn btn-success">Submit</button>


												</div>


   
											</div>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

    

@endsection