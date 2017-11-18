<!DOCTYPE html>
<html>
<head>
    <title>Shape Up Campaign</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Shape Up Calculator" />
    <meta name="keywords" content="calorie,calculator" />
    <meta name="author" content="Codesmith Pte Ltd" />

    <!-- Styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" type="text/css"/>
    @yield('page_css')
</head>
<body>
    @yield('content')

    <!-- Javascripts -->
    <script src="{{ asset('/js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    @yield('javascript')
</body>
</html>