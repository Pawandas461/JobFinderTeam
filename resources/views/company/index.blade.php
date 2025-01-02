<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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

        .btn {
            width: 200px;
            color: #000 !important;
            background: linear-gradient(109.6deg, rgb(255, 219, 47) 11.2%, rgb(244, 253, 0) 100.2%);
            padding: 10px 30px !important;
            border: none !important;
            font-size: 14px !important;
        }

        .btn:hover {
            color: #000 !important;
            background: linear-gradient(109.6deg, rgb(244, 253, 0) 10.2%, rgb(255, 219, 47) 100.2%);
            padding: 10px 30px !important;
            border: none !important;
            font-size: 14px !important;
        }

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
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                        data-bs-auto-close="outside" data-bs-toggle="dropdown" href="javascript:;"><i
                            class="material-icons-outlined">notifications</i>
                        <span class="badge-notify">5</span>
                    </a>
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

                <li class="nav-item dropdown">
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
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                                class="material-icons-outlined">power_settings_new</i>Logout</a>
                    </div>
                </li>
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
                    <a href="dashboard.html">
                        <div class="parent-icon"><i class="material-icons-outlined">home</i></div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>

                <!-- Post a Job -->
                <li>
                    <a href="post-job.html">
                        <div class="parent-icon"><i class="material-icons-outlined">work</i></div>
                        <div class="menu-title">Post a Job</div>
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
                    <a href="applications.html">
                        <div class="parent-icon"><i class="material-icons-outlined">assignment</i></div>
                        <div class="menu-title">Applications</div>
                    </a>
                </li>

                <!-- Approval Requests -->
                <li>
                    <a href="approval-requests.html">
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

                <!-- Denied Jobs -->
                <li>
                    <a href="denied-jobs.html">
                        <div class="parent-icon"><i class="material-icons-outlined">cancel</i></div>
                        <div class="menu-title">Denied Jobs</div>
                    </a>
                </li>

                <!-- Notifications -->
                <li>
                    <a href="notifications.html">
                        <div class="parent-icon"><i class="material-icons-outlined">notifications</i></div>
                        <div class="menu-title">Notifications</div>
                    </a>
                </li>

                <!-- Profile Settings -->
                <li>
                    <a href="profile-settings.html">
                        <div class="parent-icon"><i class="material-icons-outlined">person</i></div>
                        <div class="menu-title">Profile Settings</div>
                    </a>
                </li>

                <!-- Help -->
                <li>
                    <a href="help.html">
                        <div class="parent-icon"><i class="material-icons-outlined">help_outline</i></div>
                        <div class="menu-title">Help</div>
                    </a>
                </li>

                <!-- Logout -->
                <li>
                    <a href="logout.html">
                        <div class="parent-icon"><i class="material-icons-outlined">logout</i></div>
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




            <div class="row">
                <div class="col-12 col-xl-12 d-flex">
                    <div class="card rounded-4 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-around flex-wrap gap-4 p-4">
                                <!-- Posted Jobs -->
                                <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                    <a href="posted-jobs.html"
                                        class="mb-2 wh-48 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="material-icons-outlined">work_outline</i>
                                    </a>
                                    <h3 class="mb-0">12</h3>
                                    <p class="mb-0">Posted Jobs</p>
                                </div>

                                <div class="vr"></div>

                                <!-- Applications Received -->
                                <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                    <a href="applications.html"
                                        class="mb-2 wh-48 bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="material-icons-outlined">assignment_ind</i>
                                    </a>
                                    <h3 class="mb-0">56</h3>
                                    <p class="mb-0">Applications Received</p>
                                </div>

                                <div class="vr"></div>

                                <!-- Pending Approval -->
                                <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                    <a href="pending-approval.html"
                                        class="mb-2 wh-48 bg-danger text-white rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="material-icons-outlined">pending_actions</i>
                                    </a>
                                    <h3 class="mb-0">3</h3>
                                    <p class="mb-0">Pending Approval</p>
                                </div>

                                <div class="vr"></div>

                                <!-- Approved Jobs -->
                                <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                    <a href="approved-jobs.html"
                                        class="mb-2 wh-48 bg-success text-white rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="material-icons-outlined">check_circle_outline</i>
                                    </a>
                                    <h3 class="mb-0">9</h3>
                                    <p class="mb-0">Approved Jobs</p>
                                </div>

                                <div class="vr"></div>

                                <!-- Denied Requests -->
                                <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                    <a href="denied-requests.html"
                                        class="mb-2 wh-48 bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="material-icons-outlined">cancel</i>
                                    </a>
                                    <h3 class="mb-0">2</h3>
                                    <p class="mb-0">Denied Requests</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end row-->

            <div class="row">
              <!-- Create a Job Section -->
              <div class="col-12 col-xl-5 col-xxl-4 d-flex">
                  <div class="card rounded-4 w-100 shadow-none bg-transparent border-0">
                      <div class="card-body p-0">
                          <div class="row g-4">
                              <div class="col-12 col-xl-12 d-flex">
                                  <div class="card mb-0 rounded-4 w-100" style="overflow: hidden;">
                                      <img src="../assets/images/bg-dashboard-consultant2.jpg" class="card-img rounded-4" alt="..." style="max-height: 230px;">
                                      <div class="card-img-overlay custom-overlay">
                                          <h3 class="card-title text-dark">Create a Job</h3>
                                          <p class="mb-0 text-dark">
                                              Post your job openings and reach potential candidates.<br>
                                              Admin approval is required for jobs to be visible to candidates.
                                          </p>
                                          <div class="bottom-0 position-absolute mb-3">
                                              <a href="book-a-consultation.html" class="btn text-dark px-3 bg-white d-flex gap-2">
                                                  Create Job <span class="material-icons-outlined">east</span>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
          
                              <!-- Selected Applications -->
                              <div class="col-12 col-xl-12 d-flex" style="max-height: 260px;">
                                  <div class="card mb-0 rounded-4 w-100">
                                      <div class="card-body">
                                          <div class="d-flex align-items-start justify-content-between mb-1">
                                              <div class="">
                                                  <h4 class="mb-0">Selected Applications</h4>
                                                  <p class="mb-0">Candidates selected for interviews</p>
                                              </div>
                                          </div>
                                          <div class="chart-container2">
                                              <div id="chart2"></div>
                                          </div>
                                          <div class="text-center">
                                              <p class="mb-0">Review shortlisted candidates</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div><!-- End row -->
                      </div>
                  </div>
              </div>
          
              <!-- Recent Approved and Posted Jobs -->
              <div class="col-12 col-xl-7 col-xxl-8 d-flex">
                  <div class="card w-100 rounded-4 overflow-y-auto" style="max-height: 510px;">
                      <div class="card-body">
                          <div class="d-flex align-items-start justify-content-between mb-3">
                              <div class="">
                                  <h5 class="mb-0 fw-bold">Recent Approved and Posted Jobs</h5>
                              </div>
                          </div>
                          <div class="table-responsive">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                      <tr>
                                          <th>Sl No</th>
                                          <th>Job Title</th>
                                          <th>Responsibilities</th>
                                          <th>Mode</th>
                                          <th>Role</th>
                                          <th>Experience</th>
                                          <th>No. of Candidates</th>
                                          <th>Qualification</th>
                                          <th>Required Skills</th>
                                          <th>Min/Max Salary</th>
                                          <th>Apply By</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>01</td>
                                          <td>Frontend Developer</td>
                                          <td>Build responsive UIs</td>
                                          <td>Online</td>
                                          <td>Developer</td>
                                          <td>Freshers</td>
                                          <td>3</td>
                                          <td>Bachelor's in CS</td>
                                          <td>HTML, CSS, JavaScript</td>
                                          <td>$3,000 - $5,000</td>
                                          <td>2024-01-15</td>
                                      </tr>
                                      <tr>
                                          <td>02</td>
                                          <td>Backend Developer</td>
                                          <td>Develop APIs</td>
                                          <td>Offline</td>
                                          <td>Developer</td>
                                          <td>2+ years</td>
                                          <td>2</td>
                                          <td>Bachelor's in CS</td>
                                          <td>PHP, MySQL</td>
                                          <td>$4,000 - $6,000</td>
                                          <td>2024-01-20</td>
                                      </tr>
                                      <!-- Add more rows as needed -->
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          
            <!--end row-->

        </div>
    </main>
    <!--end main wrapper-->


    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->



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
    <script src="../assets/js/index.js"></script>
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
