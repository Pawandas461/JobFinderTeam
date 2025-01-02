<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
header('cache-control: no-cache, no-store');

class JobController extends Controller
{
   public function job_Detalis(Request $req)
   {
       $job_title = $req->input('job_title');
        $job_respons = $req->input('job_respons');
        $job_mobe = $req->input('job_mobe');
        $job_role = $req->input('job_role');
        $experience = $req->input('experience');
        $num_of_candidate= $req->input('num_of_candidate');
        $qualification = $req->input('qualification');
        $required_skills = $req->input('required_skills');
        $min_salary = $req->input('min_salary');
        $mex_salary = $req->input('mex_salary');
        $apply_by = $req->input('apply_by');
        
        $data = [
            'job_title' => $job_title,
            'job_respons' => $job_respons,
            'job_mobe' => $job_mobe,
            'job_role' => $job_role,
            'experience'=> $experience,
            'num_of_candidate' => $num_of_candidate,
            'qualification' => $qualification,
            'required_skills' => $required_skills,
            'min_salary' => $min_salary,
            'mex_salary' => $mex_salary,
            'apply_by' => $apply_by,
        ];
        $user_id=DB::table('job')->insert($data);
        return redirect('candidate');
    
}
   }

