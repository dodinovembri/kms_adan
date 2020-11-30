@extends('layouts.fe')

@section('content')  
<div role="main" class="main">

	<div class="container">

		<div class="row">
			<div class="col">
				<h4 class="mb-2 mt-2" style="text-align: center">Order Tracking</h4>

				<h4 class="mb-1 text-4 font-weight-bold">Order ID : RT00-{{ $order->id }}</h4>
				<h4 class="mb-1 text-4 font-weight-bold">Total Price : {{ $order->total_price }}</h4>

				<div class="process process-vertical py-4">
					<?php $no = 0; $delay = 0; foreach ($history as $key => $value) { $no++; $delay = +200; ?>
						<div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="{{ $delay }}">
							<div class="process-step-circle">
								<strong class="process-step-circle-content">{{ $no }}</strong>
							</div>
							<div class="process-step-content">
								<h4 class="mb-1 text-4 font-weight-bold">{{ $value->status_name }}</h4>
								<p class="mb-0">{{ $value->status_ket }}</p>
							</div>
						</div>													
					<?php } ?>
				</div>

			</div>
		</div>		

	</div>
</div>
@endsection		