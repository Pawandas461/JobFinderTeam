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
    @error('resume_type')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!--start header-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand m-0 p-0" href="#">
                <!-- <img src="assets/images/logo1.png" class="mb-4" width="145" alt=""> -->

                <img src="{{ asset('assets/images/jf_logo.jpg') }}" style="border-radius: 40%" height="55"
                    alt="">
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
                                <li><a class="dropdown-item"
                                        href="{{ url('/candidate/jobs/sales_marketing') }}">Sales
                                        and Marketing</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('/candidate/jobs/logistics_operations') }}">Logistics
                                        Operations</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('/candidate/jobs/engineering_jobs') }}">Engineering jobs</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
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
                            <img src="{{ asset('assets/images/avatars/01.png') }}" class="rounded-circle p-1 border"
                                width="45" height="45">
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
                                @if (session('resume_id'))
                                    <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                        href="{{ url('/candidate/my_resume') }}">
                                        <i class="material-icons-outlined">task</i>My Resume
                                    </a>
                                @else
                                    <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                        href="{{ url('/candidate/create_resume') }}">
                                        <i class="material-icons-outlined">task</i>Create Resume
                                    </a>
                                @endif
                                <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                    href="{{ url('/candidate/logout') }}">
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
                                        <i class="material-icons-outlined">domain_disabled</i>Company Login
                                    </a>

                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                        href="{{ url('/admin/login') }}">
                                        <i class="material-icons-outlined">person_outline</i>Admin Login
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
        <div class="container pt-4">
            <!--end breadcrumb-->
            <div class="row  pb-4 " style="background-color:  rgba(255, 255, 255, 0.3); border-radius:10px;">

                <div class="searching-header justify-content-end align-items-start col-md-4">
                    <div>
                        <h1 style="font-weight: 600">Find Jobs ....</h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="">
                        <form action="{{ url('/candidate/jobs/search') }}" method="post">
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
                                            id="job_location" placeholder="Search By Job Mode (WFH, WFO, remote)..."
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
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-title">{{ $job->job_title }}</h5>
                                            <div class="d-flex text-end align-items-center me-2">
                                                Posted: <span
                                                    class="material-symbols-outlined ms-1">history</span>{{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}
                                            </div>
                                        </div>


                                        <div class="location d-flex align-items-center me-4 mb-4">

                                            <div class="d-flex align-items-center me-2">
                                                <span class="material-symbols-outlined me-1">apartment</span>
                                                {{ $job->company_name }}
                                            </div>
                                            <span class="material-symbols-outlined me-1">location_on</span>
                                            {{ $job->company_address }}
                                        </div>

                                        <div class="title-info d-flex align-items-center">
                                            <div class="job_mode d-flex align-items-center me-4">
                                                <span
                                                    class="material-symbols-outlined me-1">mode_of_travel</span>{{ $job->job_mode }}
                                            </div>
                                            <div class="experience d-flex align-items-center me-4">
                                                <span class="material-symbols-outlined me-1">trip</span>
                                                @if ($job->experience == 'Freshers')
                                                    {{ $job->experience }}
                                                @else
                                                    {{ $job->experience }} Years
                                                @endif
                                            </div>
                                            <div class="salary d-flex align-items-center me-4">
                                                <span class="material-symbols-outlined me-1">payments</span>
                                                <span class="material-symbols-outlined">currency_rupee</span>
                                                {{ $job->min_salary }} - {{ $job->mex_salary }} RS per month
                                            </div>

                                        </div>

                                        <div class="mt-4 d-flex align-items-center justify-content-between">
                                            <button class="btn btn-primary d-flex gap-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#modal-{{ $job->job_id }}">
                                                <span class="material-symbols-outlined">approval_delegation</span>Apply
                                                Now
                                            </button>
                                            <div class="modal fade" id="modal-{{ $job->job_id }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <img src="{{ asset('assets/images/bg.jpg') }}"
                                                                class="rounded-circle me-3" height="50"
                                                                width="50" alt="">
                                                            <div class="mt-4">
                                                                <h4 class="modal-title">{{ $job->company_name }}</h4>
                                                                <div
                                                                    class="location d-flex align-items-center me-4 mb-4">
                                                                    <div class="d-flex align-items-center me-2">
                                                                        <span
                                                                            class="material-symbols-outlined me-1">apartment</span>
                                                                        {{ $job->company_name }}
                                                                    </div>
                                                                    <span
                                                                        class="material-symbols-outlined me-1">location_on</span>
                                                                    {{ $job->company_address }}
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="d-flex align-items-center me-2 mb-1">
                                                                <span
                                                                    class="material-symbols-outlined me-1">history</span>Posted:
                                                                {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}
                                                            </div>
                                                            <div class="d-flex align-items-center me-2 mb-1">
                                                                @if ($job->job_mode == 'WFH')
                                                                    <span
                                                                        class="material-symbols-outlined me-1">home</span>Work
                                                                    From Home
                                                                @else
                                                                    <span
                                                                        class="material-symbols-outlined me-1">meeting_room</span>Work
                                                                    From Office
                                                                @endif
                                                            </div>
                                                            <div class="d-flex align-items-center me-2 mb-1">
                                                                @if ($job->experience == 'Freshers')
                                                                    <span
                                                                        class="material-symbols-outlined me-1">trip</span>Experience:
                                                                    <div class="apply-by text-end px-2 fs-11 fw-lighter"
                                                                        style="border-radius: 10px; color:rgb(0, 255, 128); background-color:#F1FFE5;">
                                                                        {{ $job->experience }}
                                                                    </div>
                                                                @else
                                                                    <span
                                                                        class="material-symbols-outlined me-1">trip</span>Experience:
                                                                    <div class="apply-by text-end px-2 fs-11 fw-lighter"
                                                                        style="border-radius: 10px; color:rgb(120, 0, 58); background-color:#ffffe5;">
                                                                        {{ $job->experience }} Years
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="d-flex align-items-center me-2 mb-1">
                                                                <span
                                                                    class="material-symbols-outlined me-1">atr</span>Job
                                                                Role:
                                                                <div class="text-end px-2 fs-11 fw-lighter"
                                                                    style="border-radius: 10px; color:rgb(120, 0, 58); background-color:#ffffe5;">
                                                                    {{ $job->job_role }}
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <h5>Job Descriptions</h5>
                                                            <div class="mt-1 mb-2">
                                                                <div class="d-flex align-items-center me-2 mb-1">
                                                                    <span
                                                                        class="material-symbols-outlined me-1">keep</span>
                                                                    <div class="fw-bold" style="font-size: 14px">
                                                                        Responsibilities : </div>
                                                                </div>
                                                                {{ $job->job_responsibilities }}
                                                            </div>
                                                            <div class="mb-2">

                                                                <div class="d-flex align-items-center me-2 mb-1">
                                                                    <span
                                                                        class="material-symbols-outlined me-1">task</span>
                                                                    <div class="fw-bold" style="font-size: 14px">
                                                                        Qualifications : </div>
                                                                </div>
                                                                {{ $job->qualification }}
                                                            </div>
                                                            <div class="mb-2">
                                                                <div class="d-flex align-items-center me-2 mb-1">
                                                                    <span
                                                                        class="material-symbols-outlined me-1">report</span>
                                                                    <div class="fw-bold" style="font-size: 14px">
                                                                        Required Skills : </div>
                                                                </div>
                                                                {{ $job->required_skills }}
                                                            </div>
                                                            <hr>

                                                            <form action="{{ url('/candidate/application') }}"
                                                                method="post">
                                                                @csrf

                                                                <input type="hidden" name="job_id"
                                                                    value="{{ $job->job_id }}">
                                                                <input type="hidden" name="candidate_id"
                                                                    value="{{ session('user_id') }}">
                                                                <input type="hidden" name="resume_id"
                                                                    value="{{ $job->resume_id }}">
                                                                @if ($job->resume_id)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="resume_type" value="resume"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Select Your Resume <a
                                                                                href="#">edit</a>
                                                                        </label>
                                                                    </div>
                                                                @else
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="resume_type" value="resume"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            Select Your Resume <a
                                                                                href="{{ url('/candidate/create_resume') }}">Please
                                                                                Create Your Resume </a>
                                                                        </label>
                                                                    </div>
                                                                @endif

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="resume_type" value="uploaded_resume"
                                                                        id="flexRadioDefault2">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault2">
                                                                        Upload Your Custom Resume (Optional)
                                                                    </label>
                                                                </div>
                                                                <div
                                                                    class=" uploaded_file_label d-flex align-items-center me-2 mb-1">
                                                                    <span
                                                                        class="material-symbols-outlined me-1">description</span>
                                                                    <div class="fw-bold" style="font-size: 14px">
                                                                        Upload Your Custom Resume : </div>
                                                                </div>
                                                                <div class="uploaded_file d-flex input-group mb-3">
                                                                    <input type="file" class="form-control"
                                                                        name="uploaded_file" id="inputGroupFile02">
                                                                    <label class="input-group-text"
                                                                        for="inputGroupFile02">Upload</label>
                                                                </div>

                                                                {{-- {{ $job->job_mode }},
                                                            {{ $job->job_title }},
                                                            {{ $job->job_role }},
                                                            {{ $job->experience }},
                                                            {{ $job->num_of_candidate }},
                                                            {{ $job->qualification }},
                                                            {{ $job->required_skills }} --}}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <input class="btn btn-primary" type="submit"
                                                                value="Apply Now">
                                                            {{-- <button type="button"
                                                                class="btn btn-primary">Apply</button> --}}
                                                        </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apply-by text-end px-3 py-1 fs-11 fw-lighter d-flex align-items-center me-2"
                                                style="border-radius: 10px; color:rgb(0, 255, 128); background-color:#F1FFE5;">
                                                <span
                                                    class="material-symbols-outlined me-1">hourglass_bottom</span>Apply
                                                By : <strong> {{ $job->apply_by }}</strong>
                                            </div>

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
                'Marketing Executive',
                'Backend Development',
                'sales',
                'finance officer',
                'Frontend developer',
                'Java developer',
                'python developer',
                'web developer'
            ];

            const jobLocations = [
                'WFH',
                'WFO',
                'remote'
            ];

            function setupAutocomplete(inputId, suggestionsId, staticValues) {
                const input = document.getElementById(inputId);
                const suggestionsBox = document.getElementById(suggestionsId);

                input.addEventListener('input', function() {
                    const query = this.value;
                    suggestionsBox.innerHTML = '';

                    if (query.length > 0) {
                        const filteredValues = staticValues.filter(value =>
                            value.includes(query)
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
