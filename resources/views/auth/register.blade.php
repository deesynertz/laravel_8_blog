@extends('layouts.app')

@section('content')
<div class="hero-static d-flex align-items-center">
    <div class="w-100">
        <!-- Sign Up Section -->
        <div class="bg-white">
            <div class="content content-full">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                        <!-- Header -->
                        <div class="text-center">
                            <p class="mb-1">
                              <img src="{{ asset('media/favicons/deesynertz.png') }}" class="" alt="logo">
                            </p>
                            <h2 class="h6 font-w400 text-muted mb-3">
                                {{ __('Get your access today in one easy step') }}
                            </h2>
                        </div>
                        <!-- END Header -->
                        
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="py-2">
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control form-control-lg form-control-alt @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Name">
    
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" autocomplete="email" id="signup-email" placeholder="Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg form-control-alt @error('password_confirmation') is-invalid @enderror" 
                                    name="password_confirmation" placeholder="Confirm Password">

                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="d-md-flex align-items-md-center justify-content-md-between">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                            <label class="custom-control-label font-w400" for="signup-terms">I agree to Terms &amp; Conditions</label>
                                        </div>
                                        <div class="py-2">
                                            <a class="font-size-sm font-w500" href="javascript:void(0)" data-toggle="modal" data-target="#one-signup-terms">View Terms</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center mb-0">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-block btn-success">
                                        <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                    </button>
                                </div>
                            </div>
                        </form>
  
                        <div class="row justify-content-center mt-2 pt-2">
                          <p class="font-size-h6 font-w500">already have account? <a href="/login">login</a></p>
                        </div>
                        <!-- END Sign Up Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Sign Up Section -->
  
        <!-- Footer -->
        <div class="font-size-sm text-center text-muted py-3">
            <strong>deesynertz v1.0</strong> &copy; <span data-toggle="year-copy"></span>
        </div>
        <!-- END Footer -->
    </div>
  </div>
<!-- END Page Content -->

@include('pages.auth.terms')

@endsection