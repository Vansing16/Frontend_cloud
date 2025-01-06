<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freelancer - Site</title>

    <link href="{{ asset('assets/css/master.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/layout.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
</head>

<body>
    <div class="header">
        @include('freelancersite.layouts.header')
    </div>

    <div class="dashboard">
        <aside class="sidebar">
            @include('freelancersite.layouts.sideBar')
        </aside>
        
        <main>
            @yield('content')
            
        </main>
    </div>

    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>