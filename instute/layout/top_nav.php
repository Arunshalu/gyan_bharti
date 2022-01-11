
<style type="text/css">
	#admission_tab
	{
		background-color: rgba(0, 0, 0, 0.5);
		color: white;
		padding: 5px;
		z-index: 6000;
		position: fixed;
		top: 141px;
		right: 0px;
		width: 300px;
		
	}
</style>

<div id="admission_tab">

	<div class="clearfix p-1 bg-dark">
		<div class="float-start" style="padding-top: 5px;">ADMISSION 2021</div>
		<div class="float-end">
			<button type="button" class="btn btn-danger btn-sm rounded-0" data-bs-toggle="collapse" data-bs-target="#demo">X</button>
		</div>		
	</div>


  
  <div id="demo" class="collapse show mt-2">
	<small class="">
		<div class="spinner-grow spinner-grow-sm"></div> Enquiry For Result : 8384 074 487<br>
		<div class="spinner-border spinner-border-sm"></div> For Admission : 8384 074 487 <br>
		For Verification : 8384 074 487<br>
		<div class="spinner-border spinner-border-sm"></div> Contact us : 8384 074 487 <br>
		Email : admission@gbimtc.org.in<br>
		<div class="spinner-border spinner-border-sm"></div> Fee Structure<br>
		Apply Online

	</small>
  </div>
</div>






<section class="btn-blue" id="top">
	<div class="container-fluid">
		
		<div class="row g-0">

			<div class="col-md-4 text-white text-left">
				<div class="p-2 btn-orange">
					<i class="ms-2 fa fa-phone-square-alt"></i> +91 8384 074 487 
					<i class="ms-3 fas fa-envelope"></i> admission@gbimtc.org.in
				</div>

			</div>
			<div class="col-md-2 offset-md-6 text-white text-center" >
				<div class="p-2 btn-orange">
					<a href="" class="text-reset text-decoration-none">Login </a> |
					<a href="" class="text-reset text-decoration-none">Registration </a>
				</div>
			</div>

		</div>
		
	</div>
</section>
<!-- -->

<section>
	<div class="container-fluid bg-dark ">
		
		<nav class="navbar navbar-expand-sm navbar-dark">
			<div class="container-fluid">
				<a class="navbar-brand pt-0 pb-0 " href="index.php">
					<img src="ins/nav_logo.png" width="220" class="d-inline-block align-text-top"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home </a>
							</li>

							
							<?php foreach($all_course as $key => $value): ?>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
										<?=$key?></a>

										<div class="dropdown-menu  "aria-labelledby="navbarScrollingDropdown" style="z-index: 5000;">
											<div class="container ms-2">
												<div class="row " >
													<div class="col-md-2" id="navimg" >

													</div>
													<div class="col-md-10" >
														<h3 class="text-uppercase" ><?php echo  $key ?> Course</h3>
														<hr>
														<table class="table table-sm" >

															<tbody>
																<?php 
																foreach($value as $k1 =>$v1):
																	?>
																	<tr>
																		<td class="m-0 p-0 border-0">
																			<a href="full_details.php?category=<?=$key?>&subcate=<?=$k1?>" class=" text-reset text-decoration-none text-capitalize" ><?php echo $k1 ?></a>
																		</td>
																		<td></td>
																	</tr>
																<?php endforeach; ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</li>
								<?php endforeach; ?>

									<li class="nav-item">
										<a class="nav-link" href="file_about.php">About Us </a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="contact_us.php">Contact Us </a>
									</li>

							</ul>
						</div>
					</div>
				</nav>
			</div>
			
		</section>





		<nav class="bg-light sticky-top p-0">
			<div class="container-fluid">
				
				<div class="row g-0">

					<div class="col-md-2 text-center bg-dark text-orange" style="padding-top: 2px;">
						<a href="" class="text-reset text-decoration-none">
							<i class="fab fa-facebook-square fs-3 pe-1"></i>
						</a>
						<a href="" class="text-reset text-decoration-none">
							<i class="fab fa-youtube-square fs-3 pe-1"></i>
						</a>
						<a href="" class="text-reset text-decoration-none">
							<i class="fab fa-instagram fs-3 pe-1"></i>				
						</a>
					</div>


					<div class="col-md-1 text-center bg-yellow text-dark" style="padding-top: 2px;">
						<small> NEWS </small>
					</div>

					<div class="col-md-8 text-end bg-light">
						<marquee width="100%" direction="left" style="padding-top: 2px;">
							INSTITUTE OF MANAGEMENT & TECHNOLOGY COUNCILINSTITUTE OF MANAGEMENT & TECHNOLOGY COUNCIL
						</marquee>
					</div>

					<div class="col-md-1 text-end">
						<!-- <div class="dropdown dropstart">
							<button type="button" id="open" class="btn btn-d-blue text-white btn-sm rounded-0 shadow dropdown-toggle" data-bs-toggle="dropdown">CLOSE</button>

							<ul id="dd-my" class="dropdown-menu rounded-0 shadow z-index-3  p-2 mt-4">
								<li>
									<a class="dropdown-item open" href="#">Enquiry For Result : +91 9667754135</a>
								</li>
								<li><a class="dropdown-item" href="#">For Admission : +91 9891030303
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">For Verification : +91 9266585858
								</a>
							</li>
						</ul>

					</div> -->
				</div>

			</div>

			
		</nav>





