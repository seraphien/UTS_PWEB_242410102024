<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body class="bg">
  @if (!Request::is('/') && !Request::is('login'))
    <x-navbar />
  @endif

  <main class="container">
    @yield('content')
  </main>

  @if (!Request::is('/') && !Request::is('login'))
    <x-footer />
  @endif
</body>
</html>