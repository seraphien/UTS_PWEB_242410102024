@extends('layouts.app')
@section('title', 'Profile')

@section('content')
<h2>Profile</h2>

<div class="profile-layout">
  <div class="section profile-card">
    <img
      src="https://i.pinimg.com/1200x/24/38/5d/24385dfc36869a95c0b83322d4e84ad9.jpg"
      alt="Profile"
      class="profile-img">
  </div>
  <div class="section info-card">
    <h3>Selamat datang, <span class="highlight">{{ $username ?? 'Evie' }}</span> <3</h3>
    <p>Nama : [plesholder]</p>
    <p>Email : [plesholder]</p>
    <p>Nomor Telepon : [plesholder]</p>
    <p>Peran : [plesholder]</p>
  </div>
</div>
@endsection
