<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobFinder | Find Best Jobs</title>
    <!--favicon-->

    <!--plugins-->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/mm-vertical.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=login" />


    <!-- Custom CSS File-->

    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <!--Owl Carasousel-->
    <link href="{{ asset('assets/owlCar/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/owlCar/css/owl.theme.green.css') }}" rel="stylesheet">

    <script src="{{ asset('assets/owlCar/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/owlCar/js/owl.carousel.min.js') }}"></script>

    <style>
        .nav-item {
            font-weight: 500;
        }

        .navbar-brand {
            font-weight: 500;
        }

        .suggestions-box {
            border: 1px solid #ccc;
            max-height: 150px;
            overflow-y: auto;
            position: absolute;
            /* Ensures it stays within the parent container */
            background: #fff;
            width: calc(100% - 2px);
            /* Match the width of the input field */
            z-index: 1000;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* Optional: Add shadow for better visibility */
        }


        .suggestion-item {
            padding: 8px;
            cursor: pointer;
        }

        .suggestion-item:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <!--start header-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand m-0 p-0" href="#">
                <!-- <img src="assets/images/logo1.png" class="mb-4" width="145" alt=""> -->

                <img src="assets/images/jf_logo.jpg" style="border-radius: 40%" height="55" alt="">
            </a>
            <!-- <a class="navbar-brand" href=" ">JobFinder</a> -->
            <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Ecommerce Web</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/candidate') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/candidate/jobs') }}">Jobs</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="{{ url('/candidate/jobs/technical_it_jobs') }}">Technology IT Jobs</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/candidate/jobs/creative_jobs') }}">Creative
                                        jobs</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('/candidate/jobs/healthcare_jobs') }}">Healthcare jobs</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('/candidate/jobs/finance_business') }}">Finance and Business</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ url('/candidate/jobs/education_training') }}">Education and
                                        Training</a></li>
                                <li><a class="dropdown-item" href="{{ url('/candidate/jobs/sales_marketing') }}">Sales
                                        and Marketing</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('/candidate/jobs/logistics_operations') }}">Logistics
                                        Operations</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('/candidate/jobs/engineering_jobs') }}">Engineering jobs</a></li>

                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Offers</a>
                        </li> -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Login/Signup
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/login">Login</a></li>
                                <li><a class="dropdown-item" href="/signup">Signup</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <div class="nav-item dropdown">
                        <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret"
                            data-bs-toggle="dropdown">
                            <img src="assets/images/avatars/01.png" class="rounded-circle p-1 border" width="45"
                                height="45">
                        </a>

                        @if (session('name') && session('user_id'))
                            <div class="dropdown-menu dropdown-user dropdown-menu-end shadow" style="width: 250px">
                                <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                                    <div class="text-center">
                                        <img src="assets/images/avatars/01.png" class="rounded-circle p-1 shadow mb-3"
                                            width="90" height="90" alt="">
                                        <h5 class="user-name mb-0 fw-bold">{{ session('name') }}</h5>
                                    </div>
                                </a>

                                <hr class="dropdown-divider">
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                    href="{{ url('/candidate/my_resume') }}">
                                    <i class="material-icons-outlined">task</i>My Resume
                                </a>
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                    href="{{ url('/logout') }}">
                                    <i class="material-icons-outlined">logout</i>Logout
                                </a>
                            @else
                                <div class="dropdown-menu dropdown-user dropdown-menu-end shadow"
                                    style="width: 250px">
                                    <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                                        <div class="text-center">
                                            <img src="assets/images/avatars/01.png"
                                                class="rounded-circle p-1 shadow mb-3" width="90" height="90"
                                                alt="">
                                            <h5 class="user-name mb-0 fw-bold">Wellcome</h5>
                                        </div>
                                    </a>

                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                        href="{{ url('/login') }}">
                                        <i class="material-icons-outlined">login</i>Candidate Login
                                    </a>

                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                        href="{{ url('/company/login') }}">
                                        <i class="material-icons-outlined">person_outline</i>Company Login
                                    </a>
                        @endif
                    </div>

                </div>

            </div>
        </div>
        </div>
    </nav>
    <!--end top header-->
    <!--start main wrapper-->
    <div class="">
        <div class="container">
            <!--end breadcrumb-->
            <div class="row pt-5 pb-4" style="background-color:  rgba(255, 255, 255, 0.3); border-radius:10px;">

                <div class="container-fuild col-md-8 d-flex flex-column align-items-center">

                    <div class="searching-header">
                        <div>
                            <div class="green-heading">INDIA’S #1 JOB PLATFORM</div>
                            <h1 style="font-weight: 600">Your job search ends here</h1>
                            <div class="sort-heading">Discover 50 lakh+ career opportunities</div>
                        </div>
                    </div>
                    <div class="">
                        <form action="" method="post">
                            @csrf
                            <div class="search-box">
                                <div class="search-bar">
                                    <div class="job-role" style="position: relative;">
                                        <input type="text" class="form-control" name="job_role" id="job_role"
                                            placeholder="Search By Job Role..." autocomplete="off">
                                        <div id="role_suggestions" class="suggestions-box"></div>
                                    </div>
                                    <div class="job-location" style="position: relative;">
                                        <input type="text" class="form-control" name="job_location"
                                            id="job_location" placeholder="Search By Job Location..."
                                            autocomplete="off">
                                        <div id="location_suggestions" class="suggestions-box"></div>
                                    </div>
                                    <div class="search-btn">
                                        <input type="submit" value="Search.." class="btn btn-outline-success">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-4">
                    <img src="assets/images/Searching.png" width="250px" alt="">
                </div>
            </div>
        </div>

        {{-- JOB CATAGORIES SECTION --}}
        <div class="container mt-5">
            <h1 style="font-weight: 600" class="text-center">JOB CATAGORIES</h1>
            <div class="row pt-5 pb-4" style="background-color:  rgba(255, 255, 255, 0.3); border-radius:10px;">
                <div class="col-lg-3 col-md-4 col-12">

                    <a href="{{ url('/candidate/jobs/technical_it_jobs') }}">
                        <div class="card shadow-none bg-voilet mb-0" style="height: 160px;">
                            <div class="card-body">
                                <h5 class="mb-0 text-white">Technical/IT Jobs</h5>
                                <img src="assets/images/tech_job.png" class="position-absolute end-0 bottom-0"
                                    width="140" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-12">

                    <a href="{{ url('/candidate/jobs/creative_jobs') }}">
                        <div class="card shadow-none bg-success mb-0" style="height: 160px;">
                            <div class="card-body">
                                <h5 class="mb-0 text-white">Creative Jobs</h5>
                                <img src="assets/images/creative_job.png" class="position-absolute end-0 bottom-0"
                                    width="130" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-12">

                    <a href="{{ url('/candidate/jobs/healthcare_jobs') }}">
                        <div class="card shadow-none mb-0"
                            style="height: 160px; background-color:  rgb(234, 21, 145);">
                            <div class="card-body">
                                <h5 class="mb-0 text-white">Healthcare Jobs</h5>
                                <img src="assets/images/helth.png" class="position-absolute end-0 bottom-0"
                                    width="120" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <a href="{{ url('/candidate/jobs/finance_business') }}">

                        <div class="card shadow-none mb-0"
                            style="height: 160px; background-color:  rgb(224, 234, 21);">
                            <div class="card-body">
                                <h5 class="mb-0 text-white">Finance and Business</h5>
                                <img src="assets/images/Finance_job.png" class="position-absolute end-0 bottom-0 m-2"
                                    width="130" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-3">
                    <a href="{{ url('/candidate/jobs/education_training') }}">

                        <div class="card shadow-none mb-0"
                            style="height: 160px; background-color:  rgb(234, 21, 216);">
                            <div class="card-body">
                                <h5 class="mb-0 text-white">Education and Training</h5>
                                <img src="assets/images/education_job.png" class="position-absolute end-0 bottom-0"
                                    width="130" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-3">

                    <a href="{{ url('/candidate/jobs/sales_marketing') }}">

                        <div class="card shadow-none bg-orange mb-0" style="height: 160px;">
                            <div class="card-body">
                                <h5 class="mb-0 text-white">Sales and Marketing</h5>
                                <img src="assets/images/sales_job.png" class="position-absolute end-0 bottom-0"
                                    width="130" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-3">
                    <a href="{{ url('/candidate/jobs/logistics_operations') }}">
                        <div class="card shadow-none bg-danger mb-0" style="height: 160px;">
                            <div class="card-body">
                                <h5 class="mb-0 text-white">Logistics and Operations</h5>
                                <img src="assets/images/logical_job.png" class="position-absolute end-0 bottom-0 m-2"
                                    width="130" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-3">
                    <a href="{{ url('/candidate/jobs/engineering_jobs') }}">

                        <div class="card shadow-none bg-indigo mb-0" style="height: 160px;">
                            <div class="card-body">
                                <h5 class="mb-0 text-white">Engineering Jobs</h5>
                                <img src="assets/images/engineering_job.png"
                                    class="position-absolute end-0 bottom-0 m-2" width="130" alt="">
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>


        {{-- TOP COMPANIES --}}
        <div class="container mt-5 mb-5">
            <h1 style="font-weight: 600" class="text-center">TOP COMPANIES</h1>
            <div class="owl-carousel owl-theme"
                style="background-color:  rgba(255, 255, 255, 0.3); border-radius:10px;">
                <div class="item text-center">
                    <div class="card mb-0"
                        style="border-radius: 50%; height: 150px; width: 150px; overflow: hidden; margin: 0 auto;">
                        <div class="card-body p-0">
                            <img src="assets/images/tech_job.png" class="img-fluid"
                                style="border-radius: 50%; width: 100%; height: 100%;" alt="Technical Jobs">
                        </div>
                    </div>
                    <h5 class="mt-3 text-dark">Technical/IT Jobs</h5>
                </div>
                <div class="item text-center">
                    <div class="card mb-0"
                        style="border-radius: 50%; height: 150px; width: 150px; overflow: hidden; margin: 0 auto;">
                        <div class="card-body p-0">
                            <img src="assets/images/tech_job.png" class="img-fluid"
                                style="border-radius: 50%; width: 100%; height: 100%;" alt="Technical Jobs">
                        </div>
                    </div>
                    <h5 class="mt-3 text-dark">Technical/IT Jobs</h5>
                </div>
                <div class="item text-center">
                    <div class="card mb-0"
                        style="border-radius: 50%; height: 150px; width: 150px; overflow: hidden; margin: 0 auto;">
                        <div class="card-body p-0">
                            <img src="assets/images/tech_job.png" class="img-fluid"
                                style="border-radius: 50%; width: 100%; height: 100%;" alt="Technical Jobs">
                        </div>
                    </div>
                    <h5 class="mt-3 text-dark">Technical/IT Jobs</h5>
                </div>
                <div class="item text-center">
                    <div class="card mb-0"
                        style="border-radius: 50%; height: 150px; width: 150px; overflow: hidden; margin: 0 auto;">
                        <div class="card-body p-0">
                            <img src="assets/images/tech_job.png" class="img-fluid"
                                style="border-radius: 50%; width: 100%; height: 100%;" alt="Technical Jobs">
                        </div>
                    </div>
                    <h5 class="mt-3 text-dark">Technical/IT Jobs</h5>
                </div>
                <div class="item text-center">
                    <div class="card mb-0"
                        style="border-radius: 50%; height: 150px; width: 150px; overflow: hidden; margin: 0 auto;">
                        <div class="card-body p-0">
                            <img src="assets/images/tech_job.png" class="img-fluid"
                                style="border-radius: 50%; width: 100%; height: 100%;" alt="Technical Jobs">
                        </div>
                    </div>
                    <h5 class="mt-3 text-dark">Technical/IT Jobs</h5>
                </div>
                <div class="item text-center">
                    <div class="card mb-0"
                        style="border-radius: 50%; height: 150px; width: 150px; overflow: hidden; margin: 0 auto;">
                        <div class="card-body p-0">
                            <img src="assets/images/tech_job.png" class="img-fluid"
                                style="border-radius: 50%; width: 100%; height: 100%;" alt="Technical Jobs">
                        </div>
                    </div>
                    <h5 class="mt-3 text-dark">Technical/IT Jobs</h5>
                </div>
            </div>
        </div>
        <!--end main wrapper-->

        <!--start overlay-->
        <div class="overlay btn-toggle"></div>
        <!--end overlay-->
        <!--start footer-->
        <footer class="text-center text-dark" style="background-color: rgb(44, 237, 141)">
            <!-- Grid container -->
            <div class="container">
                <!-- Section: Links -->
                <section class="mt-5">
                    <!-- Grid row-->
                    <div class="row text-center d-flex justify-content-center pt-5">
                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="{{ url('/about-us') }}"class="text-dark">About us</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="{{ url('/candidate/jobs') }}" class="text-dark">Jobs</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="{{ url('/contact-us') }}" class="text-dark">Contact Us</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <!-- <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-dark">Help</a>
                            </h6>
                        </div> -->
                        <!-- Grid column -->


                    </div>
                    <!-- Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-5" />

                <!-- Section: Text -->
                <section class="mb-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                                distinctio earum repellat quaerat voluptatibus placeat nam,
                                commodi optio pariatur est quia magnam eum harum corrupti
                                dicta, aliquam sequi voluptate quas.
                            </p>
                        </div>
                    </div>
                </section>
                <!-- Section: Text -->

                <!-- Section: Social -->
                <section class="text-center mb-5">
                    <a href="" class="text-white me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-github"></i>
                    </a>
                </section>
                <!-- Section: Social -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2024 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">jobfinder.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!--top footer-->



        <!--bootstrap js-->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

        <!--plugins-->
        {{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> --}}
        <!--plugins-->
        <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets/plugins/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/js/index.js') }}"></script>
        <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
        <script>
            $(".data-attributes span").peity("donut")
        </script>
        <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script>
            // Static data for job roles and locations
            const jobRoles = [
                'Software Developer',
                'Web Designer',
                'Project Manager',
                'Data Analyst',
                'HR Specialist',
                'Marketing Executive'
            ];

            const jobLocations = [
                'New York',
                'San Francisco',
                'Chicago',
                'Los Angeles',
                'Seattle',
                'Austin'
            ];

            function setupAutocomplete(inputId, suggestionsId, staticValues) {
                const input = document.getElementById(inputId);
                const suggestionsBox = document.getElementById(suggestionsId);

                input.addEventListener('input', function() {
                    const query = this.value.toLowerCase();
                    suggestionsBox.innerHTML = '';

                    if (query.length > 0) {
                        const filteredValues = staticValues.filter(value =>
                            value.toLowerCase().includes(query)
                        );

                        if (filteredValues.length > 0) {
                            filteredValues.forEach(item => {
                                const div = document.createElement('div');
                                div.innerHTML = item;
                                div.className = 'suggestion-item';
                                div.onclick = () => {
                                    input.value = item;
                                    suggestionsBox.innerHTML = '';
                                    console.log(div);
                                    // Clear suggestions
                                };
                                suggestionsBox.appendChild(div);
                            });
                        } else {
                            suggestionsBox.innerHTML = '<div class="suggestion-item">No matches found</div>';
                        }
                    }
                });

                // Hide suggestions on focusout
                input.addEventListener('blur', function() {
                    setTimeout(() => {
                        suggestionsBox.innerHTML = '';
                    }, 100);
                });
            }

            // Apply autocomplete for job roles and locations
            setupAutocomplete('job_role', 'role_suggestions', jobRoles);
            setupAutocomplete('job_location', 'location_suggestions', jobLocations);
        </script>
        <script>
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    center: true,
                    autoplay: true,
                    autoplayTimeout: 1500,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        344: {
                            items: 2
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 4
                        },
                        1200: {
                            items: 5
                        }
                    }
                });
            });
        </script>
</body>

</html>
