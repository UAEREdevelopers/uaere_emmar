<!-- MAIN SLIDER AND PROPERTY SEARCH AREA START-->
		<section id="main-slider" class="carousel main-slider">
			<div class="carousel slide">
				<div class="carousel-inner">
					<?php
					 	foreach ($communityDetails["sliders"] as $key => $slider) {
					 		$path = 'images/community/'.$slider["image"];
					 		$activeClass= ($key==0) ? "active" : "";

					 		
					 ?>


					 <div class="item {{$activeClass}}" style="background-image: url('{{ asset($path) }}');">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="slider-items">
										<div class="animation animated-item-4">
											<!-- Only Slider Top Style -->
											<div class="slider-head-style">
											</div>
										</div>
										<div class="page-heading">	
											<div class="page-main-title">
												<strong></strong> <!-- Use for heading after effect -->
												<h2>{{$slider['name']}} <br><span>View</span></h2>
											</div>
											<h5>{{$slider['desc']}}</h5>
										</div>
									</div> <!-- /.slider-items -->
								</div>
							</div>
						</div>
					</div> <!--/.item--> 



					 <?php
					 	}
					 ?>

				</div> <!-- /.carousel-inner -->
			</div> <!--/.carousel--> 
			<a class="prev hidden-xs" href="#main-slider" data-slide="prev"> 
				<i class="fa fa-long-arrow-left"></i>
			</a> 
			<a class="next hidden-xs" href="#main-slider" data-slide="next"> 
				<i class="fa fa-long-arrow-right"></i> 
			</a> 
		</section> <!-- /.main-slider -->
		<!-- /MAIN SLIDER AND PROPERTY SEARCH AREA START --> 