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
      
      <div class="col-md-12 col-lg-12">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4" style="text-align:center;">Selanjutnya</h3>
                <p class="login-heading mb-4" style="text-align:center;">Silahkan masukan kriteria dari alternatif</p>
                <form action="{{ route('page.submit')}}" method="POST" style="margin-top: 20px;">
                    @csrf

                    {{-- Alternatif 1 --}}

                    <div class="form-label-group">
                        <H3 class="login-heading mb-4">Alternatif 1</H3>
                             <div class="form-label-group">
                                <input type="text" id="K1A1" name="K1A1" class="form-control"   required autofocus>
                                <label for="K1A1">Kriteria 1</label>                    
                             </div>
                            <div class="form-label-group">
                                 <input type="text" id="K2A1" name="K2A1" class="form-control"   required autofocus>
                                 <label for="K2A1">Kriteria 2</label>                    
                            </div>
                            <div class="form-label-group">
                                <input type="text" id="K3A1" name="K3A1" class="form-control"   required autofocus>
                                <label for="K3A1">Kriteria 3</label>                    
                            </div>
                            <div class="form-label-group">
                                    <input type="text" id="K4A1" name="K4A1" class="form-control"   required autofocus>
                                    <label for="K4A1">Kriteria 4</label>                    
                            </div>
                            <div class="form-label-group">
                                    <input type="text" id="K5A1" name="K5A1" class="form-control"   required autofocus>
                                    <label for="K5A1">Kriteria 5</label>                    
                                </div>
                    </div>

                    {{-- alternatif 2 --}}

                    <div class="form-label-group">
                            <H3 class="login-heading mb-4">Alternatif 2</H3>
                                 <div class="form-label-group">
                                    <input type="text" id="K1A2" name="K1A2" class="form-control"   required autofocus>
                                    <label for="K1A2">Kriteria 1</label>                    
                                 </div>
                                <div class="form-label-group">
                                     <input type="text" id="K2A2" name="K2A2" class="form-control"   required autofocus>
                                     <label for="K2A2">Kriteria 2</label>                    
                                </div>
                                <div class="form-label-group">
                                    <input type="text" id="K3A2" name="K3A2" class="form-control"   required autofocus>
                                    <label for="K3A2">Kriteria 3</label>                    
                                </div>
                                <div class="form-label-group">
                                        <input type="text" id="K4A2" name="K4A2" class="form-control"   required autofocus>
                                        <label for="K4A2">Kriteria 4</label>                    
                                </div>
                                <div class="form-label-group">
                                        <input type="text" id="K5A2" name="K5A2" class="form-control"   required autofocus>
                                        <label for="K5A2">Kriteria 5</label>                    
                                    </div>
                        </div>

                        {{-- Alternatif 3 --}}

                        <div class="form-label-group">
                                <H3 class="login-heading mb-4">Alternatif 3</H3>
                                     <div class="form-label-group">
                                        <input type="text" id="K1A3" name="K1A3" class="form-control"   required autofocus>
                                        <label for="K1A3">Kriteria 1</label>                    
                                     </div>
                                    <div class="form-label-group">
                                         <input type="text" id="K2A3" name="K2A3" class="form-control"   required autofocus>
                                         <label for="K2A3">Kriteria 2</label>                    
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="K3A3" name="K3A3" class="form-control"   required autofocus>
                                        <label for="K3A3">Kriteria 3</label>                    
                                    </div>
                                    <div class="form-label-group">
                                            <input type="text" id="K4A3" name="K4A3" class="form-control"   required autofocus>
                                            <label for="K4A3">Kriteria 4</label>                    
                                    </div>
                                    <div class="form-label-group">
                                            <input type="text" id="K5A3" name="K5A3" class="form-control"   required autofocus>
                                            <label for="K5A3">Kriteria 5</label>                    
                                        </div>
                            </div>
                        {{-- <input type="text" name="nama_ikan[]">
                        <input type="text" name="nama_ikan[]">
                        <input type="text" name="nama_ikan[]"> --}}
    
                        <button type="submit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">SUBMIT</button>
                        <a href="{{route('logout')}}" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Logout</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
