@extends('layouts.auth')

@section('auth-content')

<!-- Page Content -->
<div class="hero-static d-flex align-items-center">
  <div class="w-100">
      <!-- Sign Up Section -->
      <div class="bg-white">
          <div class="content content-full">
              <div class="row justify-content-center">
                  <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                      <!-- Header -->
                      <div class="text-center">
                          <p class="mb-2">
                            {{-- <i class="fa fa-2x fa-circle-notch text-primary"></i> --}}
                            <img src="{{ asset('media/favicons/deesynertz.png') }}" class="" alt="logo">
                          </p>
                          <h1 class="h4  mb-2">
                              Create Account
                          </h1>
                          {{-- <h2 class="h6 font-w400 text-muted mb-3">
                              Get your access today in one easy step
                          </h2> --}}
                      </div>
                      <!-- END Header -->
                      
                      <form class="js-validation-signup" action="be_pages_auth_all.html" method="POST">
                          <div class="py-2">
                              {{-- <div class="form-group">
                                  <input type="text" class="form-control form-control-lg form-control-alt" id="signup-username" name="signup-username" placeholder="Username">
                              </div> --}}
                              <div class="form-group">
                                  <input type="email" class="form-control form-control-lg form-control-alt" id="signup-email" name="signup-email" placeholder="Email">
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password" name="signup-password" placeholder="Password">
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password-confirm" name="signup-password-confirm" placeholder="Confirm Password">
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
                        <p class="font-size-h6 font-w500">already have account? <a href="/auth/login">login</a></p>
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