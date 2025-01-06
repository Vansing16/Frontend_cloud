@extends('freelancersite.layouts.master')
@section('content')
@include('freelancersite.layouts.ministry-info')

<section class="project-detail">
    <h2>STEM Training</h2>
    <p>From Jan 02, 2023 till Dec 30, 2023</p>
    <div class="budget">
        Budget of project: <span class="amount">$3000</span>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    <div class="project-image">
        <img src="{{ asset('assets/img/image 9.png') }}">
        <img src="{{ asset('assets/img/image 13.png') }}">
    </div>
    <div class="button">
        <button> <a href="viewProject"> View Project </a></button>
        <button> <a href="updateProject"> Update Project </a></button>
    </div>
</section>
@stop