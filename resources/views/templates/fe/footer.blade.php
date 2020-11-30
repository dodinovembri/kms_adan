   <footer id="footer">
            <div class="container mt-4 pt-2 pb-5 ">
                <div class="row py-8">
                    <div class="col-md-3 text-center text-md-left">
                        <h5 class="text-4 text-color-light mb-3 mt-4 mt-lg-0">CONTACT INFO</h5>
                        <p class="text-3 mb-0 text-color-light opacity-7">ADDRESS</p>
                        <p class="text-3 mb-3"> Jl. Lintas Sumatra No.Km.35, Indralaya Raya, Kec. Indralaya, Kabupaten Ogan Ilir, Sumatera Selatan 30862</p>
                        <p class="text-3 mb-0 text-color-light opacity-7">PHONE</p>
                        <p class="text-3 mb-3"> 0711-581156 <br> 0811-7440-740</p>
                        <p class="text-3 mb-0 text-color-light opacity-7">EMAIL</p>
                        <p class="text-3 mb-0"><a href="mailto:info@porto.com" class="">info@ratuphotography.com</a></p>
                    </div>
                    <div class="col-md-9 text-center text-md-left">
                        <div class="row">
                            <div class="col-md-7 col-lg-5 mb-0">
                                <h5 class="text-4 text-color-light mb-3 mt-4 mt-lg-0">MY ACCOUNT</h5>
                                <div class="row">
                                    <div class="col-md-5">
                                        <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">About us</a></p>
                                        <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">Contact Us</a></p>
                                        <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">My account</a></p>
                                    </div>
                                    <div class="col-md-5">
                                        <?php if (empty(auth()->user()->email)) { ?>
                                            <p class="mb-1"><a href="{{ route('login') }}" class="text-3 link-hover-style-1">Order History</a></p>                                            
                                        <?php }else{ ?>
                                            <p class="mb-1"><a href="{{ route('fe.history.index') }}" class="text-3 link-hover-style-1">Order History</a></p>
                                        <?php } ?>
                                        <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">Advanced search</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <h5 class="text-4 text-color-light mb-3 mt-4 mt-lg-0">MAIN FEATURES</h5>
                                <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">Super Fast Theme</a></p>
                                <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">SEO Optmized</a></p>
                                <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">RTL Support</a></p>
                            </div>
                            <div class="col-lg-3">
                                <p class="mb-1 mt-lg-3 pt-lg-3"><a href="" class="text-3">Powerful Admin Panel</a></p>
                                <p class="mb-1"><a href="#" class="text-3 link-hover-style-1">Mobile & Retina Optimized</a></p>
                            </div>
                        </div>
                        <div class="row footer-top-light-border mt-4 pt-4">
                            <div class="col-lg-5 text-center text-md-left">
                                <p class="text-2 mt-1">© Copyright 2020. All Rights Reserved.</p>
                            </div>
                            <div class="col-lg-3 text-center text-md-left">
                                <p class="text-3 mb-0 font-weight-semibold text-color-light opacity-8">BUSINESS HOURS</p>
                                <p class="text-3 mb-0">Mon - Sun /9:00AM -8:00PM</p>
                            </div>
                            <div class="col-lg-4 text-center text-md-left">
                                <img src="{{ asset('img/payment-icon.png') }}" alt="Payment icons" class="img-fluid mt-4 mt-lg-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>