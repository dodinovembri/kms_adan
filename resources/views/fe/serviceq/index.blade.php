@extends('layouts.fe')

@section('content')  

			<div role="main" class="main">


				<div class="container py-2">

					<div class="row">
						<div class="col-lg-12 order-1 order-lg-2">
							
							<div class="overflow-hidden mb-1">
								<h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Quisionaire</strong> System</h2>
							</div>
							<div class="overflow-hidden mb-4 pb-3">
								<p class="mb-0"></p>
							</div>

							<form role="form" class="needs-validation" method="POST" action="{{ route('fe.serviceq.store') }}">
								@csrf
								<div class="form-group row">
									<label class="col-lg-6 font-weight-bold text-dark col-form-label form-control-label text-2 required">Questions</label>
									<div class="col-lg-3">
										<b>Score Yang Diharapkan</b>
									</div>
									<div class="col-lg-3">
										<b>Score Actual</b>
									</div>
								</div>
								<hr>
								<?php $no =0; foreach ($questionaire as $key => $value) { $no++; ?>
									<div class="form-group row">
								        <label class="col-lg-6 font-weight-bold text-dark col-form-label form-control-label text-2 required">{{ $no }}. {{ $value->questions }}</label>
								        <input type="hidden" name="questionnaire_id[]" value="{{ $value->id }}">
								        <div class="col-lg-3">								        	
								            <input type="radio" value="0" name="score_hope[{{$key}}]"> Sangat Tidak Memuaskan <br>	
								            <input type="radio" value="1" name="score_hope[{{$key}}]"> Tidak Memuaskan <br>	
								            <input type="radio" value="2" name="score_hope[{{$key}}]"> Kurang Memuaskan <br>	
								            <input type="radio" value="3" name="score_hope[{{$key}}]"> Cukup Memuaskan <br>	
								            <input type="radio" value="4" name="score_hope[{{$key}}]"> Memuaskan <br>	
								            <input type="radio" value="5" name="score_hope[{{$key}}]"> Sangat Memuaskan <br>	
								        </div>
								        <div class="col-lg-3">								        	
								            <input type="radio" value="0" name="score_actual[{{$key}}]"> Sangat Tidak Memuaskan <br>	
								            <input type="radio" value="1" name="score_actual[{{$key}}]"> Tidak Memuaskan <br>	
								            <input type="radio" value="2" name="score_actual[{{$key}}]"> Kurang Memuaskan <br>	
								            <input type="radio" value="3" name="score_actual[{{$key}}]"> Cukup Memuaskan <br>	
								            <input type="radio" value="4" name="score_actual[{{$key}}]"> Memuaskan <br>	
								            <input type="radio" value="5" name="score_actual[{{$key}}]"> Sangat Memuaskan <br>	
								        </div>								        
								    </div>	
								<?php } ?>							    			    							   
							    <div class="form-group row">
									<div class="form-group col-lg-9">
										
									</div>
									<div class="form-group col-lg-3">
										<input type="submit" value="Save" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
									</div>
							    </div>
							</form>

						</div>
					</div>

				</div>
			</div>

@endsection