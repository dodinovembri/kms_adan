        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="{{ url('home') }}" class="logo">
                    <span>
                        <img src="{{ asset('backend/default/assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{ asset('backend/default/assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{ asset('backend/default/assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="{{ url('home') }}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="shopping-cart" class="align-self-center menu-icon"></i><span>Transactions</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/knowledge_post/index') }}"><i class="ti-control-record"></i>Knowledge Post</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/operational_vehicle/index') }}"><i class="ti-control-record"></i>Operational Vehicle</a></li>
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript: void(0);"><i data-feather="book" class="align-self-center menu-icon"></i><span>Master</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/category/index') }}"><i class="ti-control-record"></i>Category</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/meassure/index') }}"><i class="ti-control-record"></i>Meassure</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/driver_type/index') }}"><i class="ti-control-record"></i>Driver Type</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/fuel_type/index') }}"><i class="ti-control-record"></i>Fuel Type</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/vehicle_type/index') }}"><i class="ti-control-record"></i>Vehicle Type</a></li>  
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript: void(0);"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Setting</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/user/index') }}"><i class="ti-control-record"></i>User Account</a></li>
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript: void(0);"><i data-feather="file-plus" class="align-self-center menu-icon"></i><span>Frontend</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/social_media/index') }}"><i class="ti-control-record"></i>Social Media</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/languange/index') }}"><i class="ti-control-record"></i>Languange</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/currency/index') }}"><i class="ti-control-record"></i>Currency</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/shop_information/index') }}"><i class="ti-control-record"></i>Shop Information</a></li>   
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/advantage/index') }}"><i class="ti-control-record"></i>Advantage</a></li>                         
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/contact_us/index') }}"><i class="ti-control-record"></i>Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/partner/index') }}"><i class="ti-control-record"></i>Partner</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('backend/blog/index') }}"><i class="ti-control-record"></i>Blog</a></li>
                        </ul>
                    </li>            
                </ul>
            </div>
        </div>
        <!-- end left-sidenav-->
        
