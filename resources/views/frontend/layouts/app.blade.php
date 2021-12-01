<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('frontend.includes.style')
    @stack('style')

</head>
<body>

@include('frontend.includes.navbar')
@yield('contents')

@include('frontend.includes.scripts')
@stack('scripts')

@include('frontend.includes.footer')

</body>
</html>
