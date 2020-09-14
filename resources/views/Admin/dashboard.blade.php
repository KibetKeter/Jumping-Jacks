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
    <strong>You are an Admin🚓👮🏿‍♂️👮🏿‍♀️</strong>
</div>
<div class="row">
    <!-- First Tile -->
      <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320">
                <!-- Title of Tile and Minimize button -->
                  <div class="x_title">
                        <h2>Input Supplier Details🚚</h2>
                              <ul>
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                              </ul>
                  <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                      <p> This section is used to update the Suppliers Details. This is crucial in ensuring the Supplier Details are up to date</p>
                        <a href="{{url('/admin/supplierinput') }}" type="button" class="btn btn-primary">Register Now😀</a>
                        <a href="{{url('/admin/supplierinput/table') }}" type="button" class="btn btn-primary">View Suppliers</a>
                        <a href="{{url('/admin/supplierinput') }}" type="button" class="btn btn-primary">Edit Suppliers</a>
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
                        <h2>Input Donor Details🤵🏿</h2>
                            <ul>
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                        <div class="clearfix"></div>
                  </div>
                  <!-- Content of Tile -->
                    <div class="x_content">
                        <p> This section is used to update the Donors Details. We as a company value our Donors alot.
                        For this reason we take a lot of pride in ensuring our donors list and details are always up to date. 
                        <br/> <strong>Click the button below to Update and Register a new Donor Respectively</strong></p>
                        <br/>
                        <a href="{{url('/generaluser/donorinput') }}" type="button" class="btn btn-primary">Register</a>
                        
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
                        <h2>Input Stock📦</h2>
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
                        <strong>Click the button below to input the amount of stock brought in by the supplier</strong></p>
                        <br/>
                        <br/>
                        <button type="button" class="btn btn-secondary">Update</button>
                        <button type="button" class="btn btn-primary">Register</button>
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
                       <p> This section is used to input the donations given by the donors.
                       <br/>
                       </br>
                       <strong>Click the button below to input the donations</strong></p>
                        <br/>
                        <br/>
                        <button type="button" class="btn btn-secondary">Update</button>
                        <button type="button" class="btn btn-primary">Register</button>
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
                                <h2>View all Current Stock📥</h2>
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
                                <strong>Click to view table</strong></p>
                                <br/>
                                <br/>
                                <button type="button" class="btn btn-secondary">Click me!😏</button>
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
