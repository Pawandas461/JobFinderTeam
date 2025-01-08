<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <!--favicon-->
	<link rel="icon" href="{{asset('assets/images/jf_logo.jpg')}}" type="image/png">

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css">
  <!--bootstrap css-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="sass/main.css" rel="stylesheet">
  <link href="sass/dark-theme.css" rel="stylesheet">
  <link href="sass/responsive.css" rel="stylesheet">

  <style>
    .auth-cover-right, .auth-cover-left{
      background-color: #21252900 !important;
      
    }
    .section-authentication-cover{
      background-image: url('assets/images/signup_background.png');
      background-size: cover;
      min-height: 100vh !important;
    }

    .wd-auth-box{
      border-radius: 30px !important;
      margin: 0px 10% !important;
    }

    button{
      color: #000 !important;
      background: linear-gradient(109.6deg, rgb(50, 135, 75) 11.2%, rgb(26, 161, 87) 100.2%);
      padding: 12px 30px !important;
      border: none !important;
      font-size: 19px !important;
    }
    button:hover{
      color: #000 !important;
      background: linear-gradient(109.6deg, rgb(69, 168, 104) 10.2%, rgb(35, 170, 71) 100.2%);
      padding: 12px 30px !important;
      border: none !important;
      font-size: 19px !important;
    }
    .get-started-heading {
    color:rgb(95, 31, 135) !important;
    }

    .wd-logo-icon{
      margin-bottom: 20px;
    }

    
    a{
      color:rgb(124, 184, 27);
    }

  </style>


  </head>

<body>


  <!--authentication-->

  <div class="section-authentication-cover">
    <div class="">
      <div class="row g-0">

        <div class="col-12 col-xl-7 col-xxl-7 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
          
          <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent">
            <div class="card-body">
              <img src="assets/images/tech_job.png" class="img-fluid auth-img-cover-login" width="500" alt="">
            </div>
          </div>
      
        </div>
         
        <div class="col-12 col-xl-5 col-xxl-5 auth-cover-right align-items-center justify-content-center">
          <div class="card rounded border-0 shadow-none m-4 wd-auth-box">
            <div class="card-body p-sm-5">
              <h1 class="fw-bold">Candidate Login</h1>
              <p class="mb-0">Enter your credentials to login your account</p>

              

              <div class="form-body mt-4">
                <form class="row g-3" action="{{url('/user_login')}}" method="post">
                  @csrf
                  <div class="col-12">
                    <label for="inputEmailAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmailAddress" name="email" placeholder="jhon@example.com">
                  </div>
                  <div class="col-12">
                    <label for="inputChoosePassword" class="form-label">Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input type="password" class="form-control" id="inputChoosePassword" name="password" placeholder="Enter Password"> 
                      <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                    </div>
                  </div>
          
                  </div>
                  <div class="col-md-6 text-start">	<a href="{{url('/forgot_pass')}}">Forgot Password</a>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="text-start">
                      <p class="mb-0">Don't have an account yet? <a href="{{url('/signup')}}">Sign up here</a>
                      </p>
                    </div>
                  </div>
                </form>
              </div>

          </div>
          </div>
        </div>

      </div>
      <!--end row-->
    </div>
  </div>

  <!--authentication-->




  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
      $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass("bi-eye-slash-fill");
          $('#show_hide_password i').removeClass("bi-eye-fill");
        } else if ($('#show_hide_password input').attr("type") == "password") {
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass("bi-eye-slash-fill");
          $('#show_hide_password i').addClass("bi-eye-fill");
        }
      });
    });
  </script>

</body>

</html>