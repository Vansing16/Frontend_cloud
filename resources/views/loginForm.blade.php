@extends('layout.master')
@section('content')
<title>ServiceSphere</title>
<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

<section class="hero">
    <div class="login-container">
        <h1>Log in to your account</h1>
        <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember-me" name="remember">
                <label class="form-check-label" for="remember-me">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="account-actions">
            <a href="/signup">Don't have an account yet?</a>
            <a href="/signup">Create an account</a>
            <a href="/freelancer/login">Log in as freelancer?</a>
        </div>
    </div>
</section>

<script src="{{ asset('js/script.js') }}"></script>
@stop