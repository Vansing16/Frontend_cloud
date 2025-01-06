@extends('layout.master')
@section('content')
<title>ServiceSphere</title>
<link rel="stylesheet" href="{{asset('assets/css/developer1.css')}}">

<section class="logo-designer">
    <h1>Logo Designers</h1>
    <div class="designer-profile">
        <div class="designer-header">
            <img src="{{asset('/storage/'.$freelancer->profile_image_path)}}" alt="Trinity Hamilton">
            <div class="designer-info">
                <h2>{{$freelancer->first_name}}{{$freelancer->last_name}}</h2>
                <p>{{$freelancer->professional_role}}</p>
            </div>
        </div>
        <div class="designer-details">
            <h3>Design a minimalist logo that will help you build your brand</h3>
            <p>{{$freelancer->bio}}</p>
            <a href="{{route('contactFreelancer',$freelancer->id)}}" class="contact-button">Contact</a>

        </div>
    </div>

</section>
<section class="features">
    <div class="feature">
        <img src="{{asset('assets/icon/delivery.png')}}" alt="Delivery">
        <h3>Delivery in</h3>
        <p>3 Days</p>
    </div>
    <div class="feature">
        <img src="{{asset('assets/icon/rate.png')}}" alt="Rating">
        <h3>Rating</h3>
        <p>99%</p>
    </div>
    <div class="feature">
        <img src="{{asset('assets/icon/response.png')}}" alt="Response Time">
        <h3>Response time</h3>
        <p>within a few hours</p>
    </div>
</section>
<section class="reviews">
    <h2>Client’s Reviews</h2>
    <div class="reviews-container">
        <button class="scroll-button left" onclick="scrollLeft()">&#9664;</button>
        <div class="review-cards">
            <div class="review-card">
                <img src="{{asset('assets/icon/review1.png')}}" alt="Audrey McCormick">
                <h3>Audrey McCormick</h3>
                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
            </div>
            <div class="review-card">
                <img src="{{asset('assets/icon/review2.png')}}" alt="Dangelo Beltran">
                <h3>Dangelo Beltran</h3>
                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
            </div>
            <div class="review-card">
                <img src="{{asset('assets/icon/review3.png')}}" alt="Gabrielle Peralta">
                <h3>Gabrielle Peralta</h3>
                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
            </div>
            <div class="review-card">
                <img src="{{asset('assets/icon/review2.png')}}" alt="Dangelo Beltran">
                <h3>Dangelo Beltran</h3>
                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
            </div>
            <div class="review-card">
                <img src="{{asset('assets/icon/review3.png')}}" alt="Gabrielle Peralta">
                <h3>Gabrielle Peralta</h3>
                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
            </div>
        </div>
        <button class="scroll-button right" onclick="scrollRight()">&#10146;</button>
        <!-- <button class="scroll-button left" onclick="scrollLeft()">&#8592;</button> -->
    </div>
</section>

<script src="{{asset('assets/js/developer1.js')}}"></script>
@stop