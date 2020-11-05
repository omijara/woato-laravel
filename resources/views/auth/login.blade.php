<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

@section('title')
Admin Login | Woato Foundation
@endsection

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="resource/assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="resource/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
 


  <link href="resource/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="resource/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="resource/assets/css/sleek.css" />

  

  <!-- FAVICON -->
  <link href="resource/assets/img/favicon.png" rel="shortcut icon" />

  
  <script src="resource/assets/plugins/nprogress/nprogress.js"></script>
</head>

  <body class="bg-light-gray" id="body">



      <div class="container d-flex flex-column justify-content-between vh-100">
      <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header bg-primary">
              <div class="app-brand">
                <a href="index.php">
                  <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33"
                    viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                      <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                      <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                  </svg>
                  <span class="brand-name">Admin Dashboard</span>
                </a>
              </div>
            </div>
            <div class="card-body p-5">

              <h4 class="text-dark mb-5">Sign In</h4>

               @if(isset(Auth::user()->email))
                <script>window.location="main/dashboard";</script>
               @endif

               @if ($message = Session::get('error'))
               <div class="alert alert-danger alert-block" id="toastmsg">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
               </div>
               @endif

               @if (count($errors) > 0)
                <div class="alert alert-danger" id="toastmsg">
                 <ul>
                 @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                 @endforeach
                 </ul>
                </div>
               @endif
                         
            <hr>

              <form method="post" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input autocomplete="on" id="email" type="email" name="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="E-mail" data-parsley-type="email">
                  </div>
                  <div class="form-group col-md-12 ">
                    <input autocomplete="off" name="password" type="password" class="form-control input-lg" id="password" placeholder="Password">
                  </div>
                  <div class="col-md-12">
                    <div class="d-flex my-2 justify-content-between">
                      <div class="d-inline-block mr-3">
                       <label class="control control-checkbox">{{ __('Remember Me') }}                        
                         <!-- <input type="checkbox" /> -->
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          <div class="control-indicator"></div>
                        </label>
                
                      </div>
                      <p><a class="text-blue" href="{{ route('password.request') }}">Forgot Your Password?</a></p>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>

                    <p>Don't have an account yet ?
                      <a class="text-blue" href="{{url('register')}}">Sign Up</a>
                    </p>
                  </div>
                </div>
              </form>

            </div>
          </div>
       </div>

      </div>

  <div class="copyright pl-0">
        <p class="text-center">&copy; 2020 Copyright Woato | Developed by
         <a class="text-primary" href="http://www.facebook.com/omijara" target="_blank">Omi Mazumder</a>.
        </p>
    </div>
    </div>



<script type="text/javascript">
  $('#toastmsg').fadeOut(10000);
</script>

</body>
</style>
</html>