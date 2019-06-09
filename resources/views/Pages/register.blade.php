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
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-label-group">
                                <input type="text" id="inputName" name="name" class="form-control"  required autofocus>
                                <label for="inputName">Your Name</label>
                              </div>
                      <div class="form-label-group">
                        <input type="email" id="inputEmail" name="email" class="form-control"  required autofocus>
                        <label for="inputEmail">Email address</label>
                      </div>

                      <div class="form-label-group">
                        <input type="password" id="inputPassword" name="password" class="form-control"  required>
                        <label for="inputPassword">Password</label>
                      </div>
                      <div class="form-label-group">
                            <input type="password" id="inputPassword" name="password_confirmation" class="form-control" required>
                            <label for="inputPassword">Password Confirmation</label>
                          </div>
      
                      <button type="submit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Register</button>
                                         
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection