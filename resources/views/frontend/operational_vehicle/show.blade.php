@extends('layouts.frontend')

@section('content') 

<div role="main" class="main shop py-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-4">
						<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10}">
							<div>
								<img alt="" style="height: 300px" class="img-fluid" src="{{ asset(Storage::url('img/vehicle')) }}/{{ $operational_vehicle->vehicle_image }}">
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="summary entry-summary">
							<h1 class="mb-0 font-weight-bold text-7">{{ $operational_vehicle->vehicle_name }}</h1>
							<div class="pb-0 clearfix">
								<div class="review-num">
									<span class="count" itemprop="ratingCount"></span>
								</div>
							</div>
							<p class="price">
								<span class="amount"></span>
							</p>
							<p class="mb-5">{{ $operational_vehicle->vehicle_description }}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<hr class="solid my-5">
						<h4>Vertical</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="tabs tabs-vertical tabs-left">
							<ul class="nav nav-tabs">
								<li class="nav-item active">
									<a class="nav-link" href="#vehicle_dimension" data-toggle="tab">Dimension</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#engine" data-toggle="tab">Engine</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#performance" data-toggle="tab">Performance</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#suspention" data-toggle="tab">Suspention</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#velg_tire" data-toggle="tab">Velg & Tire</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#active_safety" data-toggle="tab">Active Safety</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#passive_safety" data-toggle="tab">Passive Safety</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#security" data-toggle="tab">Security</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#comfort" data-toggle="tab">Comfort</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#exterior" data-toggle="tab">Exterior</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#communication" data-toggle="tab">Communication</a>
								</li>
							</ul>
							<div class="tab-content">
								<div id="vehicle_dimension" class="tab-pane active">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-2 control-label text-lg-right pt-2">High</label>
											<div class="col-lg-10">
												<input type="text" name="" value="{{ $vehicle_dimension->dimension_high }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 control-label text-lg-right pt-2">Long</label>
											<div class="col-lg-10">
												<input type="text" name="" value="{{ $vehicle_dimension->dimension_long }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 control-label text-lg-right pt-2">Width</label>
											<div class="col-lg-10">
												<input type="text" name="" value="{{ $vehicle_dimension->dimension_width }}" class="form-control" >
											</div>
										</div>									
									</div>
								</div>
								<div id="vehicle_engine" class="tab-pane">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-2 control-label text-lg-right pt-2">High</label>
											<div class="col-lg-10">
												<input type="text" name="" value="{{ $vehicle_dimension->dimension_high }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 control-label text-lg-right pt-2">Long</label>
											<div class="col-lg-10">
												<input type="text" name="" value="{{ $vehicle_dimension->dimension_long }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 control-label text-lg-right pt-2">Width</label>
											<div class="col-lg-10">
												<input type="text" name="" value="{{ $vehicle_dimension->dimension_width }}" class="form-control" >
											</div>
										</div>									
									</div>
								</div>
								<div id="performance" class="tab-pane">
									<p>performance</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
								</div>
								<div id="suspention" class="tab-pane">
									<p>suspention</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
								</div>
								<div id="velg_tire" class="tab-pane">
									<p>velg_tire</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
								</div>
								<div id="active_safety" class="tab-pane">
									<p>active_safety</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
								</div>
								<div id="passive_safety" class="tab-pane">
									<p>passive_safety</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
								</div>
								<div id="security" class="tab-pane">
									<p>security</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
								</div>
								<div id="comfort" class="tab-pane">
									<p>comfort</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
								</div>
								<div id="exterior" class="tab-pane">
									<p>exterior</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
								</div>
								<div id="communication" class="tab-pane">
									<p>communication</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>

@endsection