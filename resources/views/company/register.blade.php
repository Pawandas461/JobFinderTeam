<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Register Page</title>

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
            background-image: url(asset{{'assets/images/signup_background.png' }});
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
    {{-- @if (session('message'))
        <script>
            alert("{{ session('message') }}");
        </script>
    @endif

    @if (session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif --}}


    <!--authentication-->

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
                            <h1 class="fw-bold">Create a account</h1>
                            <p class="mb-0">Enter your credentials to create your account</p>

                            <div class="form-body mt-4">
                                <form class="row g-3" action="{{ url('/register-company') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <!-- Company Name -->
                                    <div class="col-12">
                                        <label for="companyName" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="companyName" name="company_name"
                                            placeholder="Enter Company Name" required>
                                        @if ($errors->has('company_name'))
                                            <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="companyAddress" class="form-label">Company Address /
                                            Location</label>
                                        <input type="text" class="form-control" id="companyAddress"
                                            name="company_address" placeholder="Enter Company Address" required>
                                        @if ($errors->has('company_address'))
                                            <span class="text-danger">{{ $errors->first('company_address') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="tradeNumber" class="form-label">Trade Number</label>
                                        <input type="text" class="form-control" id="tradeNumber" name="trade_number"
                                            placeholder="Enter Trade Number" required>
                                        @if ($errors->has('trade_number'))
                                            <span class="text-danger">{{ $errors->first('trade_number') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="companyEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="companyEmail" name="email"
                                            placeholder="example@domain.com" required>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="companyPhone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="companyPhone" name="phone"
                                            placeholder="Enter Contact Number" required>
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="webLink" class="form-label">Web Link (Optional)</label>
                                        <input type="url" class="form-control" id="webLink" name="web_link"
                                            placeholder="https://example.com">
                                        @if ($errors->has('web_link'))
                                            <span class="text-danger">{{ $errors->first('web_link') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="companyExperience" class="form-label">Company Experience</label>
                                        <input type="number" class="form-control" id="companyExperience"
                                            name="company_experience" placeholder="Enter Experience in Years"
                                            required>
                                        @if ($errors->has('company_experience'))
                                            <span
                                                class="text-danger">{{ $errors->first('company_experience') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="companyOwner" class="form-label">Company Owner</label>
                                        <input type="text" class="form-control" id="companyOwner"
                                            name="owner_name" placeholder="Enter Owner's Name" required>
                                        @if ($errors->has('owner_name'))
                                            <span class="text-danger">{{ $errors->first('owner_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="ownerAddress" class="form-label">Owner Address</label>
                                        <input type="text" class="form-control" id="ownerAddress"
                                            name="owner_address" placeholder="Enter Owner's Address" required>
                                        @if ($errors->has('owner_address'))
                                            <span class="text-danger">{{ $errors->first('owner_address') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="ownerContact" class="form-label">Owner Contact</label>
                                        <input type="tel" class="form-control" id="ownerContact"
                                            name="owner_contact" placeholder="Enter Owner's Contact Number" required>
                                        @if ($errors->has('owner_contact'))
                                            <span class="text-danger">{{ $errors->first('owner_contact') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="ownerEmail" class="form-label">Owner Email</label>
                                        <input type="email" class="form-control" id="ownerEmail"
                                            name="owner_email" placeholder="owner@example.com" required>
                                        @if ($errors->has('owner_email'))
                                            <span class="text-danger">{{ $errors->first('owner_email') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="companyType" class="form-label">Company Type</label>
                                        <select class="form-select" id="companyType" name="company_type" required>
                                            <option value="" disabled selected>Select Company Type</option>
                                            <option value="Private">Private</option>
                                            <option value="Public">Public</option>
                                            <option value="LLP">LLP</option>
                                            <option value="Startup">Startup</option>
                                        </select>
                                        @if ($errors->has('company_type'))
                                            <span class="text-danger">{{ $errors->first('company_type') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="officeImage" class="form-label">Building or Office Image</label>
                                        <input type="file" class="form-control" id="officeImage"
                                            name="office_image" accept="image/*">
                                        @if ($errors->has('office_image'))
                                            <span class="text-danger">{{ $errors->first('office_image') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="brandLogo" class="form-label">Brand Logo (Optional)</label>
                                        <input type="file" class="form-control" id="brandLogo" name="brand_logo"
                                            accept="image/*">
                                        @if ($errors->has('brand_logo'))
                                            <span class="text-danger">{{ $errors->first('brand_logo') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password"
                                                name="password" placeholder="Enter Password" required>
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
                                            <button type="submit" class="btn btn-primary" name="register">Register
                                                Company</button>
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
                tradeNumber: {
                    element: $('#tradeNumber'),
                    validation: (value) => /^\d+$/.test(value),
                    error: 'Trade Number must contain only digits.',
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
                    validation: (value) => value.trim().length >= 8,
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

    {{-- <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
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
    </script> --}}

</body>

</html>
