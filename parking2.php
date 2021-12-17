<?php include 'header2.php' ?>

	<section class="pt-s5 pb-s5 overlay-wrap" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="assets/images/bg/bg-1.jpg">
		<div class="container overlay-container pt-s2 pb-s5">
			<div class="pb-s5">
				<div class="hero-section-container-tl w-100 h-100 d-flex justify-content-center align-items-center">
					<div class="text-center mb-s2">
						<div class="mt-s3 text-white">
							<h6>Find best  parking deals</h6>
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
			<div class="row pl-16">
				<div class="col-lg-9 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-lg-12 col-md-6 position-relative">
							<div class="mb-s2 box-shadow-v1-s2--hover position-relative">
								<div class="row">
									<?php 
										if (isset($_POST['search'])) {
											
										  $ara = $_POST['areas'];
										  $akh = "SELECT * from `places` where `areas`='$ara'";
										  $exh = mysqli_query($db,$akh);
										  
										  	while ($fetch = mysqli_fetch_assoc($exh)) {
										   	?>

									<div class="col-lg-8 col-md-12 p-0" style="margin-left: 300px">
										<div class="bg-white pt-s3 pl-s3 pr-s3 pb-s3 match-height">
											<div class="ribbon ribbon-top-left"></div>
											<div class="row">
												<div class="col-lg-7 col-md-12">
                                                    <div class="text-size-30 mt-s3 mb-18">$<?php echo $fetch['price'] ?> </div>
													<div class="star-rating star-rating-s2 text-cherry mb-6" title="0.00 Rating"><span class="w-0"></span></div>
													<h2 class="text-size-20 text-bold-600 text-capitalize mb-8"><?php echo $fetch['areas'] ?> Parking Spaces</h2>
													<h6 class="text-cherry">Meet & Greet at Terminal</h6>
													<span>Non-Flex, Cannot be Cancelled</span>
													<div class="mt-20">
														<a href="booking.php?id=<?php echo $fetch['p_id'] ?>" class="btn bg-cherry text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-8 pb-8 pl-20 pr-20 box-shadow-v1-s3--hover">Book Now</a>
														<a class="btn bg-warning text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-8 pb-8 pl-20 pr-20 box-shadow-v1-s3--hover" data-toggle="modal" data-target=".more-info">More Info</a>
													</div>
												</div>
												<div class="col-lg-5 col-md-12">
													<ul class="row mt-20 mb-15">
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-1.png" alt="24 Hours Patrols">
															24 Hours Patrols
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-2.png" alt="CCTV Cameras">
															CCTV Cameras
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-3.png" alt="Fencing">
															Fencing
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-4.png" alt="You Keep Your Keys">
															You Keep Your Keys
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-5.png" alt="Secure Barrier">
															Secure Barrier
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-6.png" alt="24 Hours Patrolled">
															24 Hours Patrolled
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-7.png" alt="Disability Friendly">
															Disability Friendly
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
										
								</div> <!-- /ROW -->
							</div>

							<!-- MODEL -->
							<div class="modal fade text-xs-left modal-xl more-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog modal_xl" role="document">
									<div class="modal-content modalcontentsticky">
										<button type="button" class="close btn-primary text-white site_model_close_btn bg-danger" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<div class="modal-body">
											<div class="row">
												<div class="col-md-9 col-md-9">
													<div>
														<div class="nav nav-pills mb-s3 bg-v5-light p-10" id="v-pills-tab" role="tablist" aria-orientation="vertical">
															<a class="nav-link btn bg-none text-size-s1 text-bold-600 text-dark text-white--active bg-cherry--active rounded-0 hover-buzz-out text-left active" id="tab-1-1-tab" data-toggle="pill" href="#tab-1-1" role="tab" aria-controls="tab-1-1" aria-selected="true">Overview</a>
															
														</div>
														<div class="tab-content w-100" id="v-pills-tabContent">
															<div class="tab-pane fade show active" id="tab-1-1" role="tabpanel" aria-labelledby="tab-1-1-tab">
																<h5>Why Use Our Parking Spaces ?</h5>
																<p>The chauffeur will collect & return your car at Short Stay Car park.</p>
																<ul class="text-v6-dark mb-15">
																	<li></li>
																	<li>Fully insured chauffeurs</li>
																	<li>Ideal for families and business travellers</li>
																	<li>Leave your keys</li>
																	<li>Short walk to terminal.</li>
																	<li>You will be met at the terminal by an APH Chauffeur.</li>
																</ul>
																<hr>
																
															</div>
															
															
															
															
															
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-3">
													<div>
														<div class="row">
															<div class="col-lg-12 col-md-12">
																
															</div>
															<div class="col-lg-12 col-md-12">
																<div class="bg-v5-light pt-s3 pl-s3 pr-s3 pb-s3 position-relative">
																	
																	<div class="row">
																		<div class="col-lg-12 col-md-12">
																			<div class="text-size-30 mt-s3 mb-18">$
																				<?php echo $fetch['price'] ?> </div>
																			<div class="star-rating star-rating-s2 text-cherry mb-6" title="0.00 Rating"><span class="w-0"></span></div>
																			<h2 class="text-size-20 text-bold-600 text-capitalize mb-8"><?php echo $fetch['areas'] ?> </h2>
																			<h6 class="text-cherry">Meet & Greet at Terminal</h6>
																			<span>Non-Flex, Cannot be Cancelled</span>
																			<div class="mt-20">
																				<a href="booking.html" class="btn bg-cherry text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-8 pb-8 pl-20 pr-20 box-shadow-v1-s3--hover">Book Now</a>
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
									</div>
								</div>
							</div>
							<!-- /MODEL -->
<?php
										   }
										}else{
										$akh = "SELECT * from `places`";
										  $exh = mysqli_query($db,$akh);
										  
										  	while ($fetch = mysqli_fetch_assoc($exh)) { ?>   	

									<div class="col-lg-8 col-md-12 p-0" style="margin-left: 300px">
										<div class="bg-white pt-s3 pl-s3 pr-s3 pb-s3 match-height">
											<div class="ribbon ribbon-top-left"></div>
											<div class="row">
												<div class="col-lg-7 col-md-12">
                                                    <div class="text-size-30 mt-s3 mb-18">$<?php echo $fetch['price'] ?> </div>
													<div class="star-rating star-rating-s2 text-cherry mb-6" title="0.00 Rating"><span class="w-0"></span></div>
													<h2 class="text-size-20 text-bold-600 text-capitalize mb-8"><?php echo $fetch['areas'] ?> Parking Spaces</h2>
													<h6 class="text-cherry">Meet & Greet at Terminal</h6>
													<span>Non-Flex, Cannot be Cancelled</span>
													<div class="mt-20">
														<a href="booking.php?id=<?php echo $fetch['p_id'] ?>" class="btn bg-cherry text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-8 pb-8 pl-20 pr-20 box-shadow-v1-s3--hover">Book Now</a>
														<a class="btn bg-warning text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-8 pb-8 pl-20 pr-20 box-shadow-v1-s3--hover" data-toggle="modal" data-target=".more-info">More Info</a>
													</div>
												</div>
												<div class="col-lg-5 col-md-12">
													<ul class="row mt-20 mb-15">
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-1.png" alt="24 Hours Patrols">
															24 Hours Patrols
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-2.png" alt="CCTV Cameras">
															CCTV Cameras
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-3.png" alt="Fencing">
															Fencing
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-4.png" alt="You Keep Your Keys">
															You Keep Your Keys
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-5.png" alt="Secure Barrier">
															Secure Barrier
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-6.png" alt="24 Hours Patrolled">
															24 Hours Patrolled
														</li>
														<li class="col-lg-12 col-md-12 col-sm-12 mt-6 mb-6">
															<img class="w--30" src="assets/images/icons/icon-7.png" alt="Disability Friendly">
															Disability Friendly
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
										
								</div> <!-- /ROW -->
							</div>

							<!-- MODEL -->
							<div class="modal fade text-xs-left modal-xl more-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog modal_xl" role="document">
									<div class="modal-content modalcontentsticky">
										<button type="button" class="close btn-primary text-white site_model_close_btn bg-danger" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<div class="modal-body">
											<div class="row">
												<div class="col-md-9 col-md-9">
													<div>
														<div class="nav nav-pills mb-s3 bg-v5-light p-10" id="v-pills-tab" role="tablist" aria-orientation="vertical">
															<a class="nav-link btn bg-none text-size-s1 text-bold-600 text-dark text-white--active bg-cherry--active rounded-0 hover-buzz-out text-left active" id="tab-1-1-tab" data-toggle="pill" href="#tab-1-1" role="tab" aria-controls="tab-1-1" aria-selected="true">Overview</a>
															
														</div>
														<div class="tab-content w-100" id="v-pills-tabContent">
															<div class="tab-pane fade show active" id="tab-1-1" role="tabpanel" aria-labelledby="tab-1-1-tab">
																<h5>Why Use Bristol Parking Spaces ?</h5>
																<p>The chauffeur will collect & return your car at Short Stay Car park.</p>
																<ul class="text-v6-dark mb-15">
																	<li></li>
																	<li>Fully insured chauffeurs</li>
																	<li>Ideal for families and business travellers</li>
																	<li>Leave your keys</li>
																	<li>Short walk to terminal.</li>
																	<li>You will be met at the terminal by an APH Chauffeur.</li>
																</ul>
																<hr>
																
															</div>
															
															
															
															
															
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-3">
													<div>
														<div class="row">
															<div class="col-lg-12 col-md-12">
																
															</div>
															<div class="col-lg-12 col-md-12">
																<div class="bg-v5-light pt-s3 pl-s3 pr-s3 pb-s3 position-relative">
																	
																	<div class="row">
																		<div class="col-lg-12 col-md-12">
																			<div class="text-size-30 mt-s3 mb-18">$
																				<?php echo $fetch['price'] ?> </div>
																			<div class="star-rating star-rating-s2 text-cherry mb-6" title="0.00 Rating"><span class="w-0"></span></div>
																			<h2 class="text-size-20 text-bold-600 text-capitalize mb-8"><?php echo $fetch['areas'] ?> </h2>
																			<h6 class="text-cherry">Meet & Greet at Terminal</h6>
																			<span>Non-Flex, Cannot be Cancelled</span>
																			<div class="mt-20">
																				<a href="booking.html" class="btn bg-cherry text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 rounded-0 pt-8 pb-8 pl-20 pr-20 box-shadow-v1-s3--hover">Book Now</a>
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
									</div>
								</div>
							</div>
							<!-- /MODEL -->
						<?php } }?>
							<div class="mb-s2 box-shadow-v1-s2--hover position-relative">
								
							</div>
							<div class="mb-s2 box-shadow-v1-s2--hover position-relative">
								
							</div>
							<div class="mb-s2 box-shadow-v1-s2--hover position-relative">
								
							</div>

				</div>
				
			</div> <!-- /ROW -->

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="d-flex justify-content-between align-items-center mt-s4">
						
						<!-- <div>
							Page 1 to 10
						</div> -->
					</div>
				</div>
			</div> <!-- /ROW -->

		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<?php include 'footer.php'; ?>