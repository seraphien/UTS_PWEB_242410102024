@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
  <h2>Daftar Pengelolaan</h2>
  <div class="section">
    <table class="table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Peran</th>
        </tr>
      </thead>
      <tbody>
        @foreach($listData as $item)
          <tr>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['peran'] }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
