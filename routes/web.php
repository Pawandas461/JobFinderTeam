<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Controller;
use App\Http\Middleware\AdminAuth;
use Faker\Provider\ar_EG\Company;
use App\Http\Middleware\CompanyAuth;




Route::get('/', function () {
    return view('candidate.index');
});
Route::get('/candidate', function () {
    return view('candidate.index');
});

Route::get('/login', function () {
    return view('candidate.login');
});

// /Pawan Route


Route::get('/candidate/jobs', [UserController::class, 'view_jobs']);
Route::get('/candidate/my_resume', [UserController::class, 'my_resume']);
Route::post('/candidate/jobs/search', [UserController::class, 'job_searching']);

Route::post('/candidate/application', [UserController::class, 'application']);
Route::post('/candidate/create_resume_action', [UserController::class, 'create_resume_action']);


Route::get('/admin/login', [AdminController::class, 'login_form']);
Route::post('/admin_login', [AdminController::class, 'admin_login']);


Route::get('/company/login', [CompanyController::class, 'login_form']);
Route::post('/login-company', [CompanyController::class, 'company_login']);
Route::get('/company/register', [CompanyController::class, 'register_form']);
Route::post('register-company', [CompanyController::class, 'company_register']);

Route::middleware([CompanyAuth::class])->group(function () {
    Route::get('/company', [CompanyController::class, 'company_index'])->name('/company');
    Route::get('/company/approval_request', [JobController::class, 'approval_request']);
    Route::get('/company/approved_jobs', [JobController::class, 'approved_jobs']);
    Route::get('/company/applications', [CompanyController::class, 'applications']);
    Route::get('company/application/sort_list/{id}', [CompanyController::class, 'sortlist_resume']);
    Route::get('company/application/reject/{id}', [CompanyController::class, 'reject_resume']);
});


//Debashis Route
Route::get('/signup', function () {
    return view('candidate.signup');
});
Route::get('/company/create_job', [JobController::class, 'create_job_form']);
Route::post('create_job_request', [JobController::class, 'create_job_request']);
Route::post('/register', [UserController::class, 'user_signup']);
Route::post('/user_login', [UserController::class, 'user_login']);
Route::get('/forgot_pass', [UserController::class, 'forgot_pass']);
Route::get('/candidate/jobs/{category_name}', [UserController::class, 'view_jobs_category']);

Route::middleware([AdminAuth::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin_index']);
    Route::get('/admin/user', [AdminController::class, 'view_user']);
    Route::get('/admin/users/status/{id}', [AdminController::class, 'updateStatus']);

    Route::get('/admin/job', function () {
        return view('admin.jobDisplay');
    });
    Route::get('/admin/job', [AdminController::class, 'view_job']);
    Route::get('/admin/job/status/{id}', [AdminController::class, 'update_jobStatus']);

    Route::get('/admin/company', [AdminController::class, 'view_company']);
    Route::get('/admin/company/status/{id}', [AdminController::class, 'update_companyStatus']);
    //admin logout
    Route::get('/admin/logout', [AdminController::class, 'logout']);
});


//user Logout
Route::get('/candidate/logout', [UserController::class, 'logout']);

//company logout
Route::get('/company/logout', [CompanyController::class, 'logout']);


//subham route

Route::get('/about-us', function () {
    return view('candidate.aboutUs');
});

Route::get('/contact-us', function () {
    return view('candidate.contactUs');
});

Route::get('/candidate/create_resume', function () {
    return view('candidate.userResume');
});
