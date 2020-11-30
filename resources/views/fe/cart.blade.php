@extends('layouts.fe')

@section('content')    
    <div role="main" class="main shop py-4">

        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <aside class="sidebar">
                        <form action="page-search-results.html" method="get">
                            <div class="input-group mb-3 pb-1">
                                <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
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
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-9">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10}">
                                <div>
                                    <img alt="" height="300" class="img-fluid" src="{{ asset('img') }}//{{ $product->image }}">
                                </div>                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="summary entry-summary">
                                <h1 class="mb-0 font-weight-bold text-7">{{ $product->name }}</h1>
                                <div class="pb-0 clearfix">
                                    <div title="Rated 3 out of 5" class="float-left">
                                        <input type="text" class="d-none" value="{{ count($review) > 0 ? $total_rating[0]->total_rating / count($review) : '0' }}" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                                    </div>
                                    <div class="review-num">
                                        <span class="count" itemprop="ratingCount">{{ count($review) }}</span> reviews
                                    </div>
                                </div>
                                <p class="price">
                                    <span class="amount">Rp. {{ number_format($product->price, 2, ',', '.') }}</span>
                                </p>

                                <p class="mb-5">{{ $product->description }}. </p>

                                <form enctype="multipart/form-data" method="post" class="cart" action="{{ route('fe.cart.store') }}">
                                    @csrf
                                    <input type="hidden" name="id_product" value="{{ $product->id }}">
                                    <div class="quantity quantity-lg">                                        
                                        <input type="button" class="minus" value="-">
                                        <input type="text" class="input-text qty text" title="Qty" value="1" name="qty" min="1" step="1">
                                        <input type="button" class="plus" value="+">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-modern text-uppercase">Add to cart</button>
                                </form>

                                <div class="product-meta">
                                    <span class="posted-in"></span>
                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="tabs tabs-product mb-2">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item active"><a class="nav-link py-3 px-4" href="#productReviews" data-toggle="tab">Reviews ( {{ count($review) }} )</a></li>
                                </ul>
                                <div class="tab-content p-0">
                                    <div class="tab-pane p-4 active" id="productReviews">
                                        <ul class="comments">
                                            <?php foreach ($review as $key => $value) { ?>
                                                 <li>
                                                    <div class="comment">
                                                        <div class="img-thumbnail border-0 p-0 d-none d-md-block">
                                                            <img class="avatar" alt="" src="img/avatars/avatar-2.jpg">
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-arrow"></div>
                                                            <span class="comment-by">
                                                                <strong>{{ $value->name }}</strong>
                                                                <span class="float-right">
                                                                    <div class="pb-0 clearfix">
                                                                        <div title="Rated 3 out of 5" class="float-left">
                                                                            <input type="text" class="d-none" value="{{ $value->rating }}" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </span>
                                                            <p>{{ $value->review }}</p>
                                                        </div>
                                                    </div>
                                                </li>   
                                            <?php } ?>                                            
                                        </ul>
                                        <hr class="solid my-5">
                                        <h4>Add a review</h4>
                                        <div class="row">
                                            <div class="col">
                            
                                                <form action="{{ route('fe.review.store', $product->id) }}" id="submitReview" method="post">
                                                    @csrf                                                    
                                                    <div class="form-row">
                                                        <div class="form-group col pb-2">
                                                            <label class="required font-weight-bold text-dark">Rating</label>
                                                            <input type="text" class="rating-loading" name="rating" title="" data-plugin-star-rating data-plugin-options="{'color': 'primary', 'size':'xs'}">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col">
                                                            <label class="required font-weight-bold text-dark">Review</label>
                                                            <textarea maxlength="5000" data-msg-required="Please enter your review." rows="8" class="form-control" name="review" id="review" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col mb-0">
                                                            <input type="submit" value="Post Review" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="solid my-5">

                    <h4 class="mb-3">Related <strong>Products</strong></h4>
                    <div class="masonry-loader masonry-loader-showing">
                        <div class="row products product-thumb-info-list mt-3" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                            <?php foreach ($product_list as $key => $value) { ?>
                                <div class="col-12 col-sm-6 col-lg-3 product">
                                    <span class="product-thumb-info border-0">
                                        <a href="" class="add-to-cart-product bg-color-primary">
                                            <span class="text-uppercase text-1">Add to Cart</span>
                                        </a>
                                        <a href="">
                                            <span class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{ asset('img') }}/{{ $value->image }}">
                                            </span>
                                        </a>
                                        <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                            <a href="shop-product-sidebar-left.html">
                                                <h4 class="text-4 text-primary">{{ $value->name }}</h4>
                                                <span class="price">
                                                    <ins><span class="amount text-dark font-weight-semibold">Rp. {{ number_format($product->price, 2, ',', '.') }}</span></ins>
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