@extends('layouts.general')
@section('content')
<div class="x_panel">
                  <h2>Edit Donations Details</h2>
</div>
                            <form action= "/admin/donationsadmin/update/{{ $donations[0]->id}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            	<div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Donor Name <span class="required">*</span>
                                                </label>

                                                <div class="col-md-6 col-sm-6 ">
                                                    <input name="donor_name" type="text" id="donor_name" required="required" class="form-control " value="{{ $donations[0] ->donor_name }}">
                                                </div>

                                            </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Description-<span class="required">*</span>
											</label>
												<div class="col-md-6 col-sm-6 ">
													<input type="text" id="description" name="description" required="required" class="form-control" value= "{{ $donations[0] ->description }}">
													</div>

                                            </div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Donation Amount(Kshs)<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="amount" name="amount" required="required" class="form-control" placeholder="Input numbers only!" value= "{{ $donations[0] ->amount }}">
										</div>
                                    </div>

                                     <button type="submit" class="btn btn-rectangle btn-danger">Update</button>  
                                      </div>    
                                </form>										</div>
@endsection