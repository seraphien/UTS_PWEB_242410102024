@extends('layouts.app')

@section('title', 'Login')

@section('content')
  <h2>Login</h2>
  <div class="section">
    <form action="{{ route('doLogin') }}" method="POST">
      @csrf
      <label>Username</label>
      <input class="input" type="text" name="username" required>

      <label>Password</label>
      <input class="input" type="password" name="password" required>

      <div style="margin-top:12px">
        <button type="submit" class="btn">Login</button>
      </div>
    </form>
  </div>
@endsection