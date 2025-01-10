<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Login Page</title>

    <!-- Plugins -->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/mm-vertical.css') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">


    <style>
        .auth-cover-right,
        .auth-cover-left {
            background-color: #21252900 !important;

        }

        .section-authentication-cover {
            background-image: url(asset{{ 'assets/images/signup_background.png' }});
            background-size: cover;
            min-height: 100vh !important;
        }

        a {
            color: rgb(175, 40, 103);
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

    <div class="section-authentication-cover">
        <div class="">
            <div class="row g-0">

                <div
                    class="col-12 col-xl-6 col-xxl-7 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
                    <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/tech_job.png') }}" class="img-fluid auth-img-cover-login"
                                width="500" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6 col-xxl-5 auth-cover-right align-items-center justify-content-center">
                    <div class="card rounded border-0 shadow-none m-4 wd-auth-box">
                        <div class="card-body p-sm-5">
                            <h1 class="fw-bold">Company Login</h1>
                            <p class="mb-0">Enter your credentials to Login your account</p>

                            <div class="form-body mt-4">
                                <form class="row g-3" action="{{ url('/login-company') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-12">
                                        <label for="tradeNumber" class="form-label">Trade Number</label>
                                        <input type="text" class="form-control" id="tradeNumber" name="trade_number"
                                            placeholder="Enter Trade Number" required>
                                        @if ($errors->has('trade_number'))
                                            <span class="text-danger">{{ $errors->first('trade_number') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="companyEmail" class="form-label">Company Email</label>
                                        <input type="email" class="form-control" id="companyEmail" name="email"
                                            placeholder="example@domain.com" required>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Enter Password" required>
                                            <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                    class="bi bi-eye-slash-fill"></i></a>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <!-- Register Button -->
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary" name="register">Login </button>
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
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            const fields = {
                companyName: {
                    element: $('#companyName'),
                    validation: (value) => value.trim() !== '',
                    error: 'Company Name is required.',
                },
                companyAddress: {
                    element: $('#companyAddress'),
                    validation: (value) => value.trim() !== '',
                    error: 'Company Address is required.',
                },
                companyEmail: {
                    element: $('#companyEmail'),
                    validation: (value) =>
                        /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(value),
                    error: 'Enter a valid email address.',
                },
                companyPhone: {
                    element: $('#companyPhone'),
                    validation: (value) => /^\d{10,15}$/.test(value),
                    error: 'Phone number must be 10-15 digits.',
                },
                webLink: {
                    element: $('#webLink'),
                    validation: (value) =>
                        value === '' || /^(https?:\/\/)?([\w.-]+)\.([a-z.]{2,6})[\/\w .-]*\/?$/.test(value),
                    error: 'Enter a valid URL or leave blank.',
                },
                companyExperience: {
                    element: $('#companyExperience'),
                    validation: (value) => /^\d+$/.test(value) && parseInt(value) > 0,
                    error: 'Experience must be a positive number.',
                },
                companyOwner: {
                    element: $('#companyOwner'),
                    validation: (value) => value.trim() !== '',
                    error: 'Owner name is required.',
                },
                ownerAddress: {
                    element: $('#ownerAddress'),
                    validation: (value) => value.trim() !== '',
                    error: 'Owner address is required.',
                },
                ownerContact: {
                    element: $('#ownerContact'),
                    validation: (value) => /^\d{10,15}$/.test(value),
                    error: 'Owner contact must be 10-15 digits.',
                },
                ownerEmail: {
                    element: $('#ownerEmail'),
                    validation: (value) =>
                        /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(value),
                    error: 'Enter a valid owner email address.',
                },
                companyType: {
                    element: $('#companyType'),
                    validation: (value) => value !== '',
                    error: 'Select a company type.',
                },
                password: {
                    element: $('#password'),
                    validation: (value) => value.trim().length >= 6,
                    error: 'Password must be at least 8 characters.',
                },
            };

            $.each(fields, function(key, field) {
                const errorSpan = $('<span class="text-danger d-block"></span>').hide();
                field.element.after(errorSpan);

                field.element.on('keyup', function() {
                    const value = field.element.val();
                    if (field.validation(value)) {
                        field.element.removeClass('is-invalid');
                        errorSpan.text('').hide(); // Clear error message and hide
                    } else {
                        field.element.addClass('is-invalid');
                        errorSpan.text(field.error).show(); // Show error message
                    }
                });
            });
        });
    </script>



</body>

</html>
