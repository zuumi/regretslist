<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('style.css')}}">
  <title>@yield('title')</title>
</head>
<body>
<header>
  <a href="/todolist">@yield('title')</a>
</header>
<main>
  <section>
    @yield('content')
  </section>
</main>
<footer>
  @yield('footer')
  &copy; 2020 ysk . Inc
</footer>
<script type="text/javascript">
  'use strict';
  function chageColor(){
    document.getElementByID('');
  };
</script>
</body>
</html>
