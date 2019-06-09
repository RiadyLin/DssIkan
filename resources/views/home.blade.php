@extends('layouts.app')


@section('css')

<link rel="stylesheet" href="{{asset('css/Bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/Bootstrap.bundle.min.css')}}">
<script src="{{asset('js/Jquery.slim.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/login.css')}}">

@endsection


@section('content')
{{-- <div class="container">
    <div class="row justify-content-center" style="margin-top: 100px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align : center;">WELCOME PLEASE INPUT YOUR CONDITION</div>
            <form action="{{ route('page.submit')}}" method="POST" style="margin-top: 20px;">
                @csrf
                <div class="form-label-group">
                    <input type="text" id="Alternative1" name="alternative1" class="form-control" placeholder="Alternative 1" required autofocus>
                    <label for="Alternative 1">Alternative 1</label>
                  </div>
                  <div class="form-label-group">
                    <input type="text" id="Alternative2" name="alternative2" class="form-control" placeholder="Alternative 2" required autofocus>
                    <label for="Alternative 1">Alternative 2</label>
                  </div>
                  <div class="form-label-group">
                    <input type="text" id="Alternative3" name="alternative3" class="form-control" placeholder="Alternative 3" required autofocus>
                    <label for="Alternative 1">Alternative 3</label>
                  </div>
                    {{-- <input type="text" name="nama_ikan[]">
                    <input type="text" name="nama_ikan[]">
                    <input type="text" name="nama_ikan[]"> --}}

                {{-- <button type="submit" class="custom-btn">Submit</button>
            </form>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid">
    <div class="row no-gutter">
      
      <div class="col-md-12 col-lg-12">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4" style="text-align:center;">Welcome</h3>
                <h3 class="login-heading mb-4" style="text-align:center;">Selamat Datang</h3>
                <p class="login-heading mb-4" style="text-align:center;">Silahkan masukan jenis ikan yang menjadi alternatif</p>
                <form action="{{ route('page.submit')}}" method="POST" style="margin-top: 20px;">
                    @csrf
                    <div class="form-label-group">
                        <input type="text" id="Alternative1" name="alternative1" class="form-control"  required autofocus>
                        <label for="Alternative 1">Alternative 1</label>
                      </div>
                      <div class="form-label-group">
                        <input type="text" id="Alternative2" name="alternative2" class="form-control"  required>
                        <label for="Alternative 1">Alternative 2</label>
                      </div>
                      <div class="form-label-group">
                        <input type="text" id="Alternative3" name="alternative3" class="form-control"  required>
                        <label for="Alternative 1">Alternative 3</label>
                      </div>
                        {{-- <input type="text" name="nama_ikan[]">
                        <input type="text" name="nama_ikan[]">
                        <input type="text" name="nama_ikan[]"> --}}
    
                     
                     <button type="submit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">SUBMIT</button>
 
                     <a href="{{route('logout')}}" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Logout</a>
                    {{-- onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form> --}}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
