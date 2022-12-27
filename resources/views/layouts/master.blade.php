<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>ToDo App</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>


    @include('partials.navbar')
    <div class="container">
        @yield('content')
    </div>
    
    
    @include('partials.footer')
    <script src="{{asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('public/js/jquery.min.js') }}"></script>
    <script src="{{asset('public/js/script.js') }}"></script>
</body>
</html>