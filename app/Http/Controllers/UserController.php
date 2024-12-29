<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{ 
    public function user_signup(Request $req)
    {
        // $req->validate([
        //     'name' => "required|regex:/^[A-Za-z ]{3,40}$/",
        //     'email' => "required|regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/",
        //     'phone' => "required|regex:/^[6789][0-9]{9}$/",
        //     'dob' => "required",
        //     'password' => "required",
        // ]);
        $fname = $req->input('fname');
        $lname = $req->input('lname');
        $name= $fname.' '.$lname;
        $email = $req->input('email');
        $phone = $req->input('phone');
        $age = $req->input('dob');
        $gender= $req->input('gender');
        $password = $req->input('password');
        $check_user = DB::table('users')->where('email', $email)->orWhere('phone', $phone)->first();
        if (!empty($check_user)) {
            $checkPhone = $check_user->phone;
            $checkEmail = $check_user->email;
            if ($phone == $checkPhone) {
                return redirect('login')->with('message', 'Phone number already exist');
            }
            if ($email == $checkEmail) {
                return redirect('signup')->with('message', 'Email already exist');
            }
        }
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'dob' => $age,
            'gender'=> $gender,
            'password' => $password,

        ];
        $user_id=DB::table('users')->insertGetId($data);
    
         $req->session()->put('email',$email);
         $req->session()->put('user_id',$user_id);

        return redirect('candidate');
    
}
 public function user_login( Request $req)
 {
         $email= $req->input('email');
        $password = $req->input('password');
        $loginData = DB::table('users')->where('email', $email)->first();
        // dd($loginData);
        if (!empty($loginData)) {
            $dbPassword = $loginData->password;
            if ($password == $dbPassword) {
                // dd($password);
                $uid=$loginData->id;
                $req->session()->put('user_id',$uid);
                $req->session()->put('email',$email);

                return redirect('/candidate')->with('messsage','user login');
            } else {

                return redirect('/login')->with('messsage', 'Password doesnot matched ');
            }
        } else {
            return redirect('/login')->with('message', "User not found");
        }
    }
     public function forgot_pass(Request $req)
     {
        return View('forgotPassword');
     }
 }

