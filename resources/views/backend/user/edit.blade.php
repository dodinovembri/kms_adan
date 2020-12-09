@extends('layouts.backend')

@section('content')        

@include('templates.backend.sidebar')

<div class="page-wrapper">
    @include('templates.backend.header')

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            @include('templates.backend.breadcrumb')
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
							<form method="POST" action="{{ url($update, $id) }}" enctype="multipart/form-data">
								@csrf <br>
						        <div class="form-group row">
						            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Username</label>
						            <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" name="name" value="{{ $user->name }}" required="">
						        </div>
						        <div class="form-group row">
						            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Email</label>
						            <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="email" name="email" value="{{ $user->email }}" disabled="">
						        </div>		
						        <div class="form-group row">
						            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Password</label>
						            <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="password" name="password" required="">
						        </div>	
						        <div class="form-group row">
						            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Confirm Password</label>
						            <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="password" name="password_confirm" required="">
						        </div>						        					        				        								
								<div class="form-group row editor-label">
								    <label class="col-xl-3 col-md-4"><span></span></label>
								    <div class="col-xl-8 col-md-7 editor-space">
								        <button type="submit" class="btn btn-primary">Save</button>
								        <a href="{{ url($index) }}"><button type="button" class="btn btn-secondary">Cancel</button></a>
								    </div>
								</div>                                
							</form>
						</div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div> <!-- end row -->

        </div><!-- container -->

        @include('templates.backend.footer')
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

@endsection