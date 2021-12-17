<?php include 'header.php' ?>

	<section class="pt-s5 pb-s5 overlay-wrap" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="assets/images/bg/bg-1.jpg">
		<div class="container overlay-container pt-s2 pb-s5">
			<div class="pb-s5">
				<div class="hero-section-container-tl w-100 h-100 d-flex justify-content-center align-items-center">
					<div class="text-center mb-s2">
						<div class="mt-s3 text-white">
							<h6>Find the best parking area!</h6>
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
		<div class="quote-setting container">
			<div class="bg-white p-s3 bs-solid bc-light bw-s1 rounded-s2 box-shadow-v1-s5">
				<form class="quote-hr" method="POST" action="parkings.php" enctype="multipart/form-data">
					<div class="row">
                        <div class="col-lg-2">
                            <div class="form-group tooltip_error">
                                <label for="airport_id">City</label>
                                <select class="form-control rounded-s5 text-size-12">
                                	<?php $re = "SELECT * from `city`";
                                		  $ex = mysqli_query($db,$re);
                                		  while ( $as = mysqli_fetch_assoc($ex)) {
                                		  	?>
                       <option value="<?php echo $as['city'] ?>"><?php echo $as['city'] ?></option>
                                    <?php
                                		  } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group tooltip_error">
                                <label for="airport_id">Places</label>
                                <select class="form-control rounded-s5 text-size-12" name="areas">
                                    <?php $re = "SELECT * from `places`";
                                		  $ex = mysqli_query($db,$re);
                                		  while ( $as = mysqli_fetch_assoc($ex)) {
                                		  	?>
                       <option value="<?php echo $as['areas'] ?>"><?php echo $as['areas'] ?></option>
                                    <?php
                                		  } ?>
                                </select>
                            </div>
                        </div>
                        
						<div class="col-lg-4">
							<label>Date</label>
							<div class="form-row">
								<div class="form-group col-md-6">
									<input type="date" name="date" class="form-control text-size-12 rounded-s5 bc-v1-dark">

								</div>
								
								
							</div>
						</div>
					
						<div class="col-lg-2">
							<div class="form-row">
								<div class="form-group col-md-12">
									<input  type="submit" class="btn bg-cherry text-white text-shadow-s1 text-uppercase text-bold-600 text-size-s1 mt-30 rounded-s5 mb-s1 btn-block" name="search" value="Search">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div> <!-- /CONTAINER -->
		<div class="container pt-s4">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="mt-s2 mb-s2 box-shadow-parent--hover">
						<div class="d-flex align-items-center mb-s2">
							<div class="mr-s2">
								<div class="text-size-s1 rounded-s3 bg-cherry text-white text-center h--40 w--40 d-flex justify-content-center align-items-center box-shadow-v2-s3-child--hover">
									<i class="icon-paper-plane"></i>
								</div>
							</div>
							<div>
								<h2 class="text-size-18 text-bold-600 m-0">Exclusive Prices</h2>
							</div>
						</div>
						<p class="m-0">It is a long established fact that a people would go for most cheap and good quality when it comes to parking we provide the best price in philadelphia.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="mt-s2 mb-s2 box-shadow-parent--hover">
						<div class="d-flex align-items-center mb-s2">
							<div class="mr-s2">
								<div class="text-size-s1 rounded-s3 bg-cherry text-white text-center h--40 w--40 d-flex justify-content-center align-items-center box-shadow-v2-s3-child--hover">
									<i class="icon-equalizer"></i>
								</div>
							</div>
							<div>
								<h2 class="text-size-18 text-bold-600 m-0">Expert Customer Support</h2>
							</div>
						</div>
						<p class="m-0">we are company whose employees are well mannered when it comes to customer service and policy of customer's info never goes out from us.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="mt-s2 mb-s2 box-shadow-parent--hover">
						<div class="d-flex align-items-center mb-s2">
							<div class="mr-s2">
								<div class="text-size-s1 rounded-s3 bg-cherry text-white text-center h--40 w--40 d-flex justify-content-center align-items-center box-shadow-v2-s3-child--hover">
									<i class="icon-screen-desktop"></i>
								</div>
							</div>
							<div>
								<h2 class="text-size-18 text-bold-600 m-0">Customer Satisfaction</h2>
							</div>
						</div>
						<p class="m-0">Everywhere it is necessary to satisfy the client with better way of handling them, we offer great staff with professional parking experience and you might feel like home.</p>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-dark-g pt-s5 pb-s5">
		<div class="container">
			<div class="mb-80 text-center">
				<h6 class="text-bold-700 text-cherry">We also provide Airport Parking</h6>
				<h2 class="text-bold-700 text-white">Airport Parking in 3 Simple Steps</h2>
				<div class="mb-s3">
					<hr class="mb-0 bc-v1-dark">
					<hr class="w--60 bs-solid bc-cherry bw-s5 bt-0 bl-0 br-0 mt-0">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="mt-s2 mb-s2 mb-60--md mb-60--sm mb-60--xs box-shadow-parent--hover mt--parent--hover">
						<div class="bg-white text-center pt-s4 bs-solid bc-light bw-s1 position-relative">
							<div class="hero-section-container-tl w-100 mt--s4 mt--s5-child">
								<img class="w--100 rounded-circle bs-solid bc-white bw-s5 box-shadow-v2-s3-child--hover" src="assets/images/steps/step-1.png" alt="Departure & Arrival Details">
							</div>
							<div class="p-s2 mt-s2 mb-s2">
								<span class="text-cherry text-bold-600">Step 1</span>
								<h5 class="mt-s1 mb-0 text-bold-600">Departure & Arrival Details</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="mt-s2 mb-s2 mb-60--md mb-60--sm mb-60--xs box-shadow-parent--hover mt--parent--hover">
						<div class="bg-white text-center pt-s4 bs-solid bc-light bw-s1 position-relative">
							<div class="hero-section-container-tl w-100 mt--s4 mt--s5-child">
								<img class="w--100 rounded-circle bs-solid bc-white bw-s5 box-shadow-v2-s3-child--hover" src="assets/images/steps/step-2.png" alt="Your & Vehicle Detail">
							</div>
							<div class="p-s2 mt-s2 mb-s2">
								<span class="text-cherry text-bold-600">Step 2</span>
								<h5 class="mt-s1 mb-0 text-bold-600">Your & Vehicle Detail</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="mt-s2 mb-s2 mb-60--md mb-60--sm mb-60--xs box-shadow-parent--hover mt--parent--hover">
						<div class="bg-white text-center pt-s4 bs-solid bc-light bw-s1 position-relative">
							<div class="hero-section-container-tl w-100 mt--s4 mt--s5-child">
								<img class="w--100 rounded-circle bs-solid bc-white bw-s5 box-shadow-v2-s3-child--hover" src="assets/images/steps/step-3.png" alt="Payment Detail">
							</div>
							<div class="p-s2 mt-s2 mb-s2">
								<span class="text-cherry text-bold-600">Step 3</span>
								<h5 class="mt-s1 mb-0 text-bold-600">Payment Detail</h5>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<section class="bg-white pt-s5 pb-s5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div>
								<h4 class="text-bold-700">Testimonials</h4>
								<hr class="mt-0 mb-s1 bc-v1-dark">
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="owl-carousel owl-theme owl-nav-bg show-nav-title" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
										<div>
											<div class="mt-s2 mb-s2 box-shadow-parent--hover">
												<div>
													<p class="mb-s1 text-size-s2 font-italic">“Parking is the only parking specific marketing platform that has provided us true international exposure. The combination of the website, webinars and conferences has provided us more value than any other parking specific marketing platform to date.”.</p>
												</div>
												<div class="d-flex mt-s2 ml-20">
													<div class="rounded-circle h--45 w--45 mr-s2 d-flex justify-content-center align-items-center box-shadow-v2-s3-child--hover">
														<img class="w-100 rounded-circle bs-solid bc-light bw-s3" src="assets/images/testimonials/user-1.jpg" alt="Testimonials">
													</div>
													<div>									
														<span class="text-bold-600 text-dark d-block">Charl Spencer</span>
														<span class="text-size-s1 text-muted">Orion Inc.</span>
													</div>
												</div>
											</div>
										</div>
										<div>
											<div class="mt-s2 mb-s2 box-shadow-parent--hover">
												<div>
													<p class="mb-s1 text-size-s2 font-italic">
													"One of our most important networking platforms, where we can share our own news and access all the latest information from both new and existing partners. Parking has enjoyed being part of such an active and dynamic community, and looks forward to doing the same for years to come."</p>
												</div>
												<div class="d-flex mt-s2 ml-20">
													<div class="rounded-circle h--45 w--45 mr-s2 d-flex justify-content-center align-items-center box-shadow-v2-s3-child--hover">
														<img class="w-100 rounded-circle bs-solid bc-light bw-s3" src="assets/images/testimonials/user-2.jpg" alt="Testimonials">
													</div>
													<div>									
														<span class="text-bold-600 text-dark d-block">Joseph nikols</span>
														<span class="text-size-s1 text-muted">Sponge Inc.</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> <!-- /ROW -->
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="mb-s2 mt-s3--md mt-s3--sm mt-s3--xs">
						<h4 class="text-bold-700">Type of Parking</h4>
						<hr class="mt-0 mb-s1 bc-v1-dark">
					</div>
					<div class="accordion" id="accordion-acc7">
						<div class="card border-none bg-none">
							<div id="headingOne-acc7-1">
								<h5 class="mb-s1">
									<button class="btn btn-link btn-block text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-v5-light bg-cherry--active text-white--active text-cherry--hover active collapsed pt-s1 pl-s2 pr-s2 pb-s1" type="button" data-toggle="collapse" data-target="#collapseOne-acc7-1" aria-expanded="true" aria-controls="collapseOne-acc7-1">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Meet and Greet
									</button>
								</h5>
							</div>

							<div id="collapseOne-acc7-1" class="collapse show" aria-labelledby="headingOne-acc7-1" data-parent="#accordion-acc7">
								<div class="card-body pt-s2 pb-s2">
									<p>No parking stress, no hassle! Leave and pick your car from airport terminal. Professional & insured chauffeurs will greet you at the airport and safely park your car. Compare the cheapest meet and greet rates from trusted parking suppliers.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingTwo-acc7-2">
								<h5 class="mb-s1">
									<button class="btn btn-link btn-block text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-v5-light bg-cherry--active text-white--active text-cherry--hover collapsed pt-s1 pl-s2 pr-s2 pb-s1" type="button" data-toggle="collapse" data-target="#collapseTwo-acc7-2" aria-expanded="false" aria-controls="collapseTwo-acc7-2">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										Park and Ride
									</button>
								</h5>
							</div>
							<div id="collapseTwo-acc7-2" class="collapse" aria-labelledby="headingTwo-acc7-2" data-parent="#accordion-acc7">
								<div class="card-body pt-s2 pb-s2">
									<p>The most affordable & convenient way to park your car in our close to the airport car parks. Save money by comparing unbeatable park and ride offers at UK airports.</p>
								</div>
							</div>
						</div>
						<div class="card border-none bg-none">
							<div id="headingThree-acc7-3">
								<h5 class="mb-s1">
									<button class="btn btn-link btn-block text-size-s1 text-bold-600 text-dark rounded-0 text-left bg-v5-light bg-cherry--active text-white--active text-cherry--hover collapsed pt-s1 pl-s2 pr-s2 pb-s1" type="button" data-toggle="collapse" data-target="#collapseThree-acc7-3" aria-expanded="false" aria-controls="collapseThree-acc7-3">
										<span class="mr-s1">
											<span>
												<i class="fa fa-plus hide"></i>
												<i class="fa fa-minus show"></i>
											</span>
										</span>
										On Site Airport Parking
									</button>
								</h5>
							</div>
							<div id="collapseThree-acc7-3" class="collapse" aria-labelledby="headingThree-acc7-3" data-parent="#accordion-acc7">
								<div class="card-body pt-s2 pb-s2">
									<p>We have cheap offers for on-site parking at all major UK airports. Compare our prices and save up to 60% on booking UK airport parking now. Trusted by thousands of satisfied customers, our airport parking offers are simply unbeatable.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /ROW -->
		</div> <!-- /CONTAINER -->
	</section> <!-- /SECTION -->

	<?php include 'footer.php'; ?>