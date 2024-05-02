@extends('layouts.app')

@section('content')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('{{ asset('assets/images/backgrounds/bg.jpg') }}');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="shadow-primary border-radius-lg py-3 pe-1 text-center" style="background-color: #13354a">
                  <a class="text-nowrap logo-img d-inline-block">
                    <img src="../assets/images/logos/dark-logo.png" width="190" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
              <div class="card-body">
                <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="input-group input-group-outline my-3">
                    {{-- <label class="form-label">Email</label> --}}
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    {{-- <label class="form-label">Password</label> --}}
                    <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn w-100 my-4 mb-2 text-white" style="background-color: #5098a3">Masuk</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Khazna</a>

              </div>
            </div>

          </div>
        </div>
      </footer>
    </div>
  </main>
@endsection
