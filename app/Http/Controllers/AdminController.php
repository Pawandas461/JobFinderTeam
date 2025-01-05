<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
header('cache-control: no-cache, no-store');


class AdminController extends Controller
{
    public function login_form(){
        return view('admin.login');
    }
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

    public function admin_index(){
        return view('admin.index');
    }
     public function view_user()
     {
        $users=DB::table('users')->where('user_type', 'candidate')->get();
        return view('admin.userDisplay',compact('users'));
     }
     
    
     public function updateStatus($id)
     {
         
         $user = DB::table('users')->where('id', $id)->first(); 
     
             $newStatus = ($user->auth == 1) ? 0 : 1;
     
             
             DB::table('users')->where('id', $id)->update(['auth' => $newStatus]);
     
             return redirect()->back()->with('status', 'User status updated successfully!');
         
     }

     public function view_job()
     {
        $jobs=DB::table('jobs')->get();
        return view('admin.jobDisplay',compact('jobs'));
     }
     
    
     public function update_jobStatus($id)
     {
         
         $jobs = DB::table('jobs')->where('id', $id)->first(); 
     
             $newStatus = ($jobs->status == 2) ? 1 : 2;
     
             
             DB::table('jobs')->where('id', $id)->update(['status' => $newStatus]);
     
             return redirect()->back()->with('status', 'User status updated successfully!');
         
     }  
}


