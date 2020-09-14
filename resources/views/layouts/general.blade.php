<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/clipboard.ico" type="image/ico" />

    <title>Dash Board</title>

    <!-- Bootstrap -->
    <link href= "{{ asset('gentelelela/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href= "{{asset('gentelelela/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href= "{{asset('gentelelela/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href= "{{asset('gentelelela/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href= "{{asset('gentelelela/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href= "{{asset('gentelelela/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('gentelelela/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('gentelelela/build/css/custom.min.css')}}" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"></i> <span>Jumping Jacks Application</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                    <br/>
                  <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3 style =" font-size: medium;">General</h3>
                <ul class="nav side-menu">
                    <!-- Home Section -->
                            <li><a ><i class="fa fa-desktop"></i> More about the System <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                 <li><a style =" font-size: medium;">
          The purpose of the <strong>Jumping Jacks Food Management System</strong> is to offer a solution to the troubles of managing stock, suppliers and donations given to any 
            organization catetring for the needs of needy citizens. The system can be used by different stakeholders.Enjoy your usage!.</p></a></li>
                                </ul>
                            </li>
                    <!-- Additional Sections -->
                        </ul>
                    </div>
 <!-- Other editable section -->
            <div class="menu_section">
               <h3 style =" font-size: medium;">Credits</h3>
                <ul class="nav side-menu">
                    <li><a> This system was created for the Third Year API Class by:</a> </li>
                      <!-- Group Members Admission Numbers -->

                    <li ><a><i class = "fa fa-bolt"></i>Kipketer Brian Kibet <span class="fa fa-chevron-down"></span></a> 
                             <ul class="nav child_menu">
                                <li><a><i class = "fa fa-university"></i>Admission No: 104088</a><li>
                            </ul>
                    </li>
                    <li ><a><i class = "fa fa-magic"></i>Mutuku Sharlene Ndinda<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a><i class = "fa fa-university"></i>Admission No: 111478</a><li>
                            </ul>
                    </li>
                    <li ><a><i class = "fa fa-leaf"></i>Keth Pere Lemaiyan <span class="fa fa-chevron-down"></span></a> 
                            <ul class="nav child_menu">
                               <li><a><i class = "fa fa-university"></i>Admission No: 113532</a></li>
                            </ul>
                    </li>
                    <li ><a><i class = "fa fa-futbol-o"></i>Richard Gachiri Murithi<span class="fa fa-chevron-down"></span></a> 
                            <ul class="nav child_menu">
                                <li><a><i class = "fa fa-university"></i>Admission No: 112451</a></li>
                            </ul>
                    </li>
                    <li ><a><i class = "fa fa-lightbulb-o"></i>Susan Mbula Kilonzo<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a><i class = "fa fa-university"></i>Admission No: 113549</a></li>
                            </ul>
                    </li>
                    <li ><a><i class = "fa fa-shopping-cart"></i>Diana Mghoi Kalema<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a><i class = "fa fa-university"></i>Admission No: 110355</a></li>
                            </ul>
                    </li>
                    <li ><a><i class = "fa fa-camera"></i>Joan Njoroge<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a><i class = "fa fa-university"></i>Admission No: 112725</a></li>
                            </ul>
                    </li>
                </ul>
      
            </div>
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                    <a style = "text-align: center; width: 230px; height:40px;padding-top: 10px;"
                     data-toggle="tooltip" data-placement="top" title="Logout">
                        <span href="{{ route('logout') }}" class="glyphicon glyphicon-off" aria-hidden="true"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"> 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form></span>
                    </a>
            </div>
            <!-- /menu footer buttons -->
            </div>
        </div>
    </div>
    <!-- top navigation -->
    <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt="">{{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right"></span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                        <a  href="{{ route('logout') }}" class="dropdown-item"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"> 
                                                            {{ __('Logout') }}
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                            </a>
                    </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                      </div>
               </div>
                  </li>
        </div>
</div>
</div>
     <!-- page content -->
     <div class="right_col" role="main">
          <div class="row">
            <div class="page-title">
                <div class="title_left">
                  <h3>Welcome👋🏿<small>{{ Auth::user()->name }} </small></h3>
                </div>
            </div>
            
              <div class="clearfix"></div>

            <!-- <div class="row"> -->
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                     <!-- <h2>This is your dashboard as a General User</h2> -->
                       <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                       </ul>
                    @yield('content')
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"></div>
                    <div class="col-md-9 col-sm-9  "></div>
                      <br />
                    </div>
                                         
</div>

</div>
</div>

</div>
    <!-- jQuery -->
    <script src="{{asset('gentelelela/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
   <script src="{{asset('gentelelela/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('gentelelela/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('gentelelela/vendors/nprogress/nprogress.js')}}"></script>
    <!-- ECharts -->
    <script src="{{asset('gentelelela/vendors/echarts/dist/echarts.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('gentelelela/build/js/custom.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('gentelelela/vendors/iCheck/icheck.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{asset('gentelelela/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('gentelelela/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
  </body>
</html>
