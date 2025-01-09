<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

header('cache-control: no-cache, no-store');


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
        $name = $fname . ' ' . $lname;
        $email = $req->input('email');
        $phone = $req->input('phone');
        $age = $req->input('dob');
        $gender = $req->input('gender');
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
            'gender' => $gender,
            'password' => $password,

        ];
        $user_id = DB::table('users')->insertGetId($data);

        $req->session()->put('email', $email);
        $req->session()->put('user_id', $user_id);

        return redirect('candidate');
    }
    public function user_login(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');
        $loginData = DB::table('users')->where('email', $email)->first();
        // dd($loginData);
        if (!empty($loginData)) {
            $dbPassword = $loginData->password;
            if ($password == $dbPassword) {
                // dd($password);
                $uid = $loginData->id;
                $name = $loginData->name;
                $req->session()->put('user_id', $uid);
                $req->session()->put('email', $email);
                $req->session()->put('name', $name);
                $resume = DB::table('users')->join('resumes','users.id','resumes.candidate_id')->where('resumes.id',$uid)->select('resumes.*','users.*')->first();
                if($resume){
                    $resume_id= $resume->id;
                    $req->session()->put('resume_id',$resume_id);
                    
                }


                return redirect('/candidate')->with('messsage', 'user login');
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
    public function view_jobs()
    {

        $jobs = DB::table('jobs')
            ->join('companies', 'jobs.created_by', '=', 'companies.id')
            ->leftJoin('resumes', 'resumes.candidate_id', '=', DB::raw('"' . session('user_id') . '"')) // Join with resumes table
            ->where('jobs.status', 2)
            ->select(
                'jobs.id as job_id',
                'jobs.*',
                'companies.id as company_id',
                'companies.company_name',
                'companies.company_address',
                'resumes.id as resume_id', // Add resume-specific columns
                'resumes.pursuing_education_status',
                'resumes.degree',
                'resumes.stream',
                'resumes.skills',
                'resumes.created_at as resume_created_at'
            )
            ->get();

        return view('candidate.jobs', compact('jobs'));
    }

    public function my_resume()
    {
        $candidate_id = session('user_id');
        $resume_details = DB::table('resumes')->where('candidate_id', $candidate_id)->first();
        if ($resume_details) {
            return view('candidate.my_resume', compact('resume_details'));
        }
    }
    public function view_jobs_category($category_name)
    {
        $jobs = DB::table('jobs')
            ->join('companies', 'jobs.created_by', '=', 'companies.id')
            ->join('categories', 'jobs.category_id', '=', 'categories.id')
            ->leftJoin('resumes', 'resumes.candidate_id', '=', DB::raw('"' . session('user_id') . '"')) // Join with resumes table
            ->where('jobs.status', 2)
            ->where('categories.category_name', $category_name)
            ->select(
                'jobs.id as job_id',
                'jobs.*',
                'companies.id as company_id',
                'companies.company_name',
                'companies.company_address',
                'resumes.id as resume_id', // Add resume-specific columns
                'resumes.pursuing_education_status',
                'resumes.degree',
                'resumes.stream',
                'resumes.skills',
                'resumes.created_at as resume_created_at'
            )
            ->get();
        $user_id = session('user_id');

        return view('candidate.jobs', compact('jobs'));
    }

    public function application(Request $request)
    {

        if (session('user_id') && session('email')) {

            // Validate the incoming request
            $request->validate([
                'job_id' => 'required|integer',
                'candidate_id' => 'required|integer',
                'resume_id' => 'nullable|integer',
                'resume_type' => 'required|in:resume,uploaded_resume',
            ], [
                'resume_type.required' => 'Please select a resume type.'
            ]);

            if ($request->input('resume_type') == 'resume') {
                if (session('resume_id')) {
                    // Insert the application into the database
                    DB::table('applications')->insert([
                        'job_id' => $request->input('job_id'),
                        'candidate_id' => $request->input('candidate_id'),
                        'resume_id' => $request->input('resume_id'),
                        'resume_type' => $request->input('resume_type'),
                        'apply_date' => now(),
                        'status' => 1
                    ]);

                    // Redirect back with a success message
                    return redirect()->back()->with('success', 'Application submitted successfully.');
                }else{
                    return redirect()->back()->with('error', 'Before Apply please create your resume.');
                }
            }
        } else {
            return redirect('/login')->with('error', 'Please Login Before apply for any jobs.');
        }
    }
    public function logout(Request $req)
    {
        // Clear the session variables manually
        $req->session()->forget('user_id');
        $req->session()->forget('email');
        $req->session()->forget('resume_id');

        return redirect('/candidate')->with('message', 'You have successfully logged out.');
    }

    public function create_resume_action(Request $request)
{
    // Validate form input
    $validatedData = $request->validate([
        'address' => 'required|string|max:255',
        'degree' => 'nullable|string|max:100',
        'stream' => 'nullable|string|max:100',
        'college' => 'required|string|max:255',
        'pursuing_education_status' => 'required|in:yes,no',
        'pursuing_education' => 'nullable|string',
        'experience_status' => 'required|in:yes,no',
        'experience' => 'nullable|string',
        'skills' => 'required|string',
        'known_languages' => 'required|string',
    ]);

    // Insert data into resumes table
    $candidateId = $request->session()->get('user_id');
    $resume_id = DB::table('resumes')->insertGetId([
        'candidate_id' => $candidateId,
        'address' => $validatedData['address'],
        'degree' => $validatedData['degree'],
        'stream' => $validatedData['stream'],
        'college' => $validatedData['college'],
        'pursuing_education_status' => $validatedData['pursuing_education_status'],
        'pursuing_education' => $validatedData['pursuing_education'],
        'experience_status' => $validatedData['experience_status'],
        'experience' => $validatedData['experience'],
        'skills' => $validatedData['skills'],
        'known_languages' => $validatedData['known_languages'],
        'created_at' => now(),
    ]);
    
    // Store the last inserted ID in session
    $request->session()->put('resume_id', $resume_id);

    return redirect('/candidate')->with('message', 'Resume created successfully!');
}

    public function job_searching(Request $request)
    {
        $job_role = $request->input('job_role');
        $job_mode = $request->input('job_location');
        $user_id = session('user_id'); // Get the logged-in user's ID from the session
    
        // Build the query
        $query = DB::table('jobs')
            ->join('companies', 'jobs.created_by', '=', 'companies.id')
            ->leftJoin('resumes', 'resumes.candidate_id', '=', DB::raw('"' . $user_id . '"')) // Join resumes table
            ->where('jobs.status', 2)
            ->select(
                'jobs.id as job_id',
                'jobs.*',
                'companies.id as company_id',
                'companies.company_name',
                'companies.company_address',
                'resumes.id as resume_id',
                'resumes.pursuing_education_status',
                'resumes.degree',
                'resumes.stream',
                'resumes.skills',
                'resumes.created_at as resume_created_at'
            );
    
        // Add conditions for job_role and job_location if they are not empty
        if (!empty($job_role)) {
            $query->where('jobs.job_role', 'LIKE', '%' . $job_role . '%');
        }
    
        if (!empty($job_mode)) {
            $query->where('jobs.job_mode', 'LIKE', '%' . $job_mode . '%');
        }
    
        // Execute the query and get the results
        $jobs = $query->get();
    
        // Return the results to a view
        return view('candidate.jobs', ['jobs' => $jobs]);
    }
    
    
}
