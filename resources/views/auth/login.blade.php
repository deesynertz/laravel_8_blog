@extends('layouts.app')

@section('content')

  <!-- Page Content -->
  <div class="d-flex align-items-center">
    <div class="w-100">
      <!-- Sign In Section -->
      <div class="bg-white">
        <div class="content content-full">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4 py-4">
              <!-- Header -->
              <div class="text-center">
                <p class="mb-1">
                  <img src="{{ asset('media/favicons/deesynertz.png') }}" class="" alt="logo">
                </p>
                <h2 class="h6 font-w400 text-muted mb-1">
                    {{ __('A perfect match for your project') }}
                </h2>
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="py-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus id="login-username" placeholder="Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>


                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" name="password" id="login-password" placeholder="Password">
                    
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="d-md-flex align-items-md-center justify-content-md-between">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember">
                        <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
                      </div>
                      <div class="py-2">
                        <a class="font-size-sm font-w500" href="op_auth_reminder2.html">Forgot Password?</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row justify-content-center mb-0">
                  <div class="col-12">
                    <button type="submit" class="btn btn-block btn-primary">
                      <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                    </button>
                  </div>
                </div>
              </form>
              <div class="row justify-content-center mt-2 pt-2">
                <p class="font-size-h6 font-w500">You don't have account? <a  href="/register">create
                  account</a></p>
              </div>
              <!-- END Sign In Form -->
            </div>
          </div>
        </div>
      </div>
      <!-- END Sign In Section -->
  
      <!-- Footer -->
      <div class="font-size-sm text-center text-muted py-2">
        <strong>OneUI 4.8</strong> &copy; <span data-toggle="year-copy"></span>
      </div>
      <!-- END Footer -->
    </div>
  </div>
  <!-- END Page Content -->

@endsection