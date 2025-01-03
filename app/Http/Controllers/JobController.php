<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

header('cache-control: no-cache, no-store');

class JobController extends Controller
{
    public function create_job_request(Request $req)
    {
        // Retrieve inputs from the request
        $job_title = $req->input('job_title');
        $job_responsibilities = $req->input('job_responsibilities');
        $job_mode = $req->input('job_mode');
        $job_role = $req->input('job_role');
        $experience = $req->input('experience');
        $num_of_candidate = $req->input('num_of_candidate');
        $qualification = $req->input('qualification');
        $required_skills = $req->input('required_skills');
        $min_salary = $req->input('min_salary');
        $mex_salary = $req->input('mex_salary');
        $apply_by = $req->input('apply_by');
        $created_by = session('company_id');
        $status = 1;

        // Prepare the data array
        $data = [
            'job_title' => $job_title,
            'job_responsibilities' => $job_responsibilities,
            'job_mode' => $job_mode,
            'job_role' => $job_role,
            'experience' => $experience,
            'num_of_candidate' => $num_of_candidate,
            'qualification' => $qualification,
            'required_skills' => $required_skills,
            'min_salary' => $min_salary,
            'mex_salary' => $mex_salary,
            'apply_by' => $apply_by,
            'created_at' => now(), // Current timestamp
            'created_by' => $created_by,
            'status' => $status,
        ];

        // Insert the data into the jobs table
        DB::table('jobs')->insert($data);

        // Redirect to a relevant page
        return redirect('/company')->with('message', 'Job created successfully!');
    }

    public function create_job_form()
    {
        return view('company.create_job');
    }

    public function approval_request()
    {
        $requested_jobs = DB::table('jobs')->where('status', 1)->get();
        return view('company.approval_request', compact('requested_jobs'));
    }
    public function approved_jobs()
    {
        $requested_jobs = DB::table('jobs')->where('status', 2)->get();
        return view('company.approval_request', compact('requested_jobs'));
    }
    
}
