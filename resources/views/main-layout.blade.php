<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    @yield('title')
  </title>
</head>

<style>
  .light {
    background-color: aliceblue;
  }

  .dark {
    background-color: darkcyan;
  }

</style>
<body class="{{ $theme }}">
  @include('navbar')

  @yield('content')

  @yield('footer')
</body>
</html>