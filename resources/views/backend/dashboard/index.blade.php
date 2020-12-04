@extends('layouts.backend')

@section('content')        

        @include('templates.backend.sidebar')
        <div class="page-wrapper">
            <!-- Top Bar Start -->
            @include('templates.backend.header')
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Dashboard</h4>
                                    </div><!--end col--> 
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-dark mb-0 font-weight-semibold">Knowledge Post</p>
                                                    <h3 class="m-0">{{ $knowledge_post_active_count }} Active</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success">{{ $knowledge_post_count }}</span> Total Knowledge Post</p>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col">
                                                    <p class="text-dark mb-0 font-weight-semibold">Operational Vehicle</p>
                                                    <h3 class="m-0">{{ $operational_vehicle_active_count }} Active</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success">{{ $operational_vehicle_count }}</span> Operational Vehicle Active   </p>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col">
                                                    <p class="text-dark mb-0 font-weight-semibold">Subscriber</p>
                                                    <h3 class="m-0">{{ $subscriber_count }} Active</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-danger"></span> Total of Subscriber</p>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col--> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">  
                                                    <p class="text-dark mb-0 font-weight-semibold">User Account</p>
                                                    <h3 class="m-0">{{ $user_count }} Active</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success"></span> User Account Active</p>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col-->                               
                            </div><!--end row--> 
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->

                @include('templates.backend.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
@endsection