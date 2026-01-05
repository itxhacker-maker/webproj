<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Learn Anything')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
      <nav class="navbar">
        <div class="logo">Learn Programming</div>
        <ul class="nav-links">
          <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('courses') }}" class="{{ request()->routeIs('courses') ? 'active' : '' }}">Courses</a></li>
          <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
          <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
      </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
      <p>learn programming</p>
    </footer>
</body>
</html>
