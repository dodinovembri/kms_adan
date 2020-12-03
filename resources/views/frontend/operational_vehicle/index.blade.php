@extends('layouts.frontend')

@section('content') 

			<div role="main" class="main shop py-4">

				<div class="container">

					<div class="masonry-loader masonry-loader-showing">
						<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
							<?php if (count($operational_vehicle) < 1) { ?>
								<div class="col-12 col-sm-6 col-lg-3 product">
									<p>There is no operational vehicle.</p>
								</div>
							<?php } ?>
							<?php foreach ($operational_vehicle as $key => $value) { ?>
								<div class="col-12 col-sm-6 col-lg-3 product">
									<span class="product-thumb-info border-0">
										<a href="{{ url('frontend/operational_vehicle/show', $value->id) }}" class="add-to-cart-product bg-color-primary">
											<span class="text-uppercase text-1">{{ $value->vehicle_code }}</span>
										</a>
										<a href="{{ url('frontend/operational_vehicle/show', $value->id) }}">
											<span class="product-thumb-info-image">
												<img alt="" class="img-fluid" src="{{ asset(Storage::url('img/vehicle')) }}/{{ $value->vehicle_image }}" style="height: 140px;">
											</span>
										</a>
										<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
											<a href="{{ url('frontend/operational_vehicle/show', $value->id) }}" >
												<center><h4 class="text-4 text-primary">{{ $value->vehicle_code }} - {{ $value->vehicle_name }}</h4>
												</center>
											</a>
										</span>
									</span>
								</div>
							<?php } ?>
						</div>
					</div>

				</div>

			</div>

@endsection