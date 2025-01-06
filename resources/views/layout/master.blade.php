<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        @include('layout.header')
    </header>

    <!--content-->
    @yield('content')
    
<!--footer-->
    <footer class="footer">
        @include('layout.footer')
    </footer>
<!--/footer-->
</body>
</html>
