@extends('layout.master')
@section('content')
<title>ServiceSphere - Contact Me</title>
<link rel="stylesheet" href="{{ asset('assets/css/contactForm.css') }}">
<main>
    <div class="sign-up-container">
        <h2>Contact Me</h2>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form id="signUpForm" action="{{ route('message.store',$freelancer->id) }}" method="POST">
            @csrf
            <div class="form-group">
                Send to {{$freelancer->email}}
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" placeholder="Your Message" required></textarea>
            </div>
            <div class="form-group">
                <label for="contactinfo">Contact</label>
                <input type="text" placeholder="Your Phonenumber or Telegram.." id="contactinfo" name="contactinfo" required>
            </div>
            <button type="submit">Send</button>
        </form>

    </div>
    <!-- Popup container -->
    <div id="successPopup" class="popup" style="display: none;">
        <div class="popup-content">
            <p>Message Sent Successfully!</p>
            <button id="closePopup">Close</button>
        </div>
    </div>
    @if(session('success'))
    <input type="hidden" id="successMessage" value="{{ session('success') }}">
    @endif
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if the hidden input exists and display the popup if it does
        var successMessageInput = document.getElementById('successMessage');
        if (successMessageInput) {
            // Show the popup
            document.getElementById('successPopup').style.display = 'block';

            // Close the popup when the close button is clicked
            document.getElementById('closePopup').addEventListener('click', function() {
                document.getElementById('successPopup').style.display = 'none';
            });
        }
    });
</script>
@stop