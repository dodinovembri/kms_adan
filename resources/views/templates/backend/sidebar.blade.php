        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="{{ url('admin') }}" class="logo">
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
                        <a href="{{ url('dashboard') }}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="shopping-cart" class="align-self-center menu-icon"></i><span>Transactions</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/order/index') }}"><i class="ti-control-record"></i>Orders</a></li>
                        </ul>
                    </li> 
    
                    <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Setting</li>

                    <li>
                        <a href="javascript: void(0);"><i data-feather="book" class="align-self-center menu-icon"></i><span>Master</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/index') }}"><i class="ti-control-record"></i>User Account</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/payment_method/index') }}"><i class="ti-control-record"></i>Payment Method</a></li>
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript: void(0);"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Product</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/product/index') }}"><i class="ti-control-record"></i>Product</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/product_category/index') }}"><i class="ti-control-record"></i>Product Category</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/product_best/index') }}"><i class="ti-control-record"></i>Product Best</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/product_deal/index') }}"><i class="ti-control-record"></i>Product Deal</a></li>   
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/product_home/index') }}"><i class="ti-control-record"></i>Product Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/product_trend/index') }}"><i class="ti-control-record"></i>Product Trend</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/product_banner/index') }}"><i class="ti-control-record"></i>Product Banner</a></li>                            
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript: void(0);"><i data-feather="file-plus" class="align-self-center menu-icon"></i><span>Frontend</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/languange/index') }}"><i class="ti-control-record"></i>Languange</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/currency/index') }}"><i class="ti-control-record"></i>Currency</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/social_media/index') }}"><i class="ti-control-record"></i>Social Media</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/shop_information/index') }}"><i class="ti-control-record"></i>Shop Information</a></li>   
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/advantage/index') }}"><i class="ti-control-record"></i>Advantage</a></li>                         
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/contact_us/index') }}"><i class="ti-control-record"></i>Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/partner/index') }}"><i class="ti-control-record"></i>Partner</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/blog/index') }}"><i class="ti-control-record"></i>Blog</a></li>
                        </ul>
                    </li>            
                </ul>
            </div>
        </div>
        <!-- end left-sidenav-->
        
