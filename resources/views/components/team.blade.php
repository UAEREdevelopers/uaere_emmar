<!-- OUR TEAM AREA START -->
		<section class="our-team">
			<div class="container">
				<div class="section-heading">
					<h5>Meet with</h5>
					<div class="main-title">
						<h2><span>Our</span> Team</h2>
						<strong></strong> <!-- Use for heading after effect -->
					</div>
				</div> <!-- /.section-heading -->
				<div class="row">

					<?php
					
					 	foreach ($teams as $team) {
					 		
					 		$path = 'images/team/'.$team['person_image'];	
					?>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="team-members">
								<img src="{{ $path }}" alt="Team Member">
								<div class="member-name">
									<h3>{{$team["person_name"]}}</h3>
								</div><!-- /.member-name -->
								<div class="member-hover">
									<div class="member-info">
										<h3>{{$team["person_name"]}}</h3>
									
										<div class="member-social">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.member-hover -->
							</div> <!-- /.team-members -->
						</div> <!-- /.col -->
					<?php
					 	}
					?>


					
					
					
				</div><!-- row -->
			</div><!-- container -->
		</section> <!-- /.our-team -->
		<!-- /OUR TEAM AREA END -->