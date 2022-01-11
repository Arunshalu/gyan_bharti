<footer class="py-5 bg-dark text-white">

	<div class="container-fluid">
		<div class="container">

			<div class="row g-5">

				<div class="col-md-4 text-center">
					<a href="index.php">
						<img src="ins/logo1.png" class="img-fluid w-50" alt="logo">
					</a>

					<h5 class="text-warning mt-3">ABOUT US</h5>
					<p style="text-align: justify;">GBIMTC clears the way to early accomplishment in life through its distance courses. These courses comprise of ideas.
					</p>

				</div>

				<div class="col">
					<h5 class="text-warning mb-3">OUR MENU</h5>
					<ul class="list-group list-unstyled">
						<li class="mb-3"><a href="index.php" class="text-reset text-decoration-none">HOME</a></li>
						<li class="mb-3"><a href="file_about.php" class="text-reset text-decoration-none">ABOUT US</a></li>
						<li class="mb-3"><a href="contact_us.php" class="text-reset text-decoration-none">CONTACT US</a></li>
					
						<li class="mb-3"><a href="" class="text-reset text-decoration-none">FAQ</a></li>

					</ul>
				</div>

				<div class="col">
					<h5 class="text-warning mb-3">OUR COURSE</h5>
					<ul class="list-group list-unstyled">
				<?php foreach($all_course as $key => $value){ ?>
						<li class="mb-3 text-uppercase"><a href="#top" class="text-reset text-decoration-none"><?=$key?></a></li>
				<?php } ?>
						
					</ul>
				</div>

				<div class="col">
					<p style="text-align: justify;">It is an exciting endeavor by GBIMTC to uncover the best of International Technologies and Management standards, rehearses, and administrative/group </p>
					<div class="d-grid">
						<a href="contact_us.php"  class="btn bg-yellow rounded-0" type="button">CONTACT NOW</a>
					</div>
				</div>
			</div>

			<div class="row g-2">
				<div class="col-md-4">
					<div class="clearfix text-warning">
						<a class="text-reset text-decoration-none float-start">
							<i class="ms-2 fa fa-phone-square-alt"></i>
						+91 8384074487</a>
						<a class="text-reset text-decoration-none float-end">
							<i class="ms-3 fas fa-envelope"></i> admission@gbimtc.org.in</a>
						</div>
					</div>

					<div class="col-md-2 offset-md-6 text-end">
						<a href="#top" class="btn btn-blue btn-sm text-reset text-decoration-none">
							<i class="fad fa-angle-double-up"></i></a>
						</div>
					</div>
					<hr class="bg-yellow">

					<div class="row g-0">
						<div class="col-md-12 text-center">
							<div class="clearfix text-warning">


								<div class="float-center">
									<a href="" class="text-reset text-decoration-none">
										<i class="fab fa-facebook-square fs-3 pe-2"></i>
									</a>
									<a href="" class="text-reset text-decoration-none">
									<i class="fab fa-youtube-square fs-3 pe-2"></i>
									</a>
									<a href="" class="text-reset text-decoration-none">
											<i class="fab fa-instagram  fs-3 pe-2"></i>
									</a>
									<!-- <a href="" class="text-reset text-decoration-none">
										<i class="fab fa-instagram"></i>
									</a> -->
									<!-- <p><small>@ 2021 Power by</small></p> -->
								</div>

							</div>
						</div>					
					</div>

				</div>
			</div>
		</div></footer>