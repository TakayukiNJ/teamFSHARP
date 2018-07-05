<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  @yield('head')
  @yield('script')
</head>

<body class="presentation-page loading">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113255449-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-113255449-1');
  </script>
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
    @yield('nav_lp')
  </nav>
  @yield('headers')
  @yield('content')
</body>

<footer class="footer footer-black footer-big">
  @yield('footer')
</footer>

</html>