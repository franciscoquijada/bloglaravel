<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head') 
</head>
<body>
    <header>
        @include('includes.header')
    </header>
    @yield('index')
    <footer>
        @include('includes.footer')
    </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
