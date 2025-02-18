<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Create Form</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/jf_logo.jpg') }}" type="image/png">

    <!-- Plugins -->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/metismenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/metismenu/mm-vertical.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">



    <style>
        .sidebar-wrapper .sidebar-nav .metismenu .mm-active>a {
            background-color: #d6d3d3;
            color: #000000;
        }

        .sidebar-wrapper .sidebar-nav .metismenu li:hover a {
            background-color: #d6d3d3;
        }

        .sidebar-wrapper .sidebar-nav .metismenu li:hover a {
            color: rgb(255, 255, 255) !important;
        }

        .dataTables_wrapper .paginate_button.previous a,
        .dataTables_wrapper .paginate_button.next a {
            color: rgb(0, 0, 0) !important;
        }

        .logo-img {
            width: 200px !important;
        }

        main {
            min-height: 100vh;
        }

        .text-warning {
            color: #000 !important;
        }

        .paginate_button a {
            color: #ddd !important;
        }

        .bg-warning,
        .paginate_button.active a {
            background: #f7d92d !important;
            color: #000 !important;
            border: none;
        }

        .wd-logo-icon {
            margin: 0px auto;
            border-radius: 50%;
            border: 3px solid rgb(255, 255, 255);
            box-shadow: #000 1px 1px 10px;
        }

        .sidebar-wrapper .sidebar-nav .metismenu .mm-active>a {
            background-color: #d6d3d3;
            color: #000000;
        }

        .sidebar-wrapper .sidebar-nav .metismenu li:hover a {
            background-color: #d6d3d3;
        }

        .sidebar-wrapper .sidebar-nav .metismenu li:hover a {
            color: rgb(255, 255, 255) !important;
        }

        .logo-img {
            width: 200px !important;
        }

        .text-warning {
            color: #f7d92d !important;
        }

        .text-dark {
            color: #000 !important;
        }

        .paginate_button a {
            color: #ddd !important;
        }

        .bg-warning,
        .paginate_button.active a {
            background: #f7d92d !important;
            color: #000 !important;
            border: none;
        }

        button {
            width: 200px;
            color: #000 !important;
            background: linear-gradient(109.6deg, rgb(255, 219, 47) 11.2%, rgb(244, 253, 0) 100.2%);
            padding: 10px 30px !important;
            border: none !important;
            font-size: 19px !important;
        }

        .btn {
            width: 200px;
        }

        button:hover {
            color: #000 !important;
            background: linear-gradient(109.6deg, rgb(244, 253, 0) 10.2%, rgb(255, 219, 47) 100.2%);
            padding: 10px 30px !important;
            border: none !important;
            font-size: 19px !important;
        }

        .card {
            background: white;
            border-radius: 30px;
            padding: 50px;
        }

        @media (max-width: 750px) {
            .card {
                padding: 30px 16px;
            }
        }

        main {
            min-height: 100vh;
        }

        .main-content {
            position: relative;
            color: #fff;
        }

        .main-content::before {
            content: "";
            background-image: url('../assets/images/bg_consultancy.jpg');
            background-size: cover;
            background-position: center center;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0.7;
            z-index: -2;
            min-height: 100vh !important;
        }

        /* .card {
      overflow: hidden;
    }

    .card-img {
      object-fit: cover;
    }

    .card-img-overlay.custom-overlay::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.4);
      z-index: 1;
    }

    .card-img-overlay * {
      position: relative;

      z-index: 2;
    } */
    </style>

</head>

<body>

    <!--start header-->
    <header class="top-header">
        <nav class="navbar navbar-expand align-items-center gap-4">
            <div class="btn-toggle">
                <a href="javascript:;"><i class="material-icons-outlined">menu</i></a>
            </div>
            <div class="search-bar flex-grow-1">
            </div>
            <ul class="navbar-nav gap-1 nav-right-links align-items-center">
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-notify dropdown-menu-end shadow">
                        <div class="px-3 py-1 d-flex align-items-center justify-content-between border-bottom">
                            <h5 class="notiy-title mb-0">Notifications</h5>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret option"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="material-icons-outlined">
                                        more_vert
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-option dropdown-menu-end shadow">
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i
                                                class="material-icons-outlined fs-6">inventory_2</i>Archive All</a>
                                    </div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i class="material-icons-outlined fs-6">done_all</i>Mark
                                            all as read</a></div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i
                                                class="material-icons-outlined fs-6">mic_off</i>Disable
                                            Notifications</a></div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i class="material-icons-outlined fs-6">grade</i>What's
                                            new ?</a></div>
                                    <div>
                                        <hr class="dropdown-divider">
                                    </div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i
                                                class="material-icons-outlined fs-6">leaderboard</i>Reports</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="notify-list">
                            <div>
                                <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="../assets/images/avatars/04.png" class="rounded-circle"
                                                width="45" height="45" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">Congratulations Jhon</h5>
                                            <p class="mb-0 notify-desc">Many congtars jhon. You have won the gifts.</p>
                                            <p class="mb-0 notify-time">Today</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="user-wrapper bg-primary text-primary bg-opacity-10">
                                            <span>RS</span>
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">New Account Created</h5>
                                            <p class="mb-0 notify-desc">From USA an user has registered.</p>
                                            <p class="mb-0 notify-time">Yesterday</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="../assets/images/apps/13.png" class="rounded-circle"
                                                width="45" height="45" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">Payment Recived</h5>
                                            <p class="mb-0 notify-desc">New payment recived successfully</p>
                                            <p class="mb-0 notify-time">1d ago</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="../assets/images/apps/14.png" class="rounded-circle"
                                                width="45" height="45" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">New Order Recived</h5>
                                            <p class="mb-0 notify-desc">Recived new order from michle</p>
                                            <p class="mb-0 notify-time">2:15 AM</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="../assets/images/avatars/06.png" class="rounded-circle"
                                                width="45" height="45" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">Congratulations Jhon</h5>
                                            <p class="mb-0 notify-desc">Many congtars jhon. You have won the gifts.</p>
                                            <p class="mb-0 notify-time">Today</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="dropdown-item py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="user-wrapper bg-danger text-danger bg-opacity-10">
                                            <span>PK</span>
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">New Account Created</h5>
                                            <p class="mb-0 notify-desc">From USA an user has registered.</p>
                                            <p class="mb-0 notify-time">Yesterday</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                        <img src="../assets/images/avatars/04.png" class="rounded-circle p-1 border" width="45"
                            height="45">
                    </a>
                    <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                        <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                            <div class="text-center">
                                <img src="../assets/images/avatars/04.png" class="rounded-circle p-1 shadow mb-3"
                                    width="90" height="90" alt="">
                                <h5 class="user-name mb-0 fw-bold">Hello, Jhon</h5>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="my_profile.html"><i
                                class="material-icons-outlined">person_outline</i>Profile</a>

                        <hr class="dropdown-divider">
                        <a href="{{url('/company/logout')}}">
                            <div class="parent-icon"><i class="material-icons-outlined">person</i>
                            </div>
                            <div class="menu-title">Logout</div>
                        </a>
                    </div>
                </li> --}}
            </ul>

        </nav>
    </header>
    <!--end top header-->


    <!--start sidebar-->
    <aside class="sidebar-wrapper">
        <div class="sidebar-header">
            <div class="logo-icon">
                <img src="{{ asset('assets/images/jf_logo.jpg') }}" height="70" width="100" alt="">
            </div>
            <div class="sidebar-close">
                <span class="material-icons-outlined">close</span>
            </div>
        </div>
        <div class="sidebar-nav" data-simplebar="true">

            <!--navigation-->
            <ul class="metismenu" id="sidenav">

                <!-- Dashboard -->
                <li>
                    <a href="{{ url('/company') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">home</i></div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>

                <!-- Post a Job -->
                <li>
                    <a href="{{ url('/company/create_job') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">work</i></div>
                        <div class="menu-title">Create a Job</div>
                    </a>
                </li>

                <!-- Manage Jobs -->
                <li>
                    <a href="manage-jobs.html">
                        <div class="parent-icon"><i class="material-icons-outlined">edit</i></div>
                        <div class="menu-title">Manage Jobs</div>
                    </a>
                </li>

                <!-- Applications -->
                <li>
                    <a href="{{ url('/company/applications') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">assignment</i></div>
                        <div class="menu-title">Applications</div>
                    </a>
                </li>

                <!-- Approval Requests -->
                <li>
                    <a href="{{ url('/company/approval_request') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">how_to_reg</i></div>
                        <div class="menu-title">Approval Requests</div>
                    </a>
                </li>

                <!-- Approved Jobs -->
                <li>
                    <a href="approved-jobs.html">
                        <div class="parent-icon"><i class="material-icons-outlined">check_circle</i></div>
                        <div class="menu-title">Approved Jobs</div>
                    </a>
                </li>

                <!-- Logout -->
                <li>
                    <a href="{{ url('/company/logout') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">logout</i>
                        </div>
                        <div class="menu-title">Logout</div>
                    </a>
                </li>

            </ul>
        </div>
    </aside>

    <!--end sidebar-->


    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Home</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="row mt-4">
                <div class="col-xl-10 mx-auto">
                    <div id="stepper1" class="bs-stepper">
                        <div class="card">
                            <h2>Job Form</h2>
                            <div class="card-body">
                                <form class="row g-3" action="{{ url('/create_job_request') }}" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="bsValidation1" class="form-label fw-bold">Job Title</label>
                                            <input type="text" class="form-control" id="bsValidation1"
                                                name="job_title" placeholder="job Title" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bsValidation4" class="form-label fw-bold">Job Role</label>
                                            <input type="text" class="form-control" id="bsValidation4"
                                                name="job_role" placeholder="Job Role" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="bsValidation2" class="form-label fw-bold">Job
                                                Responsibilities</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" rows="2" name="job_responsibilities" id="floatingTextarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="bsValidation3" class="form-label fw-bold">Job Mode</label>
                                            <select name="job_mode" class="form-select"
                                                aria-label="Default select example" required>
                                                <option selected>Select Job Mode</option>
                                                <option value="WFH">WFH</option>
                                                <option value="WFO">WFO</option>
                                                <option value="remote">remote</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="bsValidation5" class="form-label fw-bold">Experience /
                                                freshers</label>
                                            <select name="experience" class="form-select"
                                                aria-label="Default select example" required>
                                                <option selected>Experience</option>
                                                <option value="Freshers">Freshers</option>
                                                <option value="1 year">1 Year</option>
                                                <option value="2 year">2 year</option>
                                                <option value="3 year">3 year</option>
                                                <option value="4 year">4 year</option>
                                                <option value="5 year">5 year</option>
                                                <option value="5 year +">5 year +</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="bsValidation8" class="form-label fw-bold">Number of
                                                candidate</label>
                                            <input type="number" class="form-control" id="bsValidation8"
                                                name="num_of_candidate" required>
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bsValidation5"
                                                class="form-label fw-bold">Qualification</label>
                                            <input type="text" class="form-control" id="bsValidation5"
                                                name="qualification" required>
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bsValidation5" class="form-label fw-bold">Apply By (Expire
                                                date)</label>
                                            <input type="date" class="form-control" id="bsValidation5"
                                                name="apply_by" placeholder="16" required>
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="bsValidation5" class="form-label fw-bold">Required
                                                skills</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" name="required_skills" id="floatingTextarea"></textarea>
                                                <label for="floatingTextarea">Add Skills</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bsValidation5" class="form-label fw-bold">Min salary</label>
                                            <input type="number" class="form-control" id="bsValidation5"
                                                name="min_salary" placeholder="00000-99999" required>
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bsValidation5" class="form-label fw-bold">Max salary</label>
                                            <input type="number" class="form-control" id="bsValidation5"
                                                name="mex_salary" placeholder="00000-99999" required>
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="bsValidation6" class="form-label fw-bold">Select
                                                Category</label>
                                            <select name="category" class="form-select"
                                                aria-label="Default select example" required>
                                                <option value="" selected>Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-12 col-lg-12">
                                            <button class="btn btn-primary px-3" type="submit"
                                                name="button">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!--end main wrapper-->

    <!--start footer-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2024. All right reserved.</p>
    </footer>
    <!--top footer-->

    <!--bootstrap js-->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!--plugins-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <!--plugins-->
    <script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/metismenu/metisMenu.min.js"></script>
    <script src="../assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="../assets/plugins/validation/jquery.validate.min.js"></script>
    <script src="../assets/plugins/validation/validation-script.js"></script>
    <script src="../assets/js/index2.js"></script>
    <script src="../assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>
