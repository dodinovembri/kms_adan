@extends('layouts.frontend')

@section('content') 

<div role="main" class="main shop py-4">

	<div class="container">

		<div class="row">
			<div class="col-lg-3">
				<aside class="sidebar">
					<form action="{{ url('frontend/knowledge_post/search') }}" method="POST">
						@csrf
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
							<li class="nav-item"><a class="nav-link" href="{{ url('frontend/knowledge_post/searchbyid', $value->id) }}">{{ $value->category_name }}</a></li>
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
									<h4>Knowledge Post</h4>
									<hr class="solid mt-3">
									<div class="row">
										<?php foreach ($knowledge_post as $key => $value) { ?>
											<div class="col-lg-4 mb-4">
												<article class="post post-large pb-5">
													<div class="post-image">
														<a href="{{ url('frontend/knowledge_post/show', $value->id) }}">
															<img style="height: 150pt" src="{{ asset(Storage::url('img/knowledge_post')) }}/{{ $value->knowledge_post_image }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
														</a>
													</div>

													<div class="post-date">
														<span class="day">{{ date('d', intval($value->knowledge_post_date) )}}</span>
														<span class="month">{{ $value->knowledge_post_date }}</span>
													</div>

													<div class="post-content">

														<h4><a href="{{ url('frontend/knowledge_post/show', $value->id) }}" class="text-decoration-none">{{ $value->knowledge_post_short_description }}</a></h4>
														<p class="mb-1" style="text-align: justify;">{{ substr($value->knowledge_post_full_description, 0,100) }}</p>
														<a href="{{ url('frontend/knowledge_post/show', $value->id) }}" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>

													</div>
												</article>
											</div>											
										<?php } ?>
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