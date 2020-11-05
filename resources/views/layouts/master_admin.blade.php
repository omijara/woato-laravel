<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

<title>@yield('title')</title>


  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

<!-- BOOTSTRAP MODAL -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- PLUGINS CSS STYLE -->
  <link href="resource/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

  
  <!-- No Extra plugin used -->
  
  
  <link rel="stylesheet" href="resource/assets/css/parsley.css">
  <link href="resource/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  
  
  
  <link href="resource/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  
  
  
  <link href="resource/assets/plugins/toastr/toastr.min.css" rel="stylesheet" />
  
  

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="resource/assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="resource/assets/img/favicon.png" rel="shortcut icon" />

  

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="resource/assets/plugins/nprogress/nprogress.js"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

  <div class="wrapper">

    <!--Github Link -->
    <a target="_blank" class="github-link">
      <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
        <defs>
          <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
          </linearGradient>
        </defs>
        <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
      </svg>
      <i class="mdi mdi-fire"></i>
    </a> 


<!--
          ====================================
          ——— HEADER Start
          ===================================== -->
           
          <div class="page-wrapper">      
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">

                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="resource/assets/img/user/1.jpg" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="resource/assets/img/user/1.jpg" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">{{ Auth::user()->name }}<small class="pt-1">{{ Auth::user()->email }}</small>
                        </div>
                      </li>
                      
                      <li>
                        <a href="{{ route('profile') }}">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <!--
                      <li>
                        <a href="#">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                    -->
                      <li class="right-sidebar-in">
                        <a href="{{ route('change_password') }}"> <i class="mdi mdi-settings"></i>change password</a>
                      </li>
                      
                      <li class="dropdown-footer">
                        <a class="dropdown-item" href="#" 
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout"></i>Logout
                        </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

      <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{ route('dashboard') }}" title="Woato Dashboard">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name text-truncate">Admin Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="#" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-earth"></i>
                      <span class="nav-text">Woato</span> <b class="caret"></b>
                    </a>
                  </li>
                  <ul  class="collapse show"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                            <li>
                              <a href="http://www.woato.org"target="_blank">View Site</a>
                            </li>
                    </div>      
                  </ul>
                
                     <li  class="has-sub" >
                          <a class="sidenav-item-link" href="#" data-toggle="collapse" data-target="#data-tables"
                            aria-expanded="false" aria-controls="data-tables">
                            <i class="mdi mdi-file-document-box-multiple-outline"></i>
                            <span class="nav-text">List</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="data-tables">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="{{ route('post_list') }}">Post List</a>
                              </li>
                              
                            </div>
                          </ul>
                           <ul  class="collapse"  id="data-tables">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="{{ route('volunteer_list') }}">Volunteer List</a>
                              </li>
                              
                            </div>
                          </ul>
                           <ul  class="collapse"  id="data-tables">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="{{ route('contact_list') }}">Contact List</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>

                        <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Pages</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="about-section.php">
                                <span class="nav-text">About Section</span>
                                
                              </a>
                            </li>
                             <li >
                              <a class="sidenav-item-link" href="donate-section.php">
                                <span class="nav-text">Donate Section</span>
                                
                              </a>
                            </li>
                             <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Events Section</span>
                                
                              </a>
                            </li>
                     
                        

                        
                      </div>
                    </ul>
                  </li>

             <!--     <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                      aria-expanded="false" aria-controls="forms">
                      <i class="mdi mdi-email-mark-as-unread"></i>
                      <span class="nav-text">Forms</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="forms"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Basic Input</span>
                                
                              </a>
                            </li>
                   
                      </div>
                    </ul>
                  </li> -->
          
                       
                        
                      <!--  <li> 
                        <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                        -->
                </ul>
              </div>
            </div>
          </aside>
        </body>


@yield('content')



          <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2020</span> Copyright Woato | Developed by
                <a
                  class="text-primary"
                  href="http://www.facebook.com/omijara"
                  target="_blank"
                  >Omi Mazumder</a
                >.
              </p>
            </div>
          </footer>

    </div>
  </div>

  <script src="resource/assets/plugins/jquery/jquery.min.js"></script>
<script src="resource/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="resource/assets/plugins/jekyll-search.min.js"></script>



<script src="resource/assets/plugins/data-tables/jquery.datatables.min.js"></script>
<script src="resource/assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>
<script src="resource/assets/plugins/data-tables/datatables.responsive.min.js"></script>

<script src="resource/assets/plugins/charts/Chart.min.js"></script>
  


<script src="resource/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="resource/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  


<script>
  jQuery(document).ready(function() {
    jQuery('#responsive-data-table').DataTable({
      "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
      "pageLength": 20,
      "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
    });
  });
</script>
  
<script src="resource/assets/plugins/toastr/toastr.min.js"></script>

<script src="resource/assets/js/jquery-3.3.1.min.js"></script>
<script src="resource/assets/js/parsley.min.js"></script>
<script src="resource/assets/js/sleek.bundle.js"></script>

<script type="text/javascript">
  $('#toastmsg').fadeOut(10000);
</script>

</body>

</html>
