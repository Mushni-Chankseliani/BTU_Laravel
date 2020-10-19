<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    @if (isset($title))
      {{ $title}}
    @else
      No Title
    @endif
  </title>
</head>

<style>
  .light {
    background-color: aliceblue;
  }

  .dark {
    background-color: darkcyan;
  }

  .navbar {
    display: flex;
    align-items: center;
  }
  .navbar a {
    text-decoration: none;
    margin-left: 15px;
    cursor: pointer;
    font-size: 16px
  }

  .light .navbar a {
    color: black;
  }

  .light a:hover {
    color: darkblue;
  }

  .dark .navbar a {
    color: white;
  }

  .dark .navbar a:hover {
    color: lightcyan;
  }

</style>
<body class="{{ $theme }}">
  <nav class="navbar">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="logo" width="60">
    <a class="test" href="/">Default</a>
    <a href="/second">Second</a>
    <a href="third">Third</a>
  </nav>

  @yield('content')

  @if($hasFooter)
  <footer>
    Powered By Me
  </footer>
  @endif
</body>
</html>