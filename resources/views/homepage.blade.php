@extends('layout.master')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/homepage.css')}}">
<section class="hero">
    <div class="category">
        <div class="findwork">
            <a href="{{route('freelancer.loginForm')}}">
                Find Work
            </a>
        </div>
        <div class="servicetype">
            <a href="/design">Design</a>
            <a href="/development">
                Development
            </a>
            <a href="/marketing">
                Marketing
            </a>
        </div>
    </div>
    <div class="container_i">
        <div>
            <h1>Service<span>Sphere</span></h1>
            <p>Unleash Your Digital Potential. Explore Endless Services, One Marketplace.</p>
        </div>
        <div>
            <img src="{{asset('assets/image/hero.png')}}" alt="Hero Image">
        </div>
    </div>
</section>

<section class="best">
    <div class="container_ii">
        <div class="best-content">
            <h2>The BEST of the Best!!</h2>
            <ul>
                <li><strong>Unlock Your Vision Within Budget</strong> : Discover services for every budget, no hourly rates, transparent project-based pricing.</li>
                <li><strong>Efficiency at Its Best</strong> : Connect with skilled Freelancers instantly, receive high-quality results in record time.</li>
                <li><strong>Satisfaction Guaranteed</strong> : Get upfront quotes, no hidden fees, payment released only upon your approval.</li>
                <li><strong>Support Around the Clock</strong> : Our dedicated support team is here 24/7 to assist you anytime, anywhere.</li>
            </ul>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <h2>What Digital Services do we Offer?</h2>
        <div class="service-cards">
            <div class="service-card">
                <a href="design">
                    <img src="{{asset('assets/image/design.jpg')}}" alt="Design Service">
                    <h3>Design</h3>
                </a>
            </div>

            <div class="service-card">
                <a href="development">
                    <img src="{{asset('assets/image/development.jpg')}}" alt="Development Service">
                    <h3>Development</h3>
                </a>
            </div>
            <div class="service-card">
                <a href="marketing">
                    <img src="{{asset('assets/image/marketing.jpg')}}" alt="Marketing Service">
                    <h3>Marketing</h3>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="why-choose-us">
    <div class="container_iii">
        <h2>Why Choose Us?</h2>
        <ul>
            <li>
                <img src="{{asset('assets/icon/budget.png')}}" alt="Budget Icon"> <!-- Example image for budget -->
                <strong>Budget-Friendly</strong>Find the right service for every budget with transparent, project-based pricing.
            </li>
            <li>
                <img src="{{asset('assets/icon/speedy.png')}}" alt="Speed Icon"> <!-- Example image for speed -->
                <strong>Speedy Results</strong>Connect with skilled freelancers instantly and receive high-quality work quickly.
            </li>
            <li>
                <img src="{{asset('assets/icon/payment.png')}}" alt="Payment Icon"> <!-- Example image for payment -->
                <strong>Payment Confidence</strong>No surprises with upfront quotes and payments released only upon your approval.
            </li>
            <li>
                <img src="{{asset('assets/icon/support.png')}}" alt="Support Icon"> <!-- Example image for support -->
                <strong>24/7 Support</strong>Our dedicated team is always here to assist you, ensuring a seamless experience anytime, anywhere.
            </li>
        </ul>
        <div class="image">
            <img src="{{asset('assets/image/whyUs.png')}}" alt="Your Image">
        </div>
    </div>

</section>


<section class="reviews">
    <div class="container">
        <h2>Customer Reviews</h2>
        <div class="review">
            <img src="{{asset('assets/image/user.png')}}" alt="User 1">
            <div class="review-text">
                <p><strong>Jennifer Lawrence</strong></p>
                <p>Marketing Manager</p>
                <p>Result driven approach</p>
                <p>wow so amazing blah blah blah so cool good nas</p>
            </div>
        </div>
        <div class="review">
            <img src="{{asset('assets/image/user.png')}}" alt="User 2">
            <div class="review-text">
                <p><strong>Jennifer Lawrence</strong></p>
                <p>Marketing Manager</p>
                <p>Result driven approach</p>
                <p>wow so amazing blah blah blah so cool good nas</p>
            </div>
        </div>
        <div class="review">
            <img src="{{asset('assets/image/user.png')}}" alt="User 3">
            <div class="review-text">
                <p><strong>Jennifer Lawrence</strong></p>
                <p>Marketing Manager</p>
                <p>Result driven approach</p>
                <p>wow so amazing blah blah blah so cool good nas</p>
            </div>
        </div>
    </div>
</section>


<script src="script.js"></script>
@stop