<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
header('cache-control: no-cache, no-store');


class AdminController extends Controller
{
    public function admin_login(Request $req)
    {
        $email = $req->input('email');
$password = $req->input('password');

$loginData = DB::table('users')->where('email', $email)->first();

if (!empty($loginData)) {
    $dbPassword = $loginData->password;

    if ($password == $dbPassword) {
        if ($loginData->user_type === 'admin' && $loginData->auth == 1) {
            $req->session()->put('user_id', $loginData->id);
            $req->session()->put('email', $email);

            return redirect('/admin')->with('message', 'Admin login successful');
        } else {
            return redirect('/admin/login')->with('message', 'Unauthorized access for admin');
        }
    } else {
        return redirect('/admin/login')->with('message', 'Password does not match');
    }
} else {
    return redirect('/admin/login')->with('message', 'User not found');
}

    }
    
}
