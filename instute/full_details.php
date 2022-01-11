<!DOCTYPE html>
<html lang="en">
<head>
<?php include('./layout/header.php'); ?>
<?php

	$course_cat 	=	$_GET['category'];
	$subject_name  =	$_GET['subcate'];

?>

</head>
<body>
<?php include('./layout/top_nav.php'); ?>

<section>
	<div class="container p-5">
		<div class="row">

			<div class="col-md-7">
				
				<!--  -->
					<?php foreach ($all_course[$course_cat] as $name => $info){
					if($name == $subject_name) {
					?>
					
					<h3 class="mb-4"><?php echo $name; ?></h3>
						
						<!-- fetch sem part 1 -->
						<?php foreach ($info['sem'] as $sem_name => $suubject_array){ ?>

							<div class="btn-blue ps-2"> <h4 class="text-white text-uppercase"><?php echo $sem_name; ?></h4></div>
							
							<?php foreach ($suubject_array as $no => $s_name){ ?>

								<p><?php echo $s_name; ?></p>
									
							<?php }	?>

						<?php }	?>

						<!-- fetch cour description part -->

						<h6 class="bg-dark text-white p-3">Duration : - <?php echo $info['data']['Duration'];?></h6>
						<h6 class="bg-dark text-white p-3">Eligibility : - <?php echo $info['data']['Eligibility'];?></h6>


					<?php } }	?>
				<!--  -->
			</div>	
			<div class="col-md-5 text-center bg-light shadow-sm">

				<div class="p-2 bg-dark text-white text-uppercase"> <?php echo $course_cat; ?></div>

				<div class="p-3 mt-3 text-start">
				<?php foreach ($all_course[$course_cat] as $name => $info)	{ ?>

				<a href="full_details.php?category=<?=$course_cat?>&subcate=<?=$name?>" class="text-decoration-none text-capitalize" ><?php echo $name ?></a>


				<?php } ?>
				</div>
			</div>		
		</div>		
	</div>
</section>

<?php include('footer.php');?>
</body>
</html>
<?php include('./layout/js_footer.php'); ?>
