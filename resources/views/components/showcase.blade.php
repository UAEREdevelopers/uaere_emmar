<!-- SHOWCASE FEATURE AREA START -->
		<section class="showcase-feature">
			<div class="container">	
				<div class="section-heading wow zoomIn">
					<h5>Look At</h5>
					<div class="main-title">
						<h2><span>Our</span> Showcase</h2>
						<strong></strong> <!-- Use for heading after effect -->
					</div>
				</div> <!-- /.section-heading -->
				<div id="showcase-main-thumb-slider-section" class="wow zoomIn">
					<!-- Showcase Slider Main -->
					<div id="showcase-main-area-slider">
						 <?php
						 	foreach ($showcases as $showcase) {
						 		$path = 'images/slider/showcase/'.$showcase;	
						 ?>
						 	<div class="items">
								<div class="img-pot" data-bg-img="{{ asset($path) }}"></div>
							</div>
						 <?php
						 	}
						 ?>


						
						
					</div> <!-- /#showcase-main-area-slider -->
					<!-- Showcase Slider Thumbnail -->
					<div id="showcase-thumb-slider">
						<?php
						 	foreach ($showcases as $showcase) {
						 		$path = 'images/slider/showcase/'.$showcase;	
						?>
							<div class="items">
								<div class="img-pot" data-bg-img="{{ asset($path) }}"></div>
							</div>
						<?php
						 	}
						 ?>
						
						
					</div> <!-- /#showcase-thumb-slider -->
				</div> <!-- /#showcase-main-thumb-slider-section --> 
				
			</div> <!-- /.container -->
		</section> <!-- /.showcase-feature -->
		<!-- /SHOWCASE FEATURE AREA END -->