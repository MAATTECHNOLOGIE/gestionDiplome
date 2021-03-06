@extends('layouts.app')
@section('content')
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                  </div>
                  <form method="POST" action="{{ route('password.email') }}"  class="user">
                        @csrf
                    <div class="form-group">
                      
                       <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" id="exampleInputEmail" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address...">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value=" Reset Password">
                     
                    </a>
                  </form>
                  <hr>
              <div class="text-center">
                @if(Route::has('password.request'))
                <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                @endif
              </div>
              <div class="text-center">
                @if(Route::has('login'))
                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                @endif
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  @endsection