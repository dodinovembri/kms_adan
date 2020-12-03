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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @include('templates.backend.flashmessage')
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card">                               
                                        <div class="card-body">                                                     
                                            <div class="row">
                                                <div class="col">
                                                    <div class="media">
                                                        <img src="{{ asset('img/vehicle_detail/dimension.png') }}" alt="user" class="rounded-circle thumb-lg align-self-center">
                                                        <div class="media-body ml-3 align-self-center">
                                                            <h5 class="mt-0 mb-1">Dimension</h5> 
                                                            <p class="mb-0 text-muted"></p>
                                                        </div>
                                                    </div><!--end media--> 
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{ url('backend/vehicle_dimension/index') }}" class="mr-1 contact-icon"><i class="fas fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->                                                                     
                                    </div><!--end card-->
                                </div><!--end col-->  
                                <div class="col-lg-3">
                                    <div class="card">                               
                                        <div class="card-body">                                                     
                                            <div class="row">
                                                <div class="col">
                                                    <div class="media">
                                                        <img src="{{ asset('img/vehicle_detail/engine.jpg') }}" alt="user" class="rounded-circle thumb-lg align-self-center">
                                                        <div class="media-body ml-3 align-self-center">
                                                            <h5 class="mt-0 mb-1">Engine</h5> 
                                                            <p class="mb-0 text-muted"></p>
                                                        </div>
                                                    </div><!--end media--> 
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{ url('backend/vehicle_engine/index') }}" class="mr-1 contact-icon"><i class="fas fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->                                                                     
                                    </div><!--end card-->
                                </div><!--end col-->                                                                                            
                                <div class="col-lg-3">
                                    <div class="card">                               
                                        <div class="card-body">                                                     
                                            <div class="row">
                                                <div class="col">
                                                    <div class="media">
                                                        <img src="{{ asset('img/vehicle_detail/performance.png') }}" alt="user" class="rounded-circle thumb-lg align-self-center">
                                                        <div class="media-body ml-3 align-self-center">
                                                            <h5 class="mt-0 mb-1">Performance</h5> 
                                                            <p class="mb-0 text-muted"></p>
                                                        </div>
                                                    </div><!--end media--> 
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{ url('backend/vehicle_performance/index') }}" class="mr-1 contact-icon"><i class="fas fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->                                                                     
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-lg-3">
                                    <div class="card">                               
                                        <div class="card-body">                                                     
                                            <div class="row">
                                                <div class="col">
                                                    <div class="media">
                                                        <img src="{{ asset('img/vehicle_detail/suspention.png') }}" alt="user" class="rounded-circle thumb-lg align-self-center">
                                                        <div class="media-body ml-3 align-self-center">
                                                            <h5 class="mt-0 mb-1">Suspention</h5> 
                                                            <p class="mb-0 text-muted"></p>
                                                        </div>
                                                    </div><!--end media--> 
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{ url('backend/vehicle_suspention/index') }}" class="mr-1 contact-icon"><i class="fas fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->                                                                     
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-lg-3">
                                    <div class="card">                               
                                        <div class="card-body">                                                     
                                            <div class="row">
                                                <div class="col">
                                                    <div class="media">
                                                        <img src="{{ asset('img/vehicle_detail/velg.jpg') }}" alt="user" class="rounded-circle thumb-lg align-self-center">
                                                        <div class="media-body ml-3 align-self-center">
                                                            <h5 class="mt-0 mb-1">Velg & Tire</h5> 
                                                            <p class="mb-0 text-muted"></p>
                                                        </div>
                                                    </div><!--end media--> 
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{ url('backend/vehicle_velg_tire/index') }}" class="mr-1 contact-icon"><i class="fas fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->                                                                     
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-lg-3">
                                    <div class="card">                               
                                        <div class="card-body">                                                     
                                            <div class="row">
                                                <div class="col">
                                                    <div class="media">
                                                        <img src="{{ asset('img/vehicle_detail/active_safety.jpg') }}" alt="user" class="rounded-circle thumb-lg align-self-center">
                                                        <div class="media-body ml-3 align-self-center">
                                                            <h5 class="mt-0 mb-1">Active Safety</h5> 
                                                            <p class="mb-0 text-muted"></p>
                                                        </div>
                                                    </div><!--end media--> 
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{ url('backend/vehicle_active_safety/index') }}" class="mr-1 contact-icon"><i class="fas fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->                                                                     
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-lg-3">
                                    <div class="card">                               
                                        <div class="card-body">                                                     
                                            <div class="row">
                                                <div class="col">
                                                    <div class="media">
                                                        <img src="{{ asset('img/vehicle_detail/passive_safety.jpg') }}" alt="user" class="rounded-circle thumb-lg align-self-center">
                                                        <div class="media-body ml-3 align-self-center">
                                                            <h5 class="mt-0 mb-1">Passive Safety</h5> 
                                                            <p class="mb-0 text-muted"></p>
                                                        </div>
                                                    </div><!--end media--> 
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{ url('backend/vehicle_passive_safety/index') }}" class="mr-1 contact-icon"><i class="fas fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->                                                                     
                                    </div><!--end card-->
                                </div><!--end col-->   
                                <div class="col-lg-3">
                                    <div class="card">                               
                                        <div class="card-body">                                                     
                                            <div class="row">
                                                <div class="col">
                                                    <div class="media">
                                                        <img src="{{ asset('img/vehicle_detail/security.jpg') }}" alt="user" class="rounded-circle thumb-lg align-self-center">
                                                        <div class="media-body ml-3 align-self-center">
                                                            <h5 class="mt-0 mb-1">Security</h5> 
                                                            <p class="mb-0 text-muted"></p>
                                                        </div>
                                                    </div><!--end media--> 
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{ url('backend/vehicle_security/index') }}" class="mr-1 contact-icon"><i class="fas fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->                                                                     
                                    </div><!--end card-->
                                </div><!--end col-->  
                                <div class="col-lg-3">
                                    <div class="card">                               
                                        <div class="card-body">                                                     
                                            <div class="row">
                                                <div class="col">
                                                    <div class="media">
                                                        <img src="{{ asset('img/vehicle_detail/comfort.jpeg') }}" alt="user" class="rounded-circle thumb-lg align-self-center">
                                                        <div class="media-body ml-3 align-self-center">
                                                            <h5 class="mt-0 mb-1">Comfort</h5> 
                                                            <p class="mb-0 text-muted"></p>
                                                        </div>
                                                    </div><!--end media--> 
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{ url('backend/vehicle_comfort/index') }}" class="mr-1 contact-icon"><i class="fas fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->                                                                     
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-lg-3">
                                    <div class="card">                               
                                        <div class="card-body">                                                     
                                            <div class="row">
                                                <div class="col">
                                                    <div class="media">
                                                        <img src="{{ asset('img/vehicle_detail/exterior.jpg') }}" alt="user" class="rounded-circle thumb-lg align-self-center">
                                                        <div class="media-body ml-3 align-self-center">
                                                            <h5 class="mt-0 mb-1">Exterior</h5> 
                                                            <p class="mb-0 text-muted"></p>
                                                        </div>
                                                    </div><!--end media--> 
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{ url('backend/vehicle_exterior/index') }}" class="mr-1 contact-icon"><i class="fas fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->                                                                     
                                    </div><!--end card-->
                                </div><!--end col-->                                                                                           
                                <div class="col-lg-3">
                                    <div class="card">                               
                                        <div class="card-body">                                                     
                                            <div class="row">
                                                <div class="col">
                                                    <div class="media">
                                                        <img src="{{ asset('img/vehicle_detail/communication.jpg') }}" alt="user" class="rounded-circle thumb-lg align-self-center">
                                                        <div class="media-body ml-3 align-self-center">
                                                            <h5 class="mt-0 mb-1">Communication</h5> 
                                                            <p class="mb-0 text-muted"></p>
                                                        </div>
                                                    </div><!--end media--> 
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{ url('backend/vehicle_communication/index') }}" class="mr-1 contact-icon"><i class="fas fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->                                                                     
                                    </div><!--end card-->
                                </div><!--end col-->                                                                   
                            </div><!--end row-->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- container -->

        @include('templates.backend.footer')
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

@endsection