<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />

<body class="bg-dark">
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    
    @yield('script')
</body>

</html>