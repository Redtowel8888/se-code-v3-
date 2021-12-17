<?php include 'header2.php' ?>

	<section class="pt-s5 pb-s5 overlay-wrap" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="assets/images/bg/bg-1.jpg">
		<div class="container overlay-container pt-s2 pb-s5">
			<div class="pb-s5">
				<div class="hero-section-container-tl w-100 h-100 d-flex justify-content-center align-items-center">
					<div class="text-center mb-s2">
						<div class="mt-s3 text-white">
							<h6>Find best parking deals</h6>
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

					<div class="row" v-if="record.booking_edit == 1">
						<?php 
											$id = $row['id'];
											$tec = "SELECT * from `booking`where `u_id`='$id'";
											$tech= mysqli_query($db,$tec);
											$laa = mysqli_fetch_assoc($tech);
										?>
						<div class="col-md-12">
							<h3 class="text-uppercase text-size-20 text-bold-600 mt-20 mb-12">Your Information</h3>
						</div>
						<div class="col-md-12">
							<div class="d-flex justify-content-between bs-solid bc-light bw-s1 mt-0 bl-0 br-0 pt-10 pb-10">
								<div>Email</div>
								<div><?php echo $laa['email']?></div>
							</div>
							<div class="d-flex justify-content-between bs-solid bc-light bw-s1 mt-0 bl-0 br-0 pt-10 pb-10">
								<div>Name</div>
								<div><?php echo $laa['user_name']?></div>
							</div>
							<div class="d-flex justify-content-between bs-solid bc-light bw-s1 mt-0 bl-0 br-0 pt-10 pb-10">
								<div>Mobile #</div>
								<div><?php echo $laa['phone']?></div>
							</div>
							<div class="d-flex justify-content-between bs-solid bc-light bw-s1 mt-0 bl-0 br-0 pt-10 pb-10">
								<div>Post Code</div>
								<div><?php echo $laa['post']?></div>
							</div>
						</div>
						
						
						<div class="col-md-12">
							<h3 class="text-uppercase text-size-20 text-bold-600 mt-20 mb-12">Vehicle Details</h3>
						</div>
						<div class="col-md-12">
						
							<div v-if="record.know_vehical_detail == 1" class="d-flex justify-content-between bs-solid bc-light bw-s1 mt-0 bl-0 br-0 pt-10 pb-10">
								<div>Parking Place</div>
								<div><?php echo $laa['place']?></div>
							</div>
							<div v-if="record.know_vehical_detail == 1" class="d-flex justify-content-between bs-solid bc-light bw-s1 mt-0 bl-0 br-0 pt-10 pb-10">
								<div>Model</div>
								<div><?php echo $laa['model']?></div>
							</div>
							<div v-if="record.know_vehical_detail == 1" class="d-flex justify-content-between bs-solid bc-light bw-s1 mt-0 bl-0 br-0 pt-10 pb-10">
								<div>Colour</div>
								<div><?php echo $laa['color']?></div>
							</div>
							<div v-if="record.know_vehical_detail == 1" class="d-flex justify-content-between bs-solid bc-light bw-s1 mt-0 bl-0 br-0 pt-10 pb-10">
								<div>Registration</div>
								<div><?php echo $laa['register']?></div>
							</div>
						</div>
					</div>

					<a href="my-bookings.php"class="btn bg-cherry text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-8 pb-8 pl-20 pr-20 box-shadow-v1-s3--hover mt-30">Confirm Booking</a>

				</div>
				<div class="col-lg-4 col-md-12">
					<div data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.modalcontentsticky', 'padding': {'top': 110}}">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="bg-white text-center bs-solid bc-light bw-s1 p-35">
									
									
								</div>
							</div>
						</div>
					</div>
					<div class="bg-white">
						<table class="w-100 text-size-12">
							<tr class="bs-solid bc-light bw-s1 mt-0 bl-0 br-0">
								<td class="p-8">Location</td>
								<td class="p-8 text-right"><?php echo $laa['place']?></td>
							</tr>
							<tr class="bs-solid bc-light bw-s1 mt-0 bl-0 br-0">
								<td class="p-8">Hourly Rate</td>
								<td class="p-8 text-right">$<?php echo $laa['parking_price']?></td>
							</tr>
							<tr class="bs-solid bc-light bw-s1 mt-0 bl-0 br-0">
								<td class="p-8">Hours for booked</td>
								<td class="p-8 text-right"><?php echo $laa['hours']?></td>
							</tr>
							<tr class="bs-solid bc-light bw-s1 mt-0 bl-0 br-0">
								<td class="p-8">Total Amount</td>
								<td class="p-8 text-right text-size-18 text-bold-600">$<?php echo $laa['total_cost']?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			</div>

		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<?php include 'footer.php'; ?>