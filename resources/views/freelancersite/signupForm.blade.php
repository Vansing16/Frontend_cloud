@extends('layout.master')

@section('content')
<title>ServiceSphere - Sign Up</title>
<link rel="stylesheet" href="{{ asset('assets/css/signupFreelancer.css') }}">

<main>
    <div class="sign-up-container">
        <div class="form-section">
            <h3>General Information</h3>
            <form id="signUpForm" method="POST" action="{{ route('freelancer.signup') }}" enctype="multipart/form-data">
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
                    @error('email')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    @error('password')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group upload-container">
                    <label for="profile-image-upload" class="upload-label">
                        <span class="upload-text">Upload your profile image</span>
                        <input type="file" id="profile-image-upload" name="profile_image_upload" accept="image/*" required>
                    </label>

                </div>

        </div>

        <div class="form-section">
            <h3>Profile Information</h3>

            <div class="form-group">
                <label for="professional-role">Your professional role</label>
                <input type="text" id="professional-role" name="professional_role" placeholder="Graphic Design | Web developer" required>
            </div>
            <div class="form-group">
                <label for="work-type">What work are you here to do?</label>
                <select id="work-type" name="work_type" required>
                    <option value="" disabled selected>Select</option>
                    <option value="graphic-design">Graphic Design</option>
                    <option value="web-development">Web Development</option>
                    <option value="Marketing">Marketing</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bio">Write a bio to tell the world about yourself.</label>
                <textarea id="bio" name="bio" placeholder="Enter your top skills and experience" required></textarea>
            </div>
            <div class="form-group upload-container">
                <label for="resume-upload" class="upload-label">
                    <span class="upload-text">Upload your resume Here</span>
                    <input type="file" id="resume-upload" name="resume_upload" accept=".pdf,.doc,.docx" required>
                </label>
            </div>

            <button type="submit">Sign Up</button>
            </form>
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