@extends('layouts.auth')

@section('content')
<!-- Log In page -->
<div class="container">
  <div class="row vh-100 d-flex justify-content-center">
    <div class="col-12 align-self-center">
      <div class="row">
        <div class="col-lg-5 mx-auto">
          <div class="card">
            <div class="card-body p-0 auth-header-box">
              <div class="text-center p-3">
                <a href="index.html" class="logo logo-admin">
                  <img src="{{ asset('img/logo3.jpeg') }}" height="50" alt="logo" class="auth-logo">
                </a>
                <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Knowledge Management System</h4>   
                <p class="text-muted  mb-0">Sign in to continue to KMS Bandara.</p>  
              </div>
            </div>
            <div class="card-body p-0">
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">                                        
                  <form class="form-horizontal auth-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-2">
                      <label for="username">Username</label>
                      <div class="input-group">                                                                                         
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="username" placeholder="Enter username">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>                                    
                    </div><!--end form-group--> 
                    
                    <div class="form-group mb-2">
                      <label for="userpassword">Password</label>                                            
                      <div class="input-group">                                  
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="userpassword" placeholder="Enter password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror                          
                      </div>                               
                    </div><!--end form-group--> 
                    
                    <div class="form-group row my-3">
                      <div class="col-sm-6">
                        <div class="custom-control custom-switch switch-success">
                          <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                          <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                        </div>
                      </div><!--end col--> 
                      <div class="col-sm-6 text-right">
                        <a href="#" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                      </div><!--end col--> 
                    </div><!--end form-group--> 
                    
                    <div class="form-group mb-0 row">
                      <div class="col-12">
                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                      </div><!--end col--> 
                    </div> <!--end form-group-->                           
                  </form><!--end form-->
                  <div class="m-3 text-center text-muted">
                    <p class="mb-0"></p>
                  </div>
                </div>
              </div>
            </div><!--end card-body-->
            <div class="card-body bg-light-alt text-center">
              <span class="text-muted d-none d-sm-inline-block">© Copyright 2020. All Rights Reserved.</span>                                            
            </div>
          </div><!--end card-->
        </div><!--end col-->
      </div><!--end row-->
    </div><!--end col-->
  </div><!--end row-->
</div><!--end container-->
<!-- End Log In page -->
@endsection
