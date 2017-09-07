<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- material Css CDN -->

    <link rel="stylesheet" href="{{ url('css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <script type="text/javascript" src="{{ url('js/jquery-2.2.3.js') }}"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="{{ url('js/materialize.min.js') }}"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
    @yield('content')
    @yield('script')
</body>
</html>