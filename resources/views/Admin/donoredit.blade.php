@extends('layouts.general')
@section('content')
<div class="x_panel">
                  <h2>Edit Donor Details</h2>
</div>
                            <form action= "/admin/donorinput/update/{{ $donor[0]->id}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Donor Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input name="donor_name" type="text" id="first-name" required="required" class="form-control"  value= "{{ $donor[0] ->donor_name}}">
                                                </div>
                                            </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Donor Location<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name= "donor_location"type="text" id="first-name" required="required" class="form-control " value="{{ $donor[0] ->donor_location }}">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Telephone Number<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name= "tel_no" type="text" id="last-name"  required="required" class="form-control"  value= "{{ $donor[0] ->tel_no }}">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Donor E-Mail<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="email" id="last-name" name="donor_email" required="required" class="form-control"  value= "{{ $donor[0] ->donor_email }}">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Donor Product-<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" name="donor_product" required="required" class="form-control"  value= "{{ $donor[0] ->donor_product }}">
											</div>
                                      </div>  
                                      <button type="submit" class="btn btn-round btn-danger">Update</button>  
                                      </div>    
                                </form>										</div>
@endsection