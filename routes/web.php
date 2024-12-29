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
Route::get('/jobs', function(){
    return view('candidate.jobs');
});
Route::get('/admin', function(){
    return view('admin.index');
});
Route::get('/company/register', function(){
    return view('company.register');
});


//Debashis Route
Route::get('/signup', function(){
    return view('candidate.signup');
});
Route::post('/register',[UserController::class,'user_signup']);
Route::post('/user_login',[UserController::class,'user_login']);
Route::get('/forgot_pass',[UserController::class,'forgot_pass']);


