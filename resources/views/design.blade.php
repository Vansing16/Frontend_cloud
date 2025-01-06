@extends('layout.master')
@section('content')
<title>ServiceSphere</title>
<link rel="stylesheet" href="{{asset('assets/css/design.css')}}">

<section class="hero">
    <div class="category">
        <div class="findwork">
            <a href="/loghinFreelancer">
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
    <h1>DESIGN</h1>
    <p>Hire our talented designers to create stunning visuals that elevate your brand's identity!</p>
</div>
<section class="services">
    <h2>Explore our design services to elevate your brand's visual identity.</h2>
    <div class="service-grid">
        <div class="service-item">
            <a href="{{route('showFreelancer')}}">
                <img src="{{asset('assets/image/logo.png')}}" alt="Logo Designers">
                <h3>Graphic Designers</h3>
            </a>
        </div>
        <div class="service-item">
            <img src="{{asset('assets/image/art.png')}}" alt="Art Designers">
            <h3>Art Designers</h3>
        </div>
        <div class="service-item">
            <img src="{{asset('assets/image/graphic.png')}}" alt="Graphic Designers">
            <h3>Logo Designers</h3>
        </div>
        <div class="service-item">
            <img src="{{asset('assets/image/ux.png')}}" alt="UX/UI Designers">
            <h3>UX/UI Designers</h3>
        </div>
    </div>
</section>
<section class="why-choose-us">
    <div class="container_iii">
        <ul>
            <li>
                <a>Our <span>design services</span> focuses on creating visually appealing and memorable designs for your brand.Our design services focuses on creating visually appealing and memorable designs for your brand.</a>
            </li>
            <li>
                <a>From logos to <span>marketing materials</span> , we ensure that your brand stands out and leaves a lasting impression on your audience.</a>
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

    <script src="script.js"></script>
    @stop