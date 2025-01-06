@extends('layout.master')
@section('content')
<title>ServiceSphere</title>
<link rel="stylesheet" href="{{asset('assets/css/development.css')}}">

<section class="hero">
    <div class="category">
        <div class="findwork">
            <a href="#">
                Find Work
            </a>
        </div>
        <div class="servicetype">
            <a href="/design">
                Design
            </a>
            <a href="/development">
                Development
            </a>
            <a href="/marketing">
                Marketing
            </a>
        </div>
    </div>

</section>

<div class="top-banner">
    <h1>DEVELOPMENT</h1>
    <p>Hire our top developers to create innovative digital solutions tailored to your needs</p>
</div>
<section class="services">
    <h2>Explore our design services to elevate your brand's visual identity.</h2>
    <div class="service-grid">
        <div class="service-item">
            <a href="{{route('showdevelopFreelancer')}}">
                <img src="{{asset('assets/image/develop1.png')}}" alt="Website Developer">
                <h3>Website Developer</h3>
            </a>
        </div>
        <div class="service-item">
            <img src="{{asset('assets/image/develop2.png')}}" alt="Mobile App Developer">
            <h3>Mobile App Developer</h3>
        </div>
        <div class="service-item">
            <img src="{{asset('assets/image/develop3.png')}}" alt="Game Developer">
            <h3>Game Developer</h3>
        </div>
        <div class="service-item">
            <img src="{{asset('assets/image/develop4.png')}}" alt="Software Developer">
            <h3>Software Developer</h3>
        </div>
    </div>
</section>
<section class="why-choose-us">
    <div class="container_iii">
        <div class="image">
            <img src="{{asset('assets/image/3d.png')}}" alt="Your Image">
        </div>
        <ul>
            <li>
                <a>Our <span>development services</span> focuses on creating high-quality, user-friendly digital solutions tailored to your needs.</a>
            </li>
            <li>
                <a>From <span>websites</span> to <span>mobile applications</span>, we ensure that your digital presence is modern, functional, and efficient.</a>
            </li>

        </ul>

    </div>
    <section class="projects">
        <h2>Take a look at some of our designer's past projects</h2>
        <div class="project-grid">
            <div class="project-item">
                <img src="{{asset('assets/image/project1.png')}}" alt="Project 1">
            </div>
            <div class="project-item">
                <img src="{{asset('assets/image/project2.png')}}" alt="Project 2">
            </div>
            <div class="project-item">
                <img src="{{asset('assets/image/project3.png')}}" alt="Project 3">
            </div>
            <div class="project-item">
                <img src="{{asset('assets/image/project4.avif')}}" alt="Project 4">
            </div>
            <div class="project-item">
                <img src="{{asset('assets/image/project5.jpg')}}" alt="Project 5">
            </div>
            <div class="project-item">
                <img src="{{asset('assets/image/project6.jpg')}}" alt="Project 6">
            </div>
        </div>
    </section>
</section>

<script src="script.js"></script>
@stop