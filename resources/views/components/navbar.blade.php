@php
  $uname = request('username');
@endphp

<nav class="navbar">
  <div class="nav-inner">
    <a class="brand" href="{{ route('dashboard', ['username' => $uname]) }}">Project Kelola Data</a>
    <div class="links">
      <a href="{{ route('dashboard', ['username' => $uname]) }}">Dashboard</a>
      <a href="{{ route('pengelolaan', ['username' => $uname]) }}">Kelola Data</a>
      <a href="{{ route('profile', ['username' => $uname]) }}">Profile</a>
      <a href="{{ route('login') }}" class="logout-btn" title="Logout">
    <i class="fa-solid fa-power-off"></i>
    </a>
    </div>
  </div>
</nav>
