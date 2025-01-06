@extends('layout.master')
@section('content')
<title>ServiceSphere</title>
<link rel="stylesheet" href="{{asset('assets/css/logo.css')}}">


<section>
    <div class="all-contents">
        <!--Freelancer Info-->
        <div class="title">
            <h2>Hire the best Graphic Designers</h2>
        </div>
        <div class="logo-designers">
            @foreach ($freelancers as $h)
            <div class="designer-card">
                <img src="{{asset('/storage/'.$h->profile_image_path)}}">
                <h3>{{ $h->first_name }} {{ $h->last_name }}</h3>
                <p>{{ $h->work_type}}</p>
                <a href="{{route('showinfoFreelancer',$h->id)}}">See more</a>

            </div>
            @endforeach
            <!-- <div class="designer-card">
                <img src="{{asset('assets/image/profile2.png')}}">
                <h3>Kenzie Jackson</h3>
                <p>Logo Designer +$150/hr</p>
                <button>See more</button>
            </div>
            <div class="designer-card">
                <img src="{{asset('assets/image/profile1.png')}}">
                <h3> Jason Huff</h3>
                <p>Logo Designer +$150/hr</p>
                <button>See more</button>
            </div>
            <div class="designer-card">
                <img src="{{asset('assets/image/profile2.png')}}">
                <h3>Sebastian Rivera</h3>
                <p>Logo Designer +$150/hr</p>
                <button>See more</button>
            </div> -->
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
                <img src="{{asset('assets/icon/review1.png')}}" alt="Dangelo Beltran">
                <h3>Dangelo Beltran</h3>
                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
            </div>
            <div class="review-card">
                <img src="{{asset('assets/icon/review2.png')}}" alt="Gabrielle Peralta">
                <h3>Gabrielle Peralta</h3>
                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
            </div>
        </div>
        <button class="scroll-button right" onclick="scrollRight()">&#9654;</button>
    </div>
</section>
<section class="digital-info">
    <div class="projects">
        <h3>Which projects are Logo Designer useful for?</h3>
        <p>
            1. Brand Identity Development<br>
            2. Startups and New Businesses<br>
            3. Rebranding Initiatives<br>
            4. Marketing and Advertising Campaigns<br>
            5. Product Launches
        </p>
    </div>
</section>

<script src="{{asset('assets/js/developer1.js')}}"></script>
@stop