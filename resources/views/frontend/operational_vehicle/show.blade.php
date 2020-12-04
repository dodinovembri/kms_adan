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
								<img alt="" style="height: 250px" class="img-fluid" src="{{ asset(Storage::url('img/vehicle')) }}/{{ $operational_vehicle->vehicle_image }}">
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
							<p class="mb-5" style="text-align: justify;">{{ $operational_vehicle->vehicle_description }}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h4>Spesification</h4>
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
									<a class="nav-link" href="#vehicle_engine" data-toggle="tab">Engine</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#vehicle_performance" data-toggle="tab">Performance</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#vehicle_suspention" data-toggle="tab">Suspention</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#vehicle_velg_tire" data-toggle="tab">Velg & Tire</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#vehicle_active_safety" data-toggle="tab">Active Safety</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#vehicle_passive_safety" data-toggle="tab">Passive Safety</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#vehicle_security" data-toggle="tab">Security</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#vehicle_comfort" data-toggle="tab">Comfort</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#vehicle_exterior" data-toggle="tab">Exterior</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#vehicle_communication" data-toggle="tab">Communication</a>
								</li>
							</ul>
							<div class="tab-content">
								<div id="vehicle_dimension" class="tab-pane active">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">High</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_dimension->dimension_high }} - {{ $vehicle_dimension->meassure->meassure_name }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Long</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_dimension->dimension_long }} - {{ $vehicle_dimension->meassure->meassure_name }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Width</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_dimension->dimension_width }} - {{ $vehicle_dimension->meassure->meassure_name }}" class="form-control" >
											</div>
										</div>									
									</div>
								</div>
								<div id="vehicle_engine" class="tab-pane">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Engine Cilinder</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_engine->vehicle_engine_cilinder }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Driver Type</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_engine->driver->driver_type_name }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Engine Configuration</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_engine->engine_configuration }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Fuel Tank Maximum</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_engine->fuel_tank_maxium }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Fuel Type</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_engine->fuel->fuel_type_name }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Total Cilinder</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_engine->total_cilinder }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Transimisi Configuration</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_engine->transmisi_configuration }}" class="form-control" >
											</div>
										</div>									
									</div>
								</div>
								<div id="vehicle_performance" class="tab-pane">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Power</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_performance->vehicle_power }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Torsion</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_performance->vehicle_torsion }}" class="form-control" >
											</div>
										</div>
									</div>
								</div>
								<div id="vehicle_suspention" class="tab-pane">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Front Brake</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_suspention->front_brake }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Front Suspention</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_suspention->front_suspention }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Rear Brake</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_suspention->rear_brake }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Rear Suspention</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_suspention->rear_suspention }}" class="form-control" >
											</div>
										</div>										
									</div>
								</div>
								<div id="vehicle_velg_tire" class="tab-pane">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Tire Size</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_velg_tire->tire_size }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Velg Material</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_velg_tire->velg_material }}" class="form-control" >
											</div>
										</div>
									</div>
								</div>
								<div id="vehicle_active_safety" class="tab-pane">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Anti Lock Braking System</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_active_safety->anti_lock_braking_system == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Brake Assist</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_active_safety->brake_assist == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Electronic Brake Distribution</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_active_safety->electronic_brake_distribution == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Parking Sensor</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_active_safety->parking_sensor == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Rearview Camera</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_active_safety->rearview_camera == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Uphil & Downhill Assist Control</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_active_safety->uphil_downhill_assist_control == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Vehicle Stability Control System</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_active_safety->vehicle_stability_control_system == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>																				
									</div>
								</div>
								<div id="vehicle_passive_safety" class="tab-pane">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Airbag System</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_passive_safety->airbag_system }}" class="form-control" >
											</div>
										</div>
									</div>
								</div>
								<div id="vehicle_security" class="tab-pane">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Airbag System</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_security->engine_immobilizer == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
									</div>
								</div>
								<div id="vehicle_comfort" class="tab-pane">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Air Conditioner</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->air_conditioner }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Steering Position</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->steering_position }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Ambeint Light</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->ambient_light == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Steer Lingkar</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->steer_lingkar == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Engine Start Stop Button</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->engine_start_stop_button == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Front Rear Defogger</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->front_rea_defogger == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Front Power Window</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->front_power_window == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Gear Shift Paddle</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->gear_shift_paddle == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>		
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Headup Display</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->headup_display == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>																		
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Keyless Entry</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->keyless_entry == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Power Outlet</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->power_outlet == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Power Steering</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->power_steering == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Lamp</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->lamp == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Place Chair Capacity</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->place_chair_capacity }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Place Chair Material</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->place_chair_material }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Vanity Minor</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_comfort->vanity_mirror == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
									</div>
								</div>
								<div id="vehicle_exterior" class="tab-pane">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Front Lamp</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_exterior->front_lamp == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Front Lamp Type</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_exterior->front_lamp_type }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Rearview Mirror</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_exterior->rearview_mirror == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Roof Rock & Rail</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_exterior->roof_rock_rail == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Side Step</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_exterior->side_step == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Spoiler</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_exterior->spoiler == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Sunroof</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_exterior->sunroof == 1 ? 'Yes' : 'No' }}" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Rear Lamp Type</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_exterior->rear_lamp_type }}" class="form-control" >
											</div>
										</div>		
									</div>
								</div>
								<div id="vehicle_communication" class="tab-pane">
									<div class="card-body">
										<div class="form-group row">
											<label class="col-lg-4 control-label text-lg-right pt-2">Audio</label>
											<div class="col-lg-8">
												<input type="text" name="" value="{{ $vehicle_communication->audio }}" class="form-control" >
											</div>
										</div>	
									</div>
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