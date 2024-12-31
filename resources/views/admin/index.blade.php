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

    .sidebar-header {
      background: #ffffff !important;

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
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-bs-auto-close="outside"
            data-bs-toggle="dropdown" href="javascript:;"><i class="material-icons-outlined">notifications</i>
            <span class="badge-notify">5</span>
          </a>
          <div class="dropdown-menu dropdown-notify dropdown-menu-end shadow">
            <div class="px-3 py-1 d-flex align-items-center justify-content-between border-bottom">
              <h5 class="notiy-title mb-0">Notifications</h5>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret option" type="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="material-icons-outlined">
                    more_vert
                  </span>
                </button>
                <div class="dropdown-menu dropdown-option dropdown-menu-end shadow">
                  <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                        class="material-icons-outlined fs-6">inventory_2</i>Archive All</a></div>
                  <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                        class="material-icons-outlined fs-6">done_all</i>Mark all as read</a></div>
                  <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                        class="material-icons-outlined fs-6">mic_off</i>Disable Notifications</a></div>
                  <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                        class="material-icons-outlined fs-6">grade</i>What's new ?</a></div>
                  <div>
                    <hr class="dropdown-divider">
                  </div>
                  <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                        class="material-icons-outlined fs-6">leaderboard</i>Reports</a></div>
                </div>
              </div>
            </div>
            <div class="notify-list">
              <div>
                <a class="dropdown-item border-bottom py-2" href="javascript:;">
                  <div class="d-flex align-items-center gap-3">
                    <div class="">
                      <img src="../assets/images/avatars/04.png" class="rounded-circle" width="45" height="45" alt="">
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
                      <img src="../assets/images/apps/13.png" class="rounded-circle" width="45" height="45" alt="">
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
                      <img src="../assets/images/apps/14.png" class="rounded-circle" width="45" height="45" alt="">
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
                      <img src="../assets/images/avatars/06.png" class="rounded-circle" width="45" height="45" alt="">
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
            <img src="../assets/images/avatars/04.png" class="rounded-circle p-1 border" width="45" height="45">
          </a>
          <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
            <a class="dropdown-item  gap-2 py-2" href="javascript:;">
              <div class="text-center">
                <img src="../assets/images/avatars/04.png" class="rounded-circle p-1 shadow mb-3" width="90" height="90"
                  alt="">
                <h5 class="user-name mb-0 fw-bold">Hello, Jhon</h5>
              </div>
            </a>
            <hr class="dropdown-divider">
            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="my_profile.html"><i
                class="material-icons-outlined">person_outline</i>Profile</a>
            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                class="material-icons-outlined">local_bar</i>Setting</a>
            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                class="material-icons-outlined">dashboard</i>Dashboard</a>
            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                class="material-icons-outlined">redeem</i>Rewards</a>

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

        <li>
          <a href="index.html">
            <div class="parent-icon"><i class="material-icons-outlined">home</i>
            </div>
            <div class="menu-title">Dashboard</div>
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
      <div class="row row-cols-1 row-cols-xl-4">
        <div class="col">
          <div class="card border-primary border-bottom rounded-4">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 fs-6">Total Companies</p>
              </div>
              <div class="d-flex align-items-center justify-content-between mt-3">
                <div class="">
                  <h4 class="mb-0 fw-bold">87</h4>
                  <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                    <span class="material-icons-outlined fs-6">north</span>
                  </div>
                </div>
                <div id="chart1"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-success border-bottom rounded-4">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 fs-6">Total Users</p>
              </div>
              <div class="d-flex align-items-center justify-content-between mt-3">
                <div class="">
                  <h4 class="mb-0 fw-bold">100</h4>
                  <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                    <span class="material-icons-outlined fs-6">north</span>
                  </div>
                </div>
                <div id="chart2"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-danger border-bottom rounded-4">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 fs-6">Active Jobs</p>
              </div>
              <div class="d-flex align-items-center justify-content-between mt-3">
                <div class="">
                  <h4 class="mb-0 fw-bold">200</h4>
                  <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                    <span class="material-icons-outlined fs-6">north</span>
                  </div>
                </div>
                <div id="chart3"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-warning border-bottom rounded-4">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 fs-6">Total Applications</p>
              </div>
              <div class="d-flex align-items-center justify-content-between mt-3">
                <div class="">
                  <h4 class="mb-0 fw-bold">27</h4>
                  <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                    <span class="material-icons-outlined fs-6">north</span>
                  </div>
                </div>
                <div id="chart4"></div>
              </div>
            </div>
          </div>
        </div>
      </div><!--end row-->

      <div class="row">
        <div class="col-12 col-xl-6">
          <div class="card">
            <div class="card-header py-3">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Selected Candidates</h5>
              </div>
            </div>
            <div class="card-body">
              <div id="chart5"></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-6">
          <div class="card">
            <div class="card-header py-3">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Selection Statistics by Company</h5>
              </div>
            </div>
            <div class="card-body">
              <div id="chart6"></div>
            </div>
          </div>
        </div>
      </div><!--end row-->

      <div class="row">
        <div class="col-12 col-xl-4 d-flex">
          <div class="card w-100 rounded-4">
            <div class="card-header p-3 bg-transparent">
              <div class="d-flex align-items-center justify-content-between">
                <div class="">
                  <h5 class="mb-0">Recent Users</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex flex-column gap-4">
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/11.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">User 1</h5>
                      <p class="mb-0">Mumbai</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/11.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">User 1</h5>
                      <p class="mb-0">Mumbai</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/11.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">User 1</h5>
                      <p class="mb-0">Mumbai</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/11.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">User 1</h5>
                      <p class="mb-0">Mumbai</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/11.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">User 1</h5>
                      <p class="mb-0">Mumbai</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/11.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">User 1</h5>
                      <p class="mb-0">Mumbai</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/11.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">User 1</h5>
                      <p class="mb-0">Mumbai</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 d-flex">
          <div class="card w-100 rounded-4">
            <div class="card-header p-3 bg-transparent">
              <div class="d-flex align-items-center justify-content-between">
                <div class="">
                  <h5 class="mb-0">Recent Selected Candidates</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex flex-column gap-4">
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/12.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">Pawan Das</h5>
                      <p class="mb-0">alipurduhar</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/12.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">Candidate 1</h5>
                      <p class="mb-0">Delhi</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/12.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">Candidate 1</h5>
                      <p class="mb-0">Delhi</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/12.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">Candidate 1</h5>
                      <p class="mb-0">Delhi</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/12.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">Candidate 1</h5>
                      <p class="mb-0">Delhi</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/12.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">Candidate 1</h5>
                      <p class="mb-0">Delhi</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                    <img src="../assets/images/avatars/12.png" alt="Placeholder" class="rounded-circle" width="40"
                      alt="">
                    <div class="">
                      <h5 class="mb-0">Candidate 1</h5>
                      <p class="mb-0">Delhi</p>
                    </div>
                  </div>
                  <div class="">
                    <a href="#" class="mb-0 text-dark d-flex align-items-center">
                      View
                      <span class="material-icons-outlined ms-1">
                        arrow_right_alt
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 d-flex">
          <div class="card w-100 rounded-4">
            <div class="card-header p-3 bg-transparent">
              <div class="d-flex align-items-center justify-content-between">
                <div class="">
                  <h5 class="mb-0">Recently Posted Jobs</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex flex-column gap-3">
                <div class="d-flex align-items-center gap-3">
                  <div class="flex-grow-1">
                    <h5 class="mb-0">Developer IT </h5>
                    <p class="mb-0">NIT Company</p>
                  </div>
                  <div class="progress w-25" style="height: 7px;">
                    <div class="progress-bar" style="width: 68%"></div>
                  </div>
                  <div class="">
                    <p class="mb-0 fs-5">25</p>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="flex-grow-1">
                    <h5 class="mb-0">Sale IT </h5>
                    <p class="mb-0">CNF Company</p>
                  </div>
                  <div class="progress w-25" style="height: 7px;">
                    <div class="progress-bar" style="width: 68%"></div>
                  </div>
                  <div class="">
                    <p class="mb-0 fs-5">25</p>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="flex-grow-1">
                    <h5 class="mb-0">marketing </h5>
                    <p class="mb-0"> ITC Company</p>
                  </div>
                  <div class="progress w-25" style="height: 7px;">
                    <div class="progress-bar" style="width: 68%"></div>
                  </div>
                  <div class="">
                    <p class="mb-0 fs-5">25</p>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="flex-grow-1">
                    <h5 class="mb-0">Job Title 1</h5>
                    <p class="mb-0">Company name</p>
                  </div>
                  <div class="progress w-25" style="height: 7px;">
                    <div class="progress-bar" style="width: 68%"></div>
                  </div>
                  <div class="">
                    <p class="mb-0 fs-5">25</p>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="flex-grow-1">
                    <h5 class="mb-0">Job Title 1</h5>
                    <p class="mb-0">Company name</p>
                  </div>
                  <div class="progress w-25" style="height: 7px;">
                    <div class="progress-bar" style="width: 68%"></div>
                  </div>
                  <div class="">
                    <p class="mb-0 fs-5">25</p>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="flex-grow-1">
                    <h5 class="mb-0">Job Title 1</h5>
                    <p class="mb-0">Company name</p>
                  </div>
                  <div class="progress w-25" style="height: 7px;">
                    <div class="progress-bar" style="width: 68%"></div>
                  </div>
                  <div class="">
                    <p class="mb-0 fs-5">25</p>
                  </div>
                </div>

                </div>  

              </div>
            </div>
          </div>
        </div>

      </div><!--end row-->

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
  <script src="../assets/js/index2.js"></script>
  <script src="../assets/js/main.js"></script>

  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
  <script>
    $(document).ready(function () {
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