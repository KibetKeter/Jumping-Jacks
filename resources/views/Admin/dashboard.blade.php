@extends('layouts.general')
@section('content')
<br/>
</br/>
<div class="title_left">
    @if (session('status'))
        <div role="alert">
            {{ session('status') }}
        </div>
    @endif
   <h5> You have administrator rights </h5>
   <br/>
</div>
<div class="row">
    <!-- First Tile -->
      <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320">
                <!-- Title of Tile and Minimize button -->
                  <div class="x_title">
                        <h2>Supplier 🚚</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                              </ul>
                  <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                      <p> This section is used to Create Update and Delete the Suppliers Details</p><br/>
                        <a href="{{url('/admin/supplierinput') }}" type="button" class="btn btn-success">Register Supplier</a>
                        <a href="{{url('/admin/supplierinput/table') }}" type="button" class="btn btn-success">View Supplier</a>
                        <br>
                        <a href="{{url('/admin/supplierinput/table') }}" type="button" class= "btn btn-rectangle btn-warning">Edit Supplier</a>
                        <a href= "{{url('/admin/supplierinput/table') }}" class="btn btn-rectangle btn-danger">Delete a Supplier</a>
                        <br/>
                    </div>
                  <!-- End of the content of the Tile -->
          </div>
        </div>
      <!-- End of First Tile -->

  <!-- Second  Tile -->
    <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320 overflow_hidden">
                <!-- Title of Tile and Minimize button -->
                  <div class="x_title">
                        <h2>Donors 🤵🏿</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                        <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                        <p> This section is used to update the Donors Details. All donors that donate to the company are recorded here.</p> 
                        
                        <br/>
                          <a href="{{url('/admin/donorinput') }}" type="button" class="btn btn-success">Register Donor</a>
                          <a href="{{url('/admin/donorinput/table') }}" type="button" class="btn btn-success">View Donor</a><br/>
                          <a href="{{url('/admin/donorinput/table') }}" type="button" class= "btn btn-rectangle btn-warning">Edit Donor</a>
                          <a href="{{url('/admin/donorinput/table') }}" class="btn btn-rectangle btn-danger">Delete Donor</a>
                        <br/> 
                    </div>
                  <!-- End of the content of the Tile -->
          </div>
        </div>
  <!-- End of Second Tile -->

  <!-- Third Tile -->
  <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320 overflow_hidden">
                <!-- Title of Tile and Minimize button -->
                  <div class="x_title">
                        <h2> Stock 📦</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                        <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                        <p> This section is used to Create Update and Delete the Stock Details</p><br/><br/>                                 
                        <a href = "{{url('/admin/stockinput')}}" type="button" class="btn btn-success">Record Stock</a>
                        <a href = "{{ url('/admin/stockview/table')}}" type="button" class="btn btn-success">View Stock</a><br/>
                        <a href = "{{ url('/admin/stockview/table')}}" type="button" class= "btn btn-rectangle btn-warning">Edit Stock</a>
                        <a href = "{{ url('/admin/stockview/table')}}" class="btn btn-rectangle btn-danger">Delete Stock</a>

                        

                    </div>
                  <!-- End of the content of the Tile -->
          </div>
        </div>
  <!-- End of Third Tile -->

  <!-- Fourth  Tile -->
  <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320 overflow_hidden">
                <!-- Title of Tile and Minimize button -->
                  <div class="x_title">
                        <h2 style ="text-align:center">Donations💸</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                        <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                    <p> This section is used to Create Update and Delete the Donations</p><br/>                                  
                        <a  href = "{{url('/admin/donationsadmin')}}"type="button" class="btn btn-success">Record Donation</a>
                        <a href="{{url('/admin/donationsadmin/table')}}" class="btn btn-success">View Donation</a>
                        <a href = "{{url('/admin/donationsadmin/table')}}" type="button" class= "btn btn-rectangle btn-warning">Edit Donation</a>
                        <a href = "{{url('/admin/donationsadmin/table')}}"class="btn btn-rectangle btn-danger">Delete Donation</a>


            </div>
                  <!-- End of the content of the Tile -->
          </div>
        </div>
  <!-- End of Fourth Tile -->
  <!-- Start of Fifth Tile -->
    <div class="col-md-4 col-sm-4 ">
                              <div class="x_panel tile fixed_height_320 overflow_hidden">
                                          <div class="x_title">
                                              <h2>Order Section🚚</h2>
                                                  <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                  </ul>
                                              <div class="clearfix"></div>
                                        </div>
                                          <div class="x_content">
                                               <p> This section is used to Create Update and Delete Orders</p><br/>            
                                          <a href="{{url('/admin/orderinput') }}" type="button" class="btn btn-success">Register Order</a>
                                          <a href="{{url('/admin/orderinput/table') }}" type="button" class="btn btn-success">View Orders</a><br/>
                                          <a href="{{url('/admin/orderinput/table') }}" type="button" class= "btn btn-rectangle btn-warning">Edit Orders</a>
                                          <a href="{{url('/admin/orderinput/table') }}" class="btn btn-rectangle btn-danger">Delete Order</a>
                                      </div>
                                </div>
                              </div>
                 
  <!-- End of Fifth Tile -->
  

  <!-- For copy and Pasting for the Admin Functionalities -->
  <!-- Second  Tile -->
         
            <div class="col-md-4 col-sm-4 ">
                <div class="x_panel tile fixed_height_320 overflow_hidden">
                            <div class="x_title">
                                <h2>Manage Accounts💰</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                      </li>
                                    </ul>
                                <div class="clearfix"></div>
                          </div>
                            <div class="x_content">
                              <p>This section is used to view account details in the company.</p><br/>
                              <a href="{{ route('view_accounts')}} " type="button" class="btn btn-success">Manage Order Transaction</a>
                            </div>
                            </div>
                          </div>
                </div>
              </p>
            </div>
          </div>
              <!--End of Second Tile -->
              <!-- For copy and Pasting for the Admin Functionalities -->
              <!--  Extra Tile-->
              <!-- <div class="col-md-4 col-sm-4 ">
                              <div class="x_panel tile fixed_height_320 overflow_hidden">
                                          <div class="x_title">
                                              <h2>App Versions</h2>
                                                  <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                  </ul>
                                              <div class="clearfix"></div>
                                        </div>
                                        Content of Tile
                                          <div class="x_content">
                                            <h4>App Usage across versions</h4>
                                              <p> This section is used to update the amount of stock available within the company.<br/> Click the button below to update</p>
                                          </div>
                                        End of the content of the Tile
                                </div>
                              </div>
                  </div> -->
  </div>
</div>
</div>
<br/>
<br/>
@endsection
