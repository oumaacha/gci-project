<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" />
    <title>@yield('title')</title>
</head>
<body>
    <div class="application">
        <div class="sidebar">
            @include('layout.sidebar')
        </div>
        <div class="content d-flex flex-column">
            @include('layout.navbar')
            <div class="corp d-flex flex-column justify-content-between">
                @yield('content')
            </div>
        </div>
    </div>
@yield('script')
</body>
</html>
