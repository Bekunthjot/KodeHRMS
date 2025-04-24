@extends('layouts.frontend.NoHeaderLayout')

@section('content')

<div class="main-wrapper">
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
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
            <div class="card mb-0">
              <div class="card-body">
                <a href="{{-- route('/') --}}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <!-- Logo icon -->
				  <b><img src="{{ URL('/images/logo-icon.png') }}" alt="homepage" class="dark-logo" /></b>
                  <!--End Logo icon -->
                  <!-- Logo text -->
                  <span>
                    <img src="{{ URL('/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                  </span>
                </a>
                <p class="text-center font-14">Your Social Campaigns</p>
                <form method="post" id="registerform">
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
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputtext1" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                  </div>
                  <input type="submit" class="btn btn-info w-100 py-8 mb-4 rounded-2 registerformsubmit" value="Sign Up" />
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="mb-0">Already have an Account?</p>
                    <a class="text-info ms-2 font-14" href="{{ route('login') }}">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	
	$(".registerformsubmit").click(function(e){
		
		e.preventDefault();
		
		
		alert("how are you");
		
		
	});
	
	

	
	
	
});



</script>

@endsection