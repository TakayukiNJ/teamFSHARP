<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
@yield('head')
@yield('script')
</head>

<body class="presentation-page loading">
@yield('nav_lp')
@yield('headers')
@yield('content')
</body>

<footer class="footer footer-black footer-big">
@yield('footer')
</footer>

</html>