<link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
<header>
    <div class="header-container">
        <div class="logo">Service<span>Sphere</span></div>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contactUs">Contact Us</a>

            @auth
                {{-- <p>Welcome, {{ auth()->user()->first_name }}!</p> --}}
                <a href="/logout">Log out</a>
            @else
                <a href="/login">Log in</a>
                <a href="/signup">Sign up</a>
            @endauth
        </nav>
    </div>
</header>
