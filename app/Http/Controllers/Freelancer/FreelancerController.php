<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Freelancer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FreelancerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:freelancer')->except(['signupForm', 'signup']);
    }

    public function signupForm()
    {
        return view('freelancersite.signupForm');
    }

    public function signup(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:freelancers',
            'password' => 'required|string|min:8',
            'professional_role' => 'required|string|max:255',
            'work_type' => 'required|string',
            'bio' => 'required|string',
            'profile_image_upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'resume_upload' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        // Handle file uploads
        $profileImagePath = $request->file('profile_image_upload')->store('profile_images', 'public');
        $resumePath = $request->file('resume_upload')->store('resumes', 'public');

        // Create a new freelancer
        Freelancer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'professional_role' => $request->professional_role,
            'work_type' => $request->work_type,
            'bio' => $request->bio,
            'profile_image_path' => $profileImagePath,
            'resume_path' => $resumePath,
        ]);

        // Redirect with success message
        return redirect()->route('freelancer.loginForm')->with('success', 'Sign up successful!');
    }

    public function profile()
    {
        // Retrieve the currently authenticated freelancer
        $freelancer = Auth::guard('freelancer')->user();

        // Pass the freelancer data to the profile view
        return view('freelancersite.profile', compact('freelancer'));
    }

    public function editForm()
    {
        $freelancer = Auth::guard('freelancer')->user();
        return view('freelancersite.updateProfile', compact('freelancer'));
    }

    public function update(Request $request)
    {
        $freelancer = Auth::guard('freelancer')->user();

        // Validate the data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'professional_role' => 'required|string|max:255',
            'work_type' => 'required|string|max:255',
            'bio' => 'required|string',
            'profile_image_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'resume_upload' => 'nullable|mimes:pdf,doc,docx|max:2048',
        ]);

        // Handle file uploads
        if ($request->hasFile('profile_image_upload')) {
            $profileImagePath = $request->file('profile_image_upload')->store('profile_images', 'public');
            $freelancer->profile_image_path = $profileImagePath;
        }

        if ($request->hasFile('resume_upload')) {
            $resumePath = $request->file('resume_upload')->store('resumes', 'public');
            $freelancer->resume_path = $resumePath;
        }

        // Update the freelancer's profile
        $freelancer->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'professional_role' => $request->professional_role,
            'work_type' => $request->work_type,
            'bio' => $request->bio,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function showFreelancer()
    {
        // Retrieve the freelancer data using the ID
        $freelancers = Freelancer::where('work_type', 'graphic-design')->get();

        // Pass the freelancer data to the view
        $user = Auth::user();
        return view('logo', compact('freelancers', 'user'));
    }

    public function showinfoFreelancer($id)
    {
        $freelancer = Freelancer::find($id);

        // Pass the freelancer data to the view
        $user = Auth::user();
        return view('developer1', compact('freelancer', 'user'));
    }

    public function contactFreelancer($id)
    {
        $freelancer = Freelancer::find($id);
        $user = Auth::user();
        // Pass the freelancer data to the view
        return view('contactForm', compact('freelancer', 'user'));
    }

    public function showdevelopFreelancer()
    {
        // Retrieve the freelancer data using the ID
        $freelancers = Freelancer::where('work_type', 'web-development')->get();

        // Pass the freelancer data to the view
        return view('webdevelop', compact('freelancers'));
    }

    public function showmarketingFreelancer()
    {
        // Retrieve the freelancer data using the ID
        $freelancers = Freelancer::where('work_type', 'Marketing')->get();

        // Pass the freelancer data to the view
        return view('marketer', compact('freelancers'));
    }
}
