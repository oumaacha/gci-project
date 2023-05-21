<!doctype html>
<html lang="en">
<head>
<style>
        .search-container {
  position: relative;
  display: inline-block;
}

.search-container input[type="text"] {
  padding: 10px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  outline: none;
}

.search-container button[type="submit"] {
  position: absolute;
  top: 0;
  right: 0;
  padding: 10px;
  background-color: #333;
  border: none;
  border-radius: 0 5px 5px 0;
  color: #fff;
  cursor: pointer;
}

.search-container button[type="submit"]:hover {
  background-color: #555;
}

    </style>
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
    <div class="search-container">
        <input type="text" placeholder="Search...">
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
@yield('script')
</body>
</html>
