<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front-end/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('front-end/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front-end/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">

    <title>Roodito Admin Login Page</title> 
    <meta name="description" content="School Management System" />
    <meta name="keywords" content="School, Management, Statistics" /> 
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Roodito-  School Management System" />
    <meta property="og:url" content="https://roodito.com" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="https://roodito.com" />
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  </head>
  <body>
  

  
    <div class="content">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5">
            <span class="d-block text-center my-4 text-muted"> or sign in with</span>
            <div class="social-login text-center">
              <a href="#" class="facebook btn btn-block">
                <span class="icon-facebook mr-3"></span> 
              </a>
              <a href="#" class="twitter btn btn-block">
                <span class="icon-twitter mr-3"></span> 
              </a>
              <a href="#" class="google btn btn-block">
                <span class="icon-google mr-3"></span> 
              </a>
            </div>

          </div>
          <div class="col-md-2 text-center">
            &mdash; or &mdash;
          </div>
          <div class="col-md-5 contents">
            <div class="form-block">
            <div class="mb-4">
                  <h3>Let's Get Started <strong>Roodito</strong></h3>
                  <p class="mb-4">Sign in to continue to Roodito</p>
                </div>
                <form action="#" method="post">
                  <div class="form-group first">
                    <label for="username">Email Address</label>
                    <input type="text" class="form-control" id="username" name="email">
					@error('email')
						<span class="text-danger">{{$message }}</span>
					@enderror

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
						<span class="text-danger">{{$message }}</span>
					@enderror
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                  </div>

                  <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">

                  
                  
                  
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>

  
    <script src="{{ asset('front-end/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front-end/js/popper.min.js') }}"></script>
    <script src="{{ asset('front-end/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-end/js/main.js') }}"></script>
  </body>
</html>