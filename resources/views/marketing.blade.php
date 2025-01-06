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
    <h1>MARKETING</h1>
    <p>Hire our best marketer to boost your brand's visibility and drive conversions.</p>
</div>
<section class="services">
    <h2>Explore our design services to elevate your brand's visual identity.</h2>
    <div class="service-grid">
        <div class="service-item">
            <a href="{{route('showmarketingFreelancer')}}">
                <img src="{{asset('assets/image/develop1.png')}}" alt="Website Developer">
                <h3>Marketing</h3>
            </a>
        </div>
        <!-- <div class="service-item">
                <img src="{{asset('assets/image/logo.png')}}" alt="Digital Marketer">
                <h3>Digital Marketer</h3>
            </div> -->
        <div class="service-item">
            <img src="{{asset('assets/image/art.png')}}" alt="Art Designers">
            <h3>Content Marketer</h3>
        </div>
        <div class="service-item">
            <img src="{{asset('assets/image/graphic.png')}}" alt="Social Media">
            <h3>Social Media</h3>
        </div>
        <div class="service-item">
            <img src="{{asset('assets/image/ux.png')}}" alt="Analyics & Strategy">
            <h3>Analyics & Strategy</h3>
        </div>
    </div>
</section>
<section class="why-choose-us">
    <div class="container_iii">
        <ul>
            <li>
                <a>Our <span>design services</span>helps you reach and engage your target audience effectively.</a>
            </li>
            <li>
                <a>From <span>content strategy</span> to <span>media marketing</span> , we ensure that your brand message is delivered to the right people at the right time.</a>
            </li>

        </ul>
        <div class="image">
            <img src="{{asset('assets/image/3d.png')}}" alt="Your Image">
        </div>
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

</footer>
<script src="script.js"></script>
@stop