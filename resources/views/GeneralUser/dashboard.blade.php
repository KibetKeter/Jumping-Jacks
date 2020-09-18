@extends('layouts.general')
@section('content')
<br/>
</br/>
<title>General User View</title>
    <div class="row">
    <!-- First Tile -->
      <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320">
                <!-- Title of Tile and Minimize button -->
                  <div class="x_title">
                        <h2> Supplier Details🚚</h2>
                              <ul>
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                              </ul>
                  <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                      <p> This section is used to update the Suppliers Details. This is crucial in ensuring the Supplier Details are up to date
                        <br/><strong> Click the button below to Update and Register a new Supplier Respectively</strong></p>
                        <br/>
                        <br/>
                        <a href="{{url('/generaluser/supplierinput') }}" type="button" class="btn btn-primary">Record Supplier details📝</a>
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
                        <h2> Donor Details🤵🏿</h2>
                            <ul>
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                        <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                        <p> This section is used to update the Donors Details. We take a lot of pride in ensuring our donors list and details are always up to date. 
                        <br/> <strong>Click the button below to Update and Register a new Donor Respectively</strong></p>
                        <br/><br>
                        <a href="{{url('/generaluser/donorinput') }}" type="button" class="btn btn-primary">Record Donor details😏</a>
                        
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
                        <h2>Stock 📦</h2>
                            <ul>
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                        <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                        <p> This section is used to update the amount of stock available within the company.
                        <br>
                    
                        <strong>Click the button below to input the amount of stock brought in by the supplier</strong></p>
                        <br/>
                        <br/>
                        <!----<button type="button" class="btn btn-secondary">Update</button> -->
                        <a href="{{url('/generaluser/stock') }}" type="button" class="btn btn-primary">Record Stock details😏</a>
                       <!---- <button type="button" class="btn btn-primary">Record Stock Details</button> -->
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
                       <p> This section is used to input the various donations given by the donors.

                       <br/>
                       </br>
                       <strong>Click the button below to record the donations</strong></p>
                        <br/>
                        <br/>
                        
                        <a href="{{url('/generaluser/donationsinput') }}" type="button" class="btn btn-primary">Record Donations</a>
                    </div>
                  <!-- End of the content of the Tile -->
          </div>
        </div>
  <!-- End of Fourth Tile -->

  <!-- For copy and Pasting for the Admin Functionalities -->
  <!-- Second  Tile -->
          <div>
                <div class="x_panel tile fixed_height_320 overflow_hidden">
                            <div class="x_title">
                                <h2>View Current Stock📥</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                      </li>
                                    </ul>
                                <div class="clearfix"></div>
                          </div>
                             <div class="x_content">
                                <p> This section is used to update the amount of stock available within the company.<br/> 
                               
                               <br><br>
                                <strong>Click to view table</strong></p>
                                <br/>
                                <br/>
                                <br>
                                <button type="button" class="btn btn-secondary">Click to view inventory</button>
                    </div>
                            </div>
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
