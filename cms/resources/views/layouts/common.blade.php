<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@yield('head')
</head>

<body class="presentation-page loading">
@yield('nav_lp')

@yield('body_headers')
@yield('content')

</body>

<footer class="footer footer-black footer-big">
@yield('footer')
</footer>
@yield('script')
</html>

