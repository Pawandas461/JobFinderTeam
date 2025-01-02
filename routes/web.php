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
use App\Http\Controllers\Controller;
use Faker\Provider\ar_EG\Company;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/candidate', function(){
    return view('candidate.index');
});

Route::get('/login', function(){
    return view('candidate.login');
});

// /Pawan Route
Route::get('/candidate/jobs', [UserController::class, 'view_jobs']);

Route::get('/admin', [AdminController::class, 'admin_index']);
Route::get('/admin/login', [AdminController::class, 'login_form']);
Route::post('/admin_login',[AdminController::class, 'admin_login']);

Route::get('/company', [CompanyController::class, 'company_index']);

Route::get('/company/login', [CompanyController::class, 'login_form']);
Route::post('/login-company', [CompanyController::class, 'company_login']);

Route::get('/company/register', [CompanyController::class, 'register_form']);
Route::post('register-company',[CompanyController::class, 'company_register']);



//Debashis Route
Route::get('/signup', function(){
    return view('candidate.signup');
});
Route::post('/register',[UserController::class,'user_signup']);
Route::post('/user_login',[UserController::class,'user_login']);
Route::get('/forgot_pass',[UserController::class,'forgot_pass']);
Route::get('/admin/user', function(){
    return view('admin.userDispaly');
});
Route::get('/admin/job', function(){
    return view('admin.jobDisplay');
});

