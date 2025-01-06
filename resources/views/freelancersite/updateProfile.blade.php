@extends('freelancersite.layouts.master')
@section('content')

<title>ServiceSphere - Edit Profile</title>
<link rel="stylesheet" href="{{ asset('assets/css/updateProfile.css') }}">

<main>
    <div class="edit-profile-container">
        <div class="form-section">
            <h3>Edit Profile Information</h3>
            <form id="editProfileForm" method="POST" action="{{ route('freelancer.update') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first_name" value="{{ $freelancer->first_name }}" required>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last_name" value="{{ $freelancer->last_name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ $freelancer->email }}" required>
                    @error('email')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group upload-container">
                    <label for="profile-image-upload" class="upload-label">
                        <span class="upload-text">Upload your profile image</span>
                        <input type="file" id="profile-image-upload" name="profile_image_upload" accept="image/*">
                    </label>
                </div>
        </div>

        <div class="form-section">
            <h3>Profile Information</h3>
            <div class="form-group">
                <label for="professional-role">Your professional role</label>
                <input type="text" id="professional-role" name="professional_role" value="{{ $freelancer->professional_role }}" required>
            </div>
            <div class="form-group">
                <label for="work-type">What work are you here to do?</label>
                <select id="work-type" name="work_type" required>
                    <option value="" disabled>Select</option>
                    <option value="graphic-design" {{ $freelancer->work_type == 'graphic-design' ? 'selected' : '' }}>Graphic Design</option>
                    <option value="web-development" {{ $freelancer->work_type == 'web-development' ? 'selected' : '' }}>Web Development</option>
                    <option value="content-writing" {{ $freelancer->work_type == 'content-writing' ? 'selected' : '' }}>Content Writing</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bio">Write a bio to tell the world about yourself.</label>
                <textarea id="bio" name="bio" required>{{ $freelancer->bio }}</textarea>
            </div>
            <div class="form-group upload-container">
                <label for="resume-upload" class="upload-label">
                    <span class="upload-text">Upload your resume Here</span>
                    <input type="file" id="resume-upload" name="resume_upload" accept=".pdf,.doc,.docx">
                </label>
            </div>

            <button type="submit">Update Profile</button>
            </form>
        </div>
    </div>
</main>

<script src="{{ asset('js/editProfile.js') }}"></script>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@stop