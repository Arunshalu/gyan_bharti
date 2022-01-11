<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('./layout/header.php'); ?>
</head>
<body>

<?php include('./layout/top_nav.php'); ?>

<section class="contact-bg" id="Contact">
		<div class="container">
			<div class="row py-5   d-flex align-items-center justify-content-centes">
				<div class="text-end" >
					<h3 class="text-uppercase text-white m-0" >SUBMIT YOUR QUERYS</span></h3>
					<small class="text-white" >one click connect with us</small>
				</div>
				<div class="col-md-5  text-center" >
					<img src="ins/logo1.png" class="i" width="250">
				</div>
				<div class="col-md-7" >
					<div class="text-end" >

					</div>

					<form>
						<h1></h1>
						<div class="row ">
							<div class="col-md-6 mt-2">
								<input type="test" class="form-control rounded-0" name="" placeholder="Enter Name" id="" required="">
							</div>
							<div class="col-md-6 mt-2">
								<input type="text" class="form-control rounded-0" placeholder="Enter Email" name="" id="" required="">
							</div>
						</div>
						<div class="row ">
							<div class="col-md-6 mt-2">
								<input type="test" class="form-control rounded-0" name="" placeholder="Enter Contact No" id="" required="">
							</div>
							<div class="col-md-6 mt-2">
								<input type="text" class="form-control rounded-0" placeholder="Enter Subject" name="" id="" required="">
							</div>
						</div>
						<div class="row ">
							<div class="col-md-12 mt-2">
								<textarea  class="form-control rounded-0"  rows="8" placeholder="Write Here Message ..." ></textarea>
							</div>

						</div>

						<div class="d-grid">
							<button class="btn btn-blue rounded-0 text-white" type="button">SEND</button>
						</div>


					</form>
				</div>
			</div>
		</div>
	</section>

<?php include('footer.php');?>

</body>
</html>
<?php include('./layout/js_footer.php'); ?>