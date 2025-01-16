<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title', 'My Laravel App')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('menu_home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('menu_about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('menu_contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-3">
  <h3>@yield('title', 'My Laravel App')</h3>
  @yield('content')
</div>

<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2025 My Laravel App</p>
</footer>

</body>
</html>
