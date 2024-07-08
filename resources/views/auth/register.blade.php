@extends('layouts.navbar')

@section('title') Register @endsection
@section('menu') home_menu @endsection
@section('logo')   <a class="navbar-brand" href="{{route('index')}}"> <img src="img/logo.png" alt="logo"> </a> @endsection

@section('header')

<div class="container my-5 pt-5">

<div class="w-50 mx-auto">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

  <form method="post" action="{{route('register')}}" class="borde shadow mx-auto p-3 mt-5" style="width: 25rem;">
    @csrf
    <h3 class="text-center pb-3">New Account</h3>
    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <div class="d-grid mx-auto text-center">
      <button type="submit" class="btn btn_1">Sign Up</button><br>
      <a href="{{route('login')}}" class="link">You have account? Login Now</a>
    </div>
  </form>
</div>

@endsection