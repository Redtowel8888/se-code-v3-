<?php include 'header2.php' ?>

	<section class="pt-s5 pb-s5 overlay-wrap" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="assets/images/bg/bg-1.jpg">
		<div class="container overlay-container pt-s2 pb-s5">
			<div class="pb-s5">
				<div class="hero-section-container-tl w-100 h-100 d-flex justify-content-center align-items-center">
					<div class="text-center mb-s2">
						<div class="mt-s3 text-white">
							<h6>Find best airport parking deals</h6>
						</div>
						<div class="mt-s1 mb-s5 text-white">
							<h1 class="animated-headline letters type mb-s2 text-white text-size-20--xs text-size-30--sm">
								<span class="headline-wrapper text-cherry text-capitalize">
									<b class="is-visible">Compare Multiple providers</b>
									<b>Lowest prices</b>
									<b>Secure Booking Process</b>
									<b>A brand you can trust</b>
								</span>
							</h1>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /CONTAINER -->
		<div class="overlay bg-v9-dark"></div>
	</section> <!-- /SECTION -->

	<section class="bg-v5-light pt-s3 pb-s3">
		
		<div class="container pt-s4">
			<div class="bg-white p-20">
				<div class="row" >
					<div class="col-lg-8 col-md-12">

						<div class="row" v-if="record.booking_edit == 0">
							<form method="Post" action="book_server.php" enctype="multipart/form-data" style="margin-left: 350px">
							<div class="col-md-12">
								<h4>Your Information</h4>
								<div class="row">
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-500">Email Address<span class="text-danger">*</span></label>
										<input type="email" name="email" class="form-control bg-light text-size-12 pt-8 pb-8 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark" value="<?php echo $row['email']; ?>" readonly>
									</div>
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-500">Enter Phone Number<span class="text-danger">*</span></label>
										<input type="text" name="phone" class="form-control bg-light text-size-12 pt-8 pb-8 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark">
									</div>
									<?php if (isset($_GET['id'])) {
										?>
										<input type="hidden" name="p_id" value="<?php echo $_GET['id']; ?>">
										<?php
									} ?>
										<input type="hidden" name="u_id" value="<?php echo $row['id']; ?>">
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<div class="row">
											
											<div class="form-group col-lg-8 col-md-8">
												<label class="text-size-12 text-bold-500">Full Name<span class="text-danger">*</span></label>
												<input type="text" name="name" class="form-control bg-light text-size-12 pt-8 pb-8 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark" value="<?php echo $row['name'] ?>" readonly>
											</div>
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-500"> Post Code<span class="text-danger">*</span></label>
										<input type="text" name="code" class="form-control bg-light text-size-12 pt-8 pb-8 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<?php if (isset($_GET['id'])) {
											$id = $_GET['id'];
											$tec = "SELECT * from `places`where `p_id`='$id'";
											$tech= mysqli_query($db,$tec);
											$laa = mysqli_fetch_assoc($tech);
										?>
										<label class="text-size-12 text-bold-500">Parking Price<span class="text-danger">*</span></label>
										<input type="text" name="parking_price" value="<?php echo $laa['price'] ?>" class="form-control bg-light text-size-12 pt-8 pb-8 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark" readonly>
									<?php }?>
									</div>
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-500">For total hours<span class="text-danger">*</span></label>
										<input type="Number" name="hours" class="form-control bg-light text-size-12 pt-8 pb-8 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark" required="required">
									</div>
								</div>
								
								<div class="row" v-if="record.know_travel_detail == 1">
									
								</div>
								<hr>
								<h4>Vehicle Details</h4>
								
								<div class="row" v-if="record.know_vehical_detail == 1">
									<div class="form-group col-md-6">
										<?php if (isset($_GET['id'])) {
											$id = $_GET['id'];
											$tec = "SELECT * from `places`where `p_id`='$id'";
											$tech= mysqli_query($db,$tec);
											$laa = mysqli_fetch_assoc($tech);
										?>
										<label class="text-size-12 text-bold-500">Parking Place<span class="text-danger">*</span></label>
										<input type="text" name="place" value="<?php echo $laa['areas']; ?>" class="form-control bg-light text-size-12 pt-8 pb-8 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark">
									<?php } ?>
									</div>
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-500">Model<span class="text-danger">*</span></label>
										<input type="text" name="odel" class="form-control bg-light text-size-12 pt-8 pb-8 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark">
									</div>
								</div>
								<div class="row" v-if="record.know_vehical_detail == 1">
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-500">Colour<span class="text-danger">*</span></label>
										<input type="text" name="color" class="form-control bg-light text-size-12 pt-8 pb-8 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark">
									</div>
									<div class="form-group col-md-6">
										<label class="text-size-12 text-bold-500">Registration<span class="text-danger">*</span></label>
										<input type="text" name="register" class="form-control bg-light text-size-12 pt-8 pb-8 pl-20 pr-20 text-bold-600 rounded-0 bc-v1-dark">
									</div>
								</div>
								<hr>
								<div class="row mt-10">
									<div class="col-md-12">
										<input type="checkbox" value="1"> <span>On making payment you agree to Parking Ltd.</span>
									</div>
								</div>
								<input type="submit" name="book" value="Confirm Booking" class="btn bg-cherry text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-8 pb-8 pl-20 pr-20 box-shadow-v1-s3--hover mt-15">
							</div>
							</form>
						</div>

					</div>
					
				</div>
			</div>
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<?php include 'footer.php'; ?>