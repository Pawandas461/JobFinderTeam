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


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=login" />


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

        .form{
            background: rgba(255, 255, 255, 0.5);

        }
        @media (min-width: 780px) {
            .form {
                width: 500px;
                padding: 10px;
                
            }
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
                                <li><a class="dropdown-item" href="{{url('/candidate/jobs/technical_it_jobs')}}">Technology IT Jobs</a></li>
                                <li><a class="dropdown-item" href="{{ url('/candidate/jobs/creative_jobs')}}">Creative jobs</a></li>
                                <li><a class="dropdown-item" href="{{ url('/candidate/jobs/healthcare_jobs')}}">Healthcare jobs</a></li>
                                <li><a class="dropdown-item" href="{{ url('/candidate/jobs/finance_business')}}">Finance and Business</a></li>
                                <li><a class="dropdown-item" href="{{ url('/candidate/jobs/education_training')}}">Education and Training</a></li>
                                <li><a class="dropdown-item" href="{{ url('/candidate/jobs/sales_marketing') }}">Sales and Marketing</a></li>
                                <li><a class="dropdown-item" href="{{ url('/candidate/jobs/logistics_operations') }}">Logistics Operations</a></li>
                                <li><a class="dropdown-item" href="{{ url('/candidate/jobs/engineering_jobs') }}">Engineering jobs</a></li>

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
                            <img src="{{asset('assets/images/avatars/01.png')}}" class="rounded-circle p-1 border" width="45"
                                height="45">
                        </a>

                        @if(session('name') && session('user_id'))
                        <div class="dropdown-menu dropdown-user dropdown-menu-end shadow" style="width: 250px">
                            <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                                <div class="text-center">
                                    <img src="{{asset('assets/images/avatars/01.png')}}" class="rounded-circle p-1 shadow mb-3"
                                        width="90" height="90" alt="">
                                    <h5 class="user-name mb-0 fw-bold">{{ session('name') }}</h5>
                                </div>
                            </a>

                            <hr class="dropdown-divider">
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ url('/logout')}}">
                                <i class="material-icons-outlined">logout</i>Logout

                            </a>

                            @else
                            <div class="dropdown-menu dropdown-user dropdown-menu-end shadow" style="width: 250px">
                                <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                                    <div class="text-center">
                                        <img src="{{asset('assets/images/avatars/01.png')}}" class="rounded-circle p-1 shadow mb-3"
                                            width="90" height="90" alt="">
                                        <h5 class="user-name mb-0 fw-bold">Wellcome</h5>
                                    </div>
                                </a>

                                <hr class="dropdown-divider">
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ url('/candidate/my_resume')}}">
                                    <i class="material-icons-outlined">task</i>My Resume
                                </a>
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ url('/login')}}">
                                    <i class="material-icons-outlined">login</i>Candidate Login
                                </a>

                                <hr class="dropdown-divider">
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ url('/company/login')}}">
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

    
    <!-- Form -->
    <form class="row form g-3 mx-auto mt-4" action="{{ url('/candidate/create_resume_action')}}" method="post">
        @csrf
        <h3>Create Resume</h3>
    
        <!-- Address -->
        <div class="col-md-12">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" placeholder="Enter your address" rows="3"></textarea>
        </div>
    
        <!-- Degree -->
        <div class="col-md-6">
            <label for="degree" class="form-label">Degree</label>
            <input type="text" class="form-control" id="degree" name="degree" placeholder="Enter your degree">
        </div>
    
        <!-- Stream -->
        <div class="col-md-6">
            <label for="stream" class="form-label">Stream</label>
            <input type="text" class="form-control" id="stream" name="stream" placeholder="Enter your stream">
        </div>
    
        <!-- College -->
        <div class="col-md-12">
            <label for="college" class="form-label">College</label>
            <input type="text" class="form-control" id="college" name="college" placeholder="Enter your college">
        </div>
    
        <!-- Pursuing Education -->
        <div class="col-md-6">
            <label class="form-label">Pursuing Education</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pursuing_education_status" id="pursuingYes" value="yes">
                    <label class="form-check-label" for="pursuingYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pursuing_education_status" id="pursuingNo" value="no">
                    <label class="form-check-label" for="pursuingNo">No</label>
                </div>
            </div>
            <div class="col" id="pursuingEducationName" style="display: none;">
                <label for="educationName" class="form-label">Pursuing Education Name</label>
                <input type="text" class="form-control" id="educationName" name="pursuing_education" placeholder="Enter the education name">
            </div>
        </div>
    
        <!-- Experience Status -->
        <div class="col-md-6">
            <label class="form-label">Experience Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="experience_status" id="experienceYes" value="yes">
                    <label class="form-check-label" for="experienceYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="experience_status" id="experienceNo" value="no">
                    <label class="form-check-label" for="experienceNo">No</label>
                </div>
            </div>
            <div class="col" id="experienceYears" style="display: none;">
                <label for="experience" class="form-label">Years of Experience</label>
                <input type="number" class="form-control" id="experience" name="experience" placeholder="Enter years of experience">
            </div>
        </div>
    
        <!-- Skills -->
        <div class="col-md-12">
            <label for="skills" class="form-label">Skills</label>
            <textarea class="form-control" id="skills" name="skills" placeholder="List your skills" rows="3"></textarea>
        </div>
    
        <!-- Known Languages -->
        <div class="col-md-12">
            <label for="languages" class="form-label">Known Languages</label>
            <textarea class="form-control" id="languages" name="known_languages" placeholder="List the languages you know" rows="3"></textarea>
        </div>
    
        <!-- Buttons -->
        <div class="col-md-12">
            <div class="d-md-flex pb-3 d-grid align-items-center gap-3">
                <button type="submit" class="btn btn-primary px-4">Submit</button>
                <button type="reset" class="btn btn-secondary px-4">Cancel</button>
            </div>
        </div>
    </form>
    

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
                            <a href="#!" class="text-dark">About us</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-dark">Jobs</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-dark">Contact Us</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-dark">Help</a>
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
            © 2024 Copyright:
            <a class="text-white" href="{{ url('/candidate') }}">jobfinder.com</a>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pursuingYes = document.getElementById('pursuingYes');
            const pursuingNo = document.getElementById('pursuingNo');
            const educationField = document.getElementById('pursuingEducationName');

            const experienceYes = document.getElementById('experienceYes');
            const experienceNo = document.getElementById('experienceNo');
            const experienceField = document.getElementById('experienceYears');

            pursuingYes.addEventListener('change', () => {
                educationField.style.display = 'block';
            });
            pursuingNo.addEventListener('change', () => {
                educationField.style.display = 'none';
            });

            experienceYes.addEventListener('change', () => {
                experienceField.style.display = 'block';
            });
            experienceNo.addEventListener('change', () => {
                experienceField.style.display = 'none';
            });
        });
    </script>
</body>

</html>