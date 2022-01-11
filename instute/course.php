<section id="Course" class="bg-light py-5">
<div class="container-fluid">
<div class="container">


	<div class="row g-0">
		<div class="text-center">
			<img src="site_image/icon/black.png" class="mb-2" alt="g_image" width="50">
			<h3>OUR COURSES</h3>						
		</div>
	</div>

	<div class="row mt-5 mb-5">
		<div class="col d-flex justify-content-center button-group filter-button-group">
			<button type="button" data-filter="*"  class="btn bg-white mx-1 text-dark shadow-lg">All</button>
			<?php foreach($all_course as $key => $value) { ?>
<button type="button" data-filter=".<?php echo substr(str_replace(' ', '_', $key),'0','-5'); ?>"  class="btn bg-white mx-1 text-dark shadow-lg"><?php echo $key; ?></button>
			<?php } ?>
		</div>
	</div>

	<div class="row justify-content-between" id ="product-list">

<!--  -->
<?php foreach($all_course as $key => $value) { ?>

 <?php foreach($value as $k1 =>$v1) { ?>

		<div class="col-md-3 <?php echo substr(str_replace(' ', '_', $key),'0','-5'); ?>">
			<div class="product-item">
				<div class="product-img">
					<div class="card mb-3" style="max-width: 400px;">
						<div class="row g-0">
							<div class="col-md-4">
								<img src="site_image/icon/course.png" class="img-fluid" alt="...">
							</div>
							<div class="col-md-8">
								<div class="card-body p-0">
									<h6 class="text-capitalize"><?php echo $k1; ?> </h6>
									<p class="card-text">
										<small>
										Total Semester : <?php echo count($v1['sem']); ?><br>
										Duration: <?php echo $v1['data']['Duration']; ?><br>
										Eligibility: <?php echo $v1['data']['Eligibility']; ?>
										</small>
										</p>
									<a href="full_details.php?category=<?=$key?>&subcate=<?=$k1?>" class="btn btn-blue btn-sm rounded-pill float-end" >VIEW</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
<?php } }?>
<!--  -->


	</div>

</div>
</div>
</section>