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
</div>
<div class="row">
    <!-- First Tile -->
      <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320">
                <!-- Title of Tile and Minimize button -->
                  <div class="x_title">
                        <h2>Supplier 🚚</h2>
                              <ul>
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                              </ul>
                  <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                      <p> This section is used to update the Suppliers Details. This is crucial in ensuring the Supplier Details are up to date</p>
                        <a href="{{url('/admin/supplierinput') }}" type="button" class="btn btn-primary">Register suppliers</a><br/>
                      <a href="{{url('/admin/supplierinput/table') }}" type="button" class="btn btn-primary">View Suppliers</a><br/>
                        <a href="{{url('/admin/supplierinput/table') }}" type="button" class="btn btn-primary">Edit Suppliers</a>
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
                            <ul>
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                        <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                        <p> This section is used to update the Donors Details. All donors that donate to the company are recorded here. 
                        
                        <br/>
                        <br>
                        <a href="{{url('/generaluser/donorinput') }}" type="button" class="btn btn-primary">Record donor details</a>
                        <button type="button" class="btn btn-primary">View current donors</button>
                        <button type="button" class="btn btn-primary">Edit donor details</button>
                        
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
                            <ul>
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                        <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                        <p> This section is used to update the amount of stock available within the company.
                        <br/>
                        <br/>
                        
                        <br/>
                        
                        <button type="button" class="btn btn-primary">Record stock details</button>
                        <button type="button" class="btn btn-primary">Edit stock details</button>

                        

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
                            <ul>
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                        <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                       <p> This section is used to input any donations given by various donors.
                       <br/>
                      
                      
                        <br/>
                        <button type="button" class="btn btn-primary">Record donations</button>
                        <button type="button" class="btn btn-primary">View donations</button>
                        <button type="button" class="btn btn-primary">Edit donations</button>
                        


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
                                            
                                              <p> This section is used to order materials that may be required by the company.
                                              
                                          </div>
                                          <a href="{{url('/admin/orderinput') }}" type="button" class="btn btn-primary">Register an Order</a><br/>
                                          <a href="{{url('/admin/orderinput/table') }}" type="button" class="btn btn-primary">View Order Table</a>
                                          <a href="" type="button" class="btn btn-primary">Edit Suppliers</a>
                                </div>
                              </div>
                 
  <!-- End of Fifth Tile -->

  <!-- For copy and Pasting for the Admin Functionalities -->
  <!-- Second  Tile -->
         
            <div class="col-md-4 col-sm-4 ">
                <div class="x_panel tile fixed_height_320 overflow_hidden">
                            <div class="x_title">
                                <h2>View Current Stock 📥</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                      </li>
                                    </ul>
                                <div class="clearfix"></div>
                          </div>
                             <div class="x_content">
                                <p> This section is used to update the amount of stock available within the company.<br/> 
                               <br/>
                             
                                <br/>
                                <button type="button" class="btn btn-secondary">Click to view inventory</button>
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
