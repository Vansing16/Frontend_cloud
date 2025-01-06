<!-- resources/views/freelancersite/profile.blade.php -->
@extends('freelancersite.layouts.master')
@section('content')

<title>Freelancer Profile</title>
<link rel="stylesheet" href="{{ asset('assets/css/profilepage.css') }}">

<main>
    <div class="profile-container">
        <h2>{{ $freelancer->first_name }} {{ $freelancer->last_name }}</h2>
        <div class="profile-details">
            <div class="profile-image">
                <img src="{{ asset('/storage/' . $freelancer->profile_image_path) }}" alt="Profile Image">
            </div>
            <div class="profile-info">
                <p><strong>Email:</strong> {{ $freelancer->email }}</p>
                <p><strong>Professional Role:</strong> {{ $freelancer->professional_role }}</p>
                <p><strong>Work Type:</strong> {{ $freelancer->work_type }}</p>
                <p><strong>Bio:</strong> {{ $freelancer->bio }}</p>
                <p><strong>Resume:</strong> <a href="{{ asset('/storage/' . $freelancer->resume_path) }}" target="_blank">View Resume</a></p>
            </div>
        </div>
    </div>
</main>

<script src="{{ asset('js/profile.js') }}"></script>
@endsection