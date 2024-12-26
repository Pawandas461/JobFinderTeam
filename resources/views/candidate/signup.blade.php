<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create a account - Speakachoo</title>

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
  <link href="sass/responsive.css" rel="stylesheet">

  <style>
    .auth-cover-right,
    .auth-cover-left {
      background-color: #21252900 !important;

    }

    .section-authentication-cover {
      background-image: url('assets/images/signup_background.png');
      background-size: cover;
      min-height: 100vh !important;
    }

    a {
      color:rgb(175, 40, 103);
    }

    .wd-auth-box {
      border-radius: 30px !important;
      margin: 0px 10% !important;

      height: 85vh !important;
      overflow: scroll !important;
    }

    button {
      color: #000 !important;
      background: linear-gradient(109.6deg, rgb(50, 131, 66) 11.2%, rgb(31, 169, 96) 100.2%);
      padding: 12px 30px !important;
      border: none !important;
      font-size: 19px !important;
    }

    button:hover {
      color: #000 !important;
      background: linear-gradient(109.6deg, rgb(70, 151, 110) 10.2%, rgb(31, 168, 95) 100.2%);
      padding: 12px 30px !important;
      border: none !important;
      font-size: 19px !important;
    }

    .inputGender {
      display: flex;

    }

    .inputGender {
      margin-right: 20px;
      /* Space between radio buttons */
    }


    .wd-logo-icon {
      margin-bottom: 20px;
    }
  </style>

</head>

<body>


  <!--authentication-->

  <div class="section-authentication-cover">
    <div class="">
      <div class="row g-0">

        <div
          class="col-12 col-xl-6 col-xxl-7 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

          <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent">
            <div class="card-body">
              <img src="assets/images/tech_job.png" class="img-fluid auth-img-cover-login" width="500" alt="">
            </div>
          </div>

        </div>

        <div class="col-12 col-xl-6 col-xxl-5 auth-cover-right align-items-center justify-content-center">
          <div class="card rounded border-0 shadow-none m-4 wd-auth-box">
            <div class="card-body p-sm-5">
              <h1 class="fw-bold">Create a account</h1>
              <p class="mb-0">Enter your credentials to create your account</p>

              <div class="form-body mt-4">
                <form class="row g-3" action="auth-cover-login.html">
                  <div class="col-6">
                    <label for="inputFirstname" class="form-label">Firstname</label>
                    <input type="email" class="form-control" id="inputUsername" placeholder="Jhon">
                  </div>
                  <div class="col-6">
                    <label for="inputLastname" class="form-label">Lastname</label>
                    <input type="email" class="form-control" id="inputUsername" placeholder="Deo">
                  </div>
                  <div class="col-6">
                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
                  </div>
                  <div class="col-6">
                    <label for="inputContact" class="form-label">Contact No.</label>
                    <input type="tel" class="form-control" id="inputContact" placeholder="XXXXXXXXXX">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Gender</label>
                    <div class="radio-group d-flex">
                      <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="options" id="option1" value="option1">
                        <label class="form-check-label" for="option1">Male</label>
                      </div>
                      <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="options" id="option2" value="option2">
                        <label class="form-check-label" for="option2">Female</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="options" id="option3" value="option3">
                        <label class="form-check-label" for="option3">Other</label>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="inputChoosePassword" class="form-label">Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input type="password" class="form-control" id="inputChoosePassword" value="12345678"
                        placeholder="Enter Password">
                      <a href="javascript:;" class="input-group-text bg-transparent"><i
                          class="bi bi-eye-slash-fill"></i></a>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                      <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &amp;
                        Conditions</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Register Now</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="text-start">
                      <p class="mb-0">Already have an account? <a href="auth-cover-login.html">Sign in here</a></p>
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