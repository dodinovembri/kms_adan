    <div class="body">
        <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
            <div class="header-body border-color-primary border-bottom-0 box-shadow-none" data-sticky-header-style="{'minResolution': 0}" data-sticky-header-style-active="{'background-color': '#f7f7f7'}" data-sticky-header-style-deactive="{'background-color': '#FFF'}">
                <div class="header-top header-top-borders">
                    <div class="container h-100">
                        <div class="header-row h-100">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item nav-item-borders py-2">
                                                <span class="pl-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> Jl. Lintas Sumatra No.Km.35</span>
                                            </li>
                                            <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                                                <a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> 0711-581156</a>
                                            </li>
                                            <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                                                <a href="mailto:info@ratuphotography.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> info@ratuphotography.com</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills">
                                            <?php if (!empty(auth()->user()->id)) {
                                                if ((auth()->user()->role == 1)) { ?>
                                                 <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                                    <a class="nav-link pl-0" href="{{ route('admin') }}"><i class="fas fa-angle-right"></i> Admin</a>
                                                </li>
                                            <?php } ?>                                            
                                        <?php } ?>                                             
                                        <?php if (!empty(auth()->user()->id)) { ?>
                                            <li class="nav-item dropdown nav-item-left-border d-none d-sm-block">
                                                <a class="nav-link pl-0" href="{{ route('fe.profile') }}"><i class="fas fa-angle-right"></i> Profile</a>
                                            </li>
                                        <?php } ?>                                            
                                        <li class="nav-item dropdown nav-item-left-border d-none d-sm-block">
                                            <a class="nav-link" href="{{ route('fe.contact_us') }}"><i class="fas fa-angle-right"></i> Contact Us</a>
                                        </li>
                                        <?php if (empty(auth()->user()->id)) { ?>
                                            <li class="nav-item dropdown nav-item-left-border d-none d-sm-block">
                                                <a href="{{ route('login') }}"><i class="far fa-user p-relative" style="top: 0;"></i> Login</a>
                                            </li>                                                                            
                                        <?php }else{ ?>
                                            <li class="nav-item dropdown nav-item-left-border d-none d-sm-block">
                                                <form method="POST" action="{{route('logout')}}">@csrf <button type="submit" class="form-control">Logout</button></form>
                                            </li>                                                                            
                                        <?php } ?>                                            
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-container container">
                <div class="header-row py-2">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="{{ route('index') }}">
                                    <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="84" src="{{ asset('img/logo.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-extra-info d-flex align-items-center mr-3">
                                <li class="d-none d-sm-inline-flex">
                                    <div class="header-extra-info-text">
                                        <label>SEND US AN EMAIL</label>
                                        <strong><a href="mailto:mail@example.com">info@ratuphotography.com</a></strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-extra-info-text">
                                        <label>CALL US NOW</label>
                                        <strong><a href="tel:8001234567">0711-581156</a></strong>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-nav-features">
                                <div class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex ml-2" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'top': '78px'}" data-sticky-header-style-deactive="{'top': '0'}">
                                    <a href="#" class="header-nav-features-toggle">
                                        <img src="{{ asset('img/icon-cart-big.svg') }}" height="34" alt="" class="header-nav-top-icon-img">
                                        <span class="cart-info">
                                            <?php  
                                            if (empty(auth()->user()->id)) {
                                                $cart = 0;
                                            }else{
                                                $cart = App\Model\CartModel::select('cart.*', 'cart_detail.id_product')->join('cart_detail', 'cart.id', '=', 'cart_detail.id_cart')->where('user_id', '=', auth()->user()->id)->count();                  
                                                $cart_data = App\Model\CartModel::select('cart.*', 'cart_detail.id_product', 'cart_detail.qty as qty', 'product.sku as sku', 'product.name as product_name', 'product.image as image', 'product.price as product_price')->join('cart_detail', 'cart.id', '=', 'cart_detail.id_cart')->join('product', 'cart_detail.id_product', '=', 'product.id')->where('user_id', '=', auth()->user()->id)->get();
                                                $total = App\Model\CartModel::where('user_id', '=', auth()->user()->id)->first();
                                            }
                                            ?>                                                
                                            <span class="cart-qty">{{ $cart }}</span>
                                        </span>
                                    </a>
                                    <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                        <?php if (empty(auth()->user()->id)) {
                                                # code...
                                        }else{ ?>
                                            <ol class="mini-products-list">
                                                <?php foreach ($cart_data as $key => $value) { ?>
                                                    <li class="item">
                                                        <a href="#" title="Camera X1000" class="product-image"><img src="{{ asset('img') }}/{{ $value->image }}" alt="Camera X1000"></a>
                                                        <div class="product-details">
                                                            <p class="product-name">
                                                                {{ $value->product_name }} X {{ $value->qty }}
                                                            </p>
                                                            <p class="qty-price">
                                                               1X <span class="price">{{ number_format($value->product_price, 2,',','.') }}</span>
                                                           </p>                                                 
                                                       </div>
                                                   </li>                                                    
                                               <?php } ?>
                                           </ol>
                                       <?php } ?>                                            
                                       <?php if (empty($total)) { ?>
                                        <div class="totals">
                                            <span class="label" style="position: center">You are not shop yet</span>
                                        </div>                                                
                                    <?php } else{ ?>
                                        <div class="totals">
                                            <span class="label">Total :</span>
                                            <span class="price-total"><span class="price">{{ isset($total->total_price) ? 'Rp '. number_format($total->total_price, 2,',','.')  : 0 }}</span></span>
                                        </div>                                                
                                        <div class="actions">
                                            <a class="btn btn-dark" href="{{ route('fe.cart.show') }}">View Cart</a>
                                            <!-- <a class="btn btn-primary" href="{{ route('fe.order.store') }}">Checkout</a> -->
                                        </div>                                                
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-nav-bar bg-color-light-scale-1 mb-3 px-3 px-lg-0">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row justify-content-end">
                            <div class="header-nav header-nav-links justify-content-start" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '150px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
                                <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-effect-3 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li>
                                                <a class="dropdown-item dropdown-toggle" href="{{ route('index') }}">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="dropdown dropdown-mega">
                                                <a class="dropdown-item dropdown-toggle" href="{{ route('index') }}">
                                                    Products
                                                </a>
                                            </li>
                                            <?php if (empty(auth()->user()->email)) { ?>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="{{ route('login') }}">
                                                        My Orders
                                                    </a>
                                                </li>
                                            <?php }else{ ?>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="{{ route('fe.history.index') }}">
                                                        My Orders
                                                    </a>
                                                </li>                                                        
                                            <?php } ?>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>