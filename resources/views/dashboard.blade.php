@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <h2>Selamat datang, {{ $username ?? 'Tamu' }}!</h2>
  <div class="section">
    <p>Halo {{ $username ?? 'Tamu' }}!</p>
    <p>Gimana kabarmu hari ini? >:)</p>
  </div>
  <div class="section">
    <h3>Statistik Singkat</h3>
    <ul>
      <img
        src="https://peltiertech.com/images/2010-08/LineChart01.png"
        alt="Statistik Icon"
        class="statistik-icon">
      <li>Jumlah Data: 42</li>
      <li>Data Terbaru Ditambahkan: 2024-05-01</li>
      <li>Aktivitas Terakhir: Login pada 2024-06-10</li>
    </ul>
@endsection
