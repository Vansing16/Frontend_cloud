<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginFreelancerController extends Controller
{

    public function loginForm()
    {
        return view('freelancersite.loginForm');
    }
    /**
     * Handle a freelancer login request to the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {

        $all = $request->email;
        error_log("---{{$all}}");

        echo ("before validator");
        // Validate the login data
        $this->validator($request->all())->validate();

        echo ("afer validator");
        // Attempt to authenticate against the 'freelancers' table
        if (Auth::guard('freelancer')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            echo ("Auth::guard('freelancer')->a");
            // Authentication passed...
            return redirect('/addServices')->with('success', 'You are logged in!');
        }
        echo ("testtttttttt");

        // Authentication failed...
        return redirect('/freelancer/login')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Validate the freelancer login request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('freelancer')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/freelancer/login')->with('success', 'You have been logged out!');
    }
}
