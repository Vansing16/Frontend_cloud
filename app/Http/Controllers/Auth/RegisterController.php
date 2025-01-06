<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function signupForm()
    {
        return view('signup');
    }

    public function signup(Request $request)
    {
        error_log("signup");

        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);


        error_log("create");

        // Create a new user
        if (User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])) {
            return redirect("/")->with('success', 'Sign up successful!');
        }

        // Redirect with a success message

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // public function showRegistrationForm()
    // {
    //     return view('signup');
    // }

    // public function register(Request $request)
    // {
    //     $this->validator($request->all())->validate();
    //     $user = $this->createUser($request->all());

    //     return redirect('/')->with('success', 'Successfully created!!');
    // }

    // public function showRegistrationFreelancer()
    // {
    //     return view('freelancersite.signupFreelancer');
    // }

    // public function registerFreelancer(Request $request)
    // {
    //     $this->freelancerValidator($request->all())->validate();
    //     $user = $this->createFreelancer($request->all());

    //     return redirect('/profile')->with('success', 'Successfully created!!');
    // }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'first_name' => ['required', 'string', 'max:255'],
    //         'last_name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    // protected function createUser(array $data)
    // {
    //     return User::create([
    //         'first_name' => $data['first_name'],
    //         'last_name' => $data['last_name'],
    //         'email' => $data['email'],
    //         'type' => "user",
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    // protected function freelancerValidator(array $data)
    // {
    //     return Validator::make($data, [
    //         'first_name' => ['required', 'string', 'max:255'],
    //         'last_name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'profile_image_upload' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
    //         'professional_role' => ['required', 'string', 'max:255'],
    //         'work_type' => ['required', 'string'],
    //         'bio' => ['required', 'string'],
    //         'resume_upload' => ['required', 'mimes:pdf,doc,docx', 'max:5120'],
    //     ]);
    // }

    // protected function createFreelancer(array $data)
    // {
    //     // Handle the file uploads
    //     $profileImagePath = $data['profile_image_upload']->store('profile_images', 'public');
    //     $resumePath = $data['resume_upload']->store('resumes', 'public');

    //     return User::create([
    //         'first_name' => $data['first_name'],
    //         'last_name' => $data['last_name'],
    //         'email' => $data['email'],
    //         'type' => "freelancer",
    //         'password' => Hash::make($data['password']),
    //         'profile_image' => $profileImagePath,
    //         'professional_role' => $data['professional_role'],
    //         'work_type' => $data['work_type'],
    //         'bio' => $data['bio'],
    //         'resume' => $resumePath,
    //     ]);
    // }
}
