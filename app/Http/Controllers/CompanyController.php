<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

header('cache-control: no-cache, no-store');


class CompanyController extends Controller
{
    public function login_form()
    {
        return view('company.login');
    }
    public function register_form()
    {
        return view('company.register');
    }
    public function company_index()
    {
        return view('company.index');
    }
    public function company_register(Request $req)
    {
        // Validation rules
        $req->validate([
            'company_name' => 'required|string|max:255',
            'company_address' => 'required|string|max:255',
            'trade_number' => 'required|string|max:50',
            'email' => 'required|email|unique:companies,email',
            'phone' => 'required|regex:/^[6789][0-9]{9}$/|unique:companies,phone',
            'web_link' => 'nullable|url',
            'company_experience' => 'required|integer|min:0|max:100',
            'owner_name' => 'required|string|max:255',
            'owner_address' => 'required|string|max:255',
            'owner_contact' => 'required|regex:/^[6789][0-9]{9}$/',
            'owner_email' => 'required|email',
            'company_type' => 'required|string|in:Private,Public,LLP,Startup',
            'password' => 'required|string|min:6|max:255',
            'office_image' => 'nullable|file|mimes:jpeg,jpg,png',
            'brand_logo' => 'nullable|file|mimes:jpeg,jpg,png',
        ], [
            'company_name.required' => 'The company name is required.',
            'company_name.string' => 'The company name must be a valid string.',
            'company_name.max' => 'The company name may not be greater than 255 characters.',

            'company_address.required' => 'The company address is required.',
            'company_address.string' => 'The company address must be a valid string.',
            'company_address.max' => 'The company address may not be greater than 255 characters.',

            'trade_number.required' => 'The trade number is required.',
            'trade_number.string' => 'The trade number must be a valid string.',
            'trade_number.max' => 'The trade number may not be greater than 50 characters.',

            'email.required' => 'The email address is required.',
            'email.email' => 'The email address must be a valid email.',
            'email.unique' => 'The email address has already been taken.',

            'phone.required' => 'The phone number is required.',
            'phone.regex' => 'The phone number must start with 6, 7, 8, or 9 and be 10 digits long.',
            'phone.unique' => 'The phone number has already been taken.',

            'web_link.url' => 'The website URL must be a valid URL.',

            'company_experience.required' => 'The company experience is required.',
            'company_experience.integer' => 'The company experience must be an integer.',
            'company_experience.min' => 'The company experience must be at least 0 years.',
            'company_experience.max' => 'The company experience may not be greater than 100 years.',

            'owner_name.required' => 'The owner name is required.',
            'owner_name.string' => 'The owner name must be a valid string.',
            'owner_name.max' => 'The owner name may not be greater than 255 characters.',

            'owner_address.required' => 'The owner address is required.',
            'owner_address.string' => 'The owner address must be a valid string.',
            'owner_address.max' => 'The owner address may not be greater than 255 characters.',

            'owner_contact.required' => 'The owner contact number is required.',
            'owner_contact.regex' => 'The owner contact number must start with 6, 7, 8, or 9 and be 10 digits long.',

            'owner_email.required' => 'The owner email address is required.',
            'owner_email.email' => 'The owner email address must be a valid email.',

            'company_type.required' => 'The company type is required.',
            'company_type.string' => 'The company type must be a valid string.',
            'company_type.in' => 'The company type must be one of the following: Private, Public, LLP, Startup.',

            'password.required' => 'The password is required.',
            'password.string' => 'The password must be a valid string.',
            'password.min' => 'The password must be at least 6 characters.',
            'password.max' => 'The password may not be greater than 255 characters.',

            'office_image.file' => 'The office image must be a file.',
            'office_image.mimes' => 'The office image must be of type jpeg, jpg, or png.',

            'brand_logo.file' => 'The brand logo must be a file.',
            'brand_logo.mimes' => 'The brand logo must be of type jpeg, jpg, or png.',
        ]);


        // Retrieve form inputs
        $companyName = $req->input('company_name');
        $companyAddress = $req->input('company_address');
        $tradeNumber = $req->input('trade_number');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $webLink = $req->input('web_link');
        $companyExperience = $req->input('company_experience');
        $ownerName = $req->input('owner_name');
        $ownerAddress = $req->input('owner_address');
        $ownerContact = $req->input('owner_contact');
        $ownerEmail = $req->input('owner_email');
        $companyType = $req->input('company_type');
        $password = $req->input('password');

        // Handle file uploads
        $officeImagePath = null;
        $brandLogoPath = null;

        if ($req->hasFile('office_image')) {
            $officeImagePath = $req->file('office_image')->store('public/office_images');
        }

        if ($req->hasFile('brand_logo')) {
            $brandLogoPath = $req->file('brand_logo')->store('public/brand_logos');
        }

        // Prepare data for insertion
        $data = [
            'company_name' => $companyName,
            'company_address' => $companyAddress,
            'trade_number' => $tradeNumber,
            'email' => $email,
            'phone' => $phone,
            'web_link' => $webLink,
            'company_experience' => $companyExperience,
            'owner_name' => $ownerName,
            'owner_address' => $ownerAddress,
            'owner_contact' => $ownerContact,
            'owner_email' => $ownerEmail,
            'company_type' => $companyType,
            'password' => $password,
            'office_image' => $officeImagePath,
            'brand_logo' => $brandLogoPath,
        ];

        // Insert company data and get the inserted ID
        $companyId = DB::table('companies')->insertGetId($data);

        // Store company information in the session
        $req->session()->put('company_email', $email);
        $req->session()->put('company_id', $companyId);

        // Redirect to the company dashboard or another page
        return redirect()->route('/company')->with('message', 'Company registered successfully!');
    }


    public function company_login(Request $req)
    {
        $trade_number = $req->input('trade_number');
        $email = $req->input('email');
        $password = $req->input('password');
        $loginData = DB::table('companies')->where('email', $email)->orWhere('trade_number', $trade_number)->orWhere('password', $password)->first();
        if (!empty($loginData)) {
            $db_trade_number = $loginData->trade_number;
            $db_email = $loginData->email;
            $db_password = $loginData->password;
            $companyId = $loginData->id;
            if ($db_trade_number == $trade_number) {
                if ($db_email == $email) {
                    if ($db_password == $password) {
                        $req->session()->put('company_email', $db_email);
                        $req->session()->put('company_id', $companyId);

                        // Redirect to the company dashboard 
                        return redirect()->route('/company')->with('message', 'Company login successfully!');
                    } else {
                        return redirect('/company/login')->with('message', "Password Doesnot matched");
                    }
                } else {
                    return redirect('/company/login')->with('message', "Company Email Does not matched");
                }
            } else {
                return redirect('/company/login')->with('message', "Trade Number doesn't matched");
            }
        }
    }

    public function applications()
    {
        $applications = DB::table('applications')
            ->join('jobs', 'applications.job_id', 'jobs.id')
            ->join('users', 'applications.candidate_id', 'users.id')
            ->join('resumes', 'applications.resume_id', 'resumes.id')
            ->select('applications.id as application_id', 'applications.status as applications_status', 'applications.*', 'jobs.*', 'users.*', 'resumes.*')
            ->get();
        return view('company.applications_view', compact('applications'));
    }
    public function sortlist_resume($id)
    {
        $updated = DB::table('applications')
            ->where('id', $id)
            ->update(['status' => 2]);

        if ($updated) {
            return redirect()->back()->with('message', 'Application shortlisted successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update application status.');
        }
    }
    public function reject_resume($id)
    {
        $updated = DB::table('applications')
            ->where('id', $id)
            ->update(['status' => 3]);

        if ($updated) {
            return redirect()->back()->with('message', 'Application rejected successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update application status.');
        }
    }
    public function logout(Request $req)
    {
        // Clear the session variables manually
        $req->session()->forget('company_email');
        $req->session()->forget('company_id');

        return redirect('/company/login')->with('message', 'You have successfully logged out.');
    } 
}
