@extends('layouts.navbar')

@section('title') Login @endsection
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

  <form method="post" action="{{route('login')}}" class="borde shadow mx-auto p-3 mt-5" style="width: 25rem;">
    @csrf
    <h3 class="text-center pb-3">Welcome back</h3>
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email">
    </div>

    @error('email')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password">
    </div>

   @error('password')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

      <label class="form-check-label" for="remember"> {{ __('Remember Me') }}</label>
    </div>
    <div class="d-grid mx-auto text-center">
      <button type="submit" class="btn btn_1">Login</button><br>
      <a href="{{route('register')}}" class="link">Don't have account? Sign up Now</a>
    </div>
  </form>
</div>

@endsection