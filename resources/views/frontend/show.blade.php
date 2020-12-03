@extends('layouts.frontend')

@section('content') 

<div role="main" class="main shop py-4">

	<div class="container">

		<div class="row">
			<div class="col-lg-3">
				<aside class="sidebar">
					<form action="search_result.php" method="get">
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
							<li class="nav-item"><a class="nav-link" href="{{ url('home', $value->id) }}">{{ $value->category_name }}</a></li>
						<?php } ?>
					</ul>
				</aside>
			</div>
			<div class="col-lg-9">

				<div class="container py-2">

					<div class="row">
						<div class="col pb-4">

							<div class="row">
								<div class="col">
									<h4 class="mb-2">{{ $knowledge_post->knowledge_post_title }}</h4>
									<p style="text-align: justify;">{{ $knowledge_post->knowledge_post_full_description }}</p>
									<div class="process process-vertical py-4">
										<?php $number = 1; foreach ($knowledge_post_detail as $key => $value) { ?>
											<div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
												<div class="process-step-circle">
													<strong class="process-step-circle-content">{{ $number }}</strong>
												</div>
												<div class="process-step-content">
													<h4 class="mb-1 text-4 font-weight-bold">{{ $value->step_title }}</h4>
													<?php 
													$kata = $value->step_description;
													$panjang = strlen($kata);
													$bagi = $panjang / 2;
													$hasil1 = substr($kata, 0, $bagi);
													$hasil2 = substr($kata,$bagi); ?>
													<p class="mb-0" style="text-align: justify">{{ $hasil1 }} 
														<img class="float-left" width="150" height="106" src="{{ asset(Storage::url('img/knowledge_post_detail')) }}/{{ $value->step_image }}" alt="" style="margin-right: 10px">{{ $hasil2 }}
													</p>
												</div>
											</div>
											<?php $number++; } ?>
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