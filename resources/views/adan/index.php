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
						<li class="nav-item"><a class="nav-link" href="search_result.php">Oli Mesin</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Ban Mobil</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Kap Mobil</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Setir, Tuas Persneling</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Kursi/ Jok</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Aki</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Radiator</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Rem</a></li>
					</ul>
				</aside>
			</div>
			<div class="col-lg-9">

				<div class="container py-2">

					<div class="row">
						<div class="col pb-4">

							<div class="row">
								<div class="col">
									<h4>Posts With Media</h4>
									<hr class="solid mt-3">
									<div class="row">
										<?php for ($i=0; $i < 9; $i++) { ?>
											<div class="col-lg-4 mb-4">
												<article class="post post-large pb-5">
													<div class="post-image">
														<a href="blog-post.html">
															<img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
														</a>
													</div>
												
													<div class="post-date">
														<span class="day">15</span>
														<span class="month">Jan</span>
													</div>
												
													<div class="post-content">
												
														<h4><a href="detail.php" class="text-decoration-none">This is a stardard post with preview image</a></h4>
														<p class="mb-1" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam nisi ultricies nisi luctus, sed fermentum.</p>
														<a href="blog-post.html" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
												
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