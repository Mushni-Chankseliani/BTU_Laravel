<style>
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

<nav class="navbar">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="logo" width="60">
  <a class="test" href="/">Default</a>
  <a href="/second">Second</a>
  <a href="third">Third</a>
</nav>
