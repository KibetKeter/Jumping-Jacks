@extends('layouts.general')
@section('content')
<div class="x_panel">
                  <h2>Edit Supplier Details</h2>
</div>
                            <form action= "/admin/supplierinput/update/{{ $suppliers[0]->id}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Supplier Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input name="supplier_name" type="text" id="first-name" required="required" class="form-control"  value= "{{ $suppliers[0] ->supplier_name}}">
                                                </div>
                                            </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Supplier Location<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name= "supplier_location"type="text" id="first-name" required="required" class="form-control " value="{{ $suppliers[0] ->supplier_location }}">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Telephone Number<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name= "tel_no" type="text" id="last-name"  required="required" class="form-control"  value= "{{ $suppliers[0] ->tel_no }}">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Supplier E-Mail<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="email" id="last-name" name="supplier_email" required="required" class="form-control"  value= "{{ $suppliers[0] ->supplier_email }}">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Supplier Product-<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" name="supplier_product" required="required" class="form-control"  value= "{{ $suppliers[0] ->supplier_product }}">
											</div>
                                      </div>  
                                      <button type="submit" class="btn btn-round btn-danger">Update</button>  
                                      </div>    
                                </form>										</div>
@endsection