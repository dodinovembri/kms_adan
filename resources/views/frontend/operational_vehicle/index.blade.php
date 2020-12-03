@extends('layouts.frontend')

@section('content') 

			<div role="main" class="main shop py-4">

				<div class="container">

					<div class="masonry-loader masonry-loader-showing">
						<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
							<?php foreach ($operational_vehicle as $key => $value) { ?>
								<div class="col-12 col-sm-6 col-lg-3 product">
									<span class="product-thumb-info border-0">
										<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
											<span class="text-uppercase text-1">{{ $value->vehicle_code }}</span>
										</a>
										<a href="{{ url('frontend/operational_vehicle/show', $value->id) }}">
											<span class="product-thumb-info-image">
												<img alt="" class="img-fluid" src="{{ asset(Storage::url('img/vehicle')) }}/{{ $value->vehicle_image }}" style="height: 120px">
											</span>
										</a>
										<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
											<a href="shop-product-sidebar-left.html" >
												<center><h4 class="text-4 text-primary">{{ $value->vehicle_name }}</h4>
												<span class="price">
													<ins><span class="amount text-dark font-weight-semibold">$299</span></ins>
												</span></center>
											</a>
										</span>
									</span>
								</div>
							<?php } ?>
						</div>
<!-- 						<div class="row">
							<div class="col">
								<ul class="pagination float-right">
									<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
								</ul>
							</div>
						</div> -->
					</div>

				</div>

			</div>

@endsection