@extends('layouts.fe')

@section('content')    
<div role="main" class="main shop py-4">

    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <aside class="sidebar">
                    <form action="{{ route('search') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3 pb-1">
                            <input class="form-control text-1" placeholder="Search..." value="{{ isset($search) ? $search : '' }}" name="product_name" id="s" type="text">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
                            </span>
                        </div>
                    </form>
                    <h5 class="font-weight-bold pt-3">Categories</h5>
                    <ul class="nav nav-list flex-column">
                        <?php foreach ($category as $key => $value) { ?>
                            <li class="nav-item"><a class="nav-link" href="{{ route('product_list', $value->id) }}">{{ $value->category_name }}</a></li>    
                        <?php } ?>                                
                    </ul><br>
                    <?php if (!empty(auth()->user()->id)) { ?>
                        <h5 class="font-weight-bold pt-3">Services Score</h5>
                        <ul class="nav nav-list flex-column">
                            <li class="nav-item"><a class="nav-link" href="{{ route('fe.serviceq.index') }}">Give Scores</a></li>    
                        </ul><br>
                    <?php } ?>
                </aside>
            </div>
            <div class="col-lg-9">

                <div class="masonry-loader masonry-loader-showing">
                    <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                        <?php if (count($product) == 0) { ?>                                
                            <div class="col-lg-4">No Product Found, Try another search</div>                            
                        <?php } ?>
                        <?php foreach ($product as $key => $value) { ?>
                            <div class="col-sm-6 col-lg-4 product">
                                <span class="product-thumb-info border-0">
                                    <a href="{{ route('cart', $value->id ) }}" class="add-to-cart-product bg-color-primary">
                                        <span class="text-uppercase text-1">Add to Cart</span>
                                    </a>
                                    <a href="{{ route('cart', $value->id ) }}">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{ asset('img') }}/{{ $value->image }}">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary">{{ $value->name }}</h4>
                                            <span class="price">
                                                <ins><span class="amount text-dark font-weight-semibold">Rp. {{ number_format($value->price, 2, ',', '.') }}</span></ins>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </div>                                    
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection