@extends('layout.master')
@section('content')
    <title>ServiceSphere - Contact Us</title>
    <link rel="stylesheet" href="{{asset('assets/css/contactUs.css')}}">

    <main>
        <section class="contact-hero">
            <h1>Reach out</h1>
            <p>We'd love to hear from you. Fill out the form below to get in touch.</p>
        </section>

        <section class="contact-form-section">
            <div class="contact-form-container">
                <div class="contact-info">
                    <img src="{{asset('assets/image/Rectangle 16.png')}}" alt="Contact Us">
                    @if(session('success'))
                           <p>{{ session('success') }}</p>
                    @endif
                    <div class="form-details">
                        <p>Email: servicesphere@gmail.com</p>
                        <p>Phone: +855 12 345 678</p>
                        <p>Address: St. 315, Boeng Kak 1, Tuol Kork, Phnom Penh, Cambodia</p>
                    </div>
                </div>
                <form action="{{ url('/contactUs') }}" method="POST">
                @csrf
                <div class="form-group">
                
                 <input type="text" name="name" placeholder="Name" required>
                 <input type="email" name="email" placeholder="Email" required>
                 </div>
                <div class="form-group">
                  <textarea name="message" placeholder="Your Message" required></textarea>
                 </div>
            <button type="submit">Submit</button>
        </form>
            </div>
        </section>
    </main>

    
    <script src="script.js"></script>
@stop
