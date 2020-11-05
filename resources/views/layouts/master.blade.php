<!DOCTYPE html>
<html lang="en">
  <head>
  <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700|Anton" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo/favicon.png">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/parsley.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
              <img src="images/logo/logo.png" alt="Logo" width="50" height="70">
              <a href="{{url('/')}}" class="text-black"><span class="text-primary">Woato Foundation</a>
            </div>
            
              <nav class="site-navigation text-center ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="{{url('/')}}" class="nav-link">Home</a></li>
                  <li><a href="{{url('about')}}" class="nav-link">About</a></li>
                  <!--<li><a href="#discover-section" class="nav-link">Discover</a></li>-->
                 <li><a href="{{url('donate')}}" class="nav-link">Donate</a></li>
                  <li><a href="{{url('events')}}" class="nav-link">Events</a></li>
                  <li><a href="{{url('volunteer')}}" class="nav-link">Volunteer</a></li>
                  <li><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
                </ul>
              </nav>
          
            

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    
<!-- Header End Here -->



@yield('content')


<!-- Footer Strat Here -->
     <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>WOATO is fully a voluntary base platform where we work to improve the lifestyle of the under privileged people in terms of awareness, health, safety, food, education etc.</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                 <li><a href="{{url('about')}}" class="nav-link">About</a></li>
                 <!-- <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li> -->
                  <li><a href="{{url('contact')}}" class="nav-link">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4 ml-auto">

          <!--  <div class="mb-5">
              <div class="mb-5">
                <h2 class="footer-heading mb-4">Some Paragraph</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat nostrum libero iusto dolorum vero atque aliquid.</p>
              </div> 
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
              </div> -->


              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="{{('https://www.facebook.com/woatofoundation')}}" target="_blank class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | WOATO <i class="icon-heart" aria-hidden="true"> </i>Developed by <a href="{{('https://www.facebook.com/omijara')}}" target="_blank" >OMI</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/parsley.min.js"></script>
  <script src="js/main.js"></script>

  <script type="text/javascript">
  $('#toastmsg').fadeOut(10000);
</script>
    
  </body>
</html>