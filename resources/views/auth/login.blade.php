@extends('layouts.frontend.NoHeaderLayout')

@section('content')


    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <!-- Logo icon --><b>
                    <img src="{{ URL('/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                  </b>
                  <!--End Logo icon -->
                </a>
                <p class="text-center font-14">Your Social Campaigns</p>
                <form method="POST" action="{{ route('login') }}">
				@csrf
				@if (Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @if (Session::has('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check mb-0">
                      <input class="form-check-input info" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label text-dark mb-0" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-info font-14" href="{{ route('forgot_password') }}">Forgot Password ?</a>
                  </div>
                  <input type="submit" class="btn btn-info w-100 py-8 mb-4 font-14" value="Sign In">
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="mb-0">New to MaterialPro?</p>
                    <a class="text-info ms-2 font-14" href="{{ route('register') }}">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 

@endsection