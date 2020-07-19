<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SAKTIWeb" />
    @include('layout.style')
    @yield('style')
    <title>@yield('title')</title>
</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        @yield('nav')
        @yield('jumbotron')
        @yield('content')
        @yield('content1')
        @include('layout.footer')
    </div>
</body>
</html>