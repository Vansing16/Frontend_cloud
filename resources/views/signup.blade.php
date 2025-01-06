@extends('layout.master')
@section('content')
<title>ServiceSphere - Sign Up</title>
<link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
<main>
    <div class="sign-up-container">
        <h2>Create an Account</h2>
        <form id="signUpForm" method="POST" action="{{ route('signup') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <!-- <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input type="password" id="password-confirm" name="password_confirmation" required>
            </div> -->
            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="/login">Log in</a></p>
    </div>
    <div id="successPopup" class="popup">
        <div class="popup-content">
            <p>Successfully created!!</p>
            <a href="/login">
                <button id="closePopup">Close</button>
            </a>
        </div>
    </div>
</main>

<script src="{{ asset('js/signup.js') }}"></script>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@stop