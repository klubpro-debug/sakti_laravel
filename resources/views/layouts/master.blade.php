<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SAKTIWeb" />
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    @include('layouts.style')
    @yield('style')
    <title>@yield('title')</title>
</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        @yield('nav')
        @yield('jumbotron')
        @yield('content')
        @yield('content1')
        @include('layouts.footer')
    </div>
</body>

</html>