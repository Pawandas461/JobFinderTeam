<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobFinder</title>
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=login" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <!--main css-->
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">

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

        .range-container {
            margin-top: 20px;
            margin-bottom: 50px;
            text-align: center;
        }

        .range-container input[type="range"] {
            width: 100%;
        }

        .range-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }

        .range-value {
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        .form-label {
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .material-symbols-outlined {
            font-size: 20px;
        }
    </style>
</head>

<body>

    <!--start header-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand m-0 p-0" href="#">
                <img src="assets/images/jf_logo.jpg" style="border-radius: 40%" height="55" alt="">
            </a>
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
                            <a class="nav-link" href="{{url('candidate')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="categories.php?category=mobile">Mobile</a></li>
                                <li><a class="dropdown-item" href="categories.php?category=laptop">Laptop</a></li>
                                <li><a class="dropdown-item" href="categories.php?category=headphone">Headphone</a></li>
                                <li><a class="dropdown-item" href="categories.php?category=tv">TV</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Offers</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Login/Signup
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/login">Login</a></li>
                                <li><a class="dropdown-item" href="/signup">Signup</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="nav-item dropdown">
                        <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret"
                            data-bs-toggle="dropdown">
                            <img src="assets/images/avatars/01.png" class="rounded-circle p-1 border" width="45"
                                height="45">
                        </a>
                        <div class="dropdown-menu dropdown-user dropdown-menu-end shadow" style="width: 250px">
                            <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                                <div class="text-center">
                                    <img src="assets/images/avatars/01.png" class="rounded-circle p-1 shadow mb-3"
                                        width="90" height="90" alt="">
                                    <h5 class="user-name mb-0 fw-bold">Hello, Jhon</h5>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;">
                                <span class="material-symbols-outlined">
                                    login
                                </span> Login</a>

                            <hr class="dropdown-divider">
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;">
                                <span class="material-symbols-outlined">

                                </span>Logout</a>
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
            <div class="row  pb-4" style="background-color:  rgba(255, 255, 255, 0.3); border-radius:10px;">
                
                    <div class="searching-header justify-content-end align-items-end col-md-4">
                        <div>
                            <h1 style="font-weight: 600">Find Jobs ....</h1>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form action="" method="post">
                            <div class="search-box">
                                <div class="search-bar">
                                    <div class="job-role">
                                        <input type="text" class="form-control" name="job_role" id="job_role"
                                            placeholder="Search By Job Role..." autocomplete="off">
                                    </div>
                                    <div class="job-location">
                                        <input type="text" class="form-control" name="job_location"
                                            id="job_location" placeholder="Search By Job Location..."
                                            autocomplete="off">
                                    </div>
                                    <div class="search-btn">
                                        <input type="submit" value="Search.." class="btn btn-outline-success">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

        {{-- JOB CATAGORIES SECTION --}}
        <div class="container mt-5">

            <div class="row ">
                <div class="col-md-4 border-end">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title  d-flex align-items-start justify-content-center">
                                <span class="material-symbols-outlined text-primary">
                                    filter_alt
                                </span> <strong>Filter</strong>
                            </h5>

                            <div class="mt-3 mb-5">
                                <label for="job_role" class="form-label  d-flex "><span
                                        class="material-symbols-outlined">
                                        category_search
                                    </span>Select Job Role</label>
                                <input type="text" name="job_role" id="job_role" class="form-control">
                            </div>
                            <div class="mt-3 mb-5">
                                <label for="location" class="form-label  d-flex align-items-center"><span
                                        class="material-symbols-outlined">
                                        location_on
                                    </span>Select Location</label>
                                <input type="text" name="location" id="location" class="form-control">
                            </div>
                            <div class="mt-3 mb-5">
                                <div class="range-container">
                                    <label for="location" class="form-label  d-flex align-items-center"> <span
                                            class="material-symbols-outlined">
                                            currency_rupee
                                        </span>Salary Range (per month)</label>
                                    <input type="range" name="salary" id="salary" min="0"
                                        max="100" step="5" value="50" class="form-range">
                                    <div class="range-labels">
                                        <span>0k</span>
                                        <span>10k</span>
                                        <span>20k</span>
                                        <span>30k</span>
                                        <span>40k</span>
                                        <span>50k</span>
                                        <span>60k</span>
                                        <span>70k</span>
                                        <span>80k</span>
                                        <span>90k</span>
                                        <span>100k</span>
                                    </div>
                                    {{-- <div class="range-value">Selected Value: <span id="value">50k</span></div> --}}
                                </div>
                            </div>

                            <div class="mt-3 mb-5 d-flex flex-column">
                                <label for="location" class="form-label  d-flex align-items-center"> <span
                                        class="material-symbols-outlined">
                                        model_training
                                    </span>Work Mode</label>
                                <div class="WFH">
                                    <input type="checkbox" class="me-2" name="work_mode" id=""
                                        value="WFH">Work from home
                                </div>
                                <div class="WFO">
                                    <input type="checkbox" class="me-2" name="" id=""
                                        value="WFO">Work from office
                                </div>
                                <div class="WFF">
                                    <input type="checkbox" class="me-2" name="" id=""
                                        value="WFF">Work from field
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row row-cols-1">
                        @foreach ($jobs as $job)
                            
                        
                        <div class="col">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">{{$job->job_title}}</h5>
                                    <p class="card-text">{{ $job->company_name}}</p>
                                    <div class="title-info d-flex align-items-center">
                                        <div class="location d-flex align-items-center me-4"><span class="material-symbols-outlined me-1">
                                            location_on
                                            </span> {{ $job->company_address}}</div>
                                        <div class="experience  d-flex align-items-center me-4"><span class="material-symbols-outlined me-1">
                                            trip
                                            </span>{{ $job->experience }}</div>
                                        <div class="salary  d-flex align-items-center me-4"><span class="material-symbols-outlined me-1">
                                            payments
                                            </span> <span class="material-symbols-outlined">
                                                currency_rupee
                                                </span> {{ $job->min_salary}} - {{ $job->mex_salary}} RS</div>
                                    </div>
                                    <div class="mt-4 d-flex align-items-center justify-content-between">
                                        <button class="btn btn-primary d-flex gap-2 px-3"><span class="material-symbols-outlined">
                                            approval_delegation
                                            </span>Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        {{-- TOP COMPANIES --}}
        {{-- <div class="container mt-5 mb-5">
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
        </div> --}}
        <!--end main wrapper-->

        <!--start overlay-->
        <div class="overlay btn-toggle"></div>
        <!--end overlay-->

        <!--start footer-->
        <footer class="text-center text-white" style="background-color: rgb(44, 237, 141)">
            <!-- Grid container -->
            <div class="container">
                <!-- Section: Links -->
                <section class="mt-5">
                    <!-- Grid row-->
                    <div class="row text-center d-flex justify-content-center pt-5">
                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">About us</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">Products</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">Awards</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">Help</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">Contact</a>
                            </h6>
                        </div>
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
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
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
            const salaryInput = document.getElementById('salary');
            const salaryValue = document.getElementById('value');

            salaryInput.addEventListener('input', () => {
                salaryValue.textContent = salaryInput.value + 'k';
            });
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
