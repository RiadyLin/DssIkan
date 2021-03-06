@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/Bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/Bootstrap.bundle.min.css')}}">
<script src="{{asset('js/Jquery.slim.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/login.css')}}">

@endsection





@section('content')
<div class="container-fluid">
        <div class="row no-gutter">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Welcome!</h3>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                      <div class="form-label-group">
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputEmail">Email address</label>
                      </div>
                      <div class="form-label-group">
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                      </div>
      
                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                      </div>
                      <button type="submit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Sign In</button>
                    <a href="{{ route('register') }}" class="btn btn-lg btn-primary  btn-block btn-register text-uppercase font-weight-bold mb-2">Register </a>                      
                      <div class="text-center">
                        <a class="small" href="#">Forgot password?</a></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
