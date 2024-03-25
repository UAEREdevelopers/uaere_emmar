<!-- PROPERTIES BLOG AREA START -->
		<section class="propertise-blog">
			<div class="container">	
				<div class="section-heading">
					<h5>Check Out</h5>
					<div class="main-title">
						<h2><span>Our</span> Properties</h2>
						<strong></strong> <!-- Use for heading after effect -->
					</div>
				</div> <!-- /.section-heading -->
				<div class="row">
					<div class="blog-list" >
						

							<?php
							 	foreach ($communityDetails["properties"] as $property) {
							 		$path = 'images/community/'.$property['image'];	
							?>
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
									<!-- post begin -->
			                        <article class="post-item border-right shadow-bottom-items">
			                            <div class="post-media">
			                                <img src="{{ asset($path) }}" alt="Featured">
			                            </div>
			                            <div class="post-inner border-around">
				                            <div class="post-metadata">
				                                <span class="total-place">
				                                	<i class="flaticon-ten-commandment"></i>
				                                    <a href="#">{{$property['area']}} Sqft</a>
				                                </span>
				                                <span class="bedroom">
				                                    <i class="flaticon-bed"></i>
				                                    <a href="#">{{$property['beds']}} beds</a>
				                                </span>
				                                <span class="bathroom"> 
				                                    <i class="flaticon-bath"></i>
				                                    <a href="#">{{$property['baths']}} baths</a>
				                                </span>    
				                            </div> <!-- /.post-metadata -->
				                            <div class="post-content border-top">
				                                <div class="post-title">
				                                    <h5><a href="#">{{$property['name']}}</a></h5>
				                                </div>
				                                <div class="post-entry">
				                                    <p>{{$property['desc']}}</p>
				                                </div>
				                                <div class="post-about border-top">
				                                	<span>
				                                		<i class="fa fa-money"></i>
				                                		 AED {{$property['start_price']}}
				                                	</span>
				                                	<span style="float: right;">
				                                		<div class="renewal-btn">
															<a href="{{route('single_community')}}" class="fresh-btn">Enquire Now</a>
														</div>
				                                	</span>
				                                </div>
				                            </div> <!-- /.post-content -->
				                        </div> <!-- /.post-inner -->
			                        </article> <!-- /.post-item -->
			                      </div> <!-- /.col- -->

							<?php
							 	}
							?>

	                        
						
						
					</div> <!-- /.blog-list -->
				</div> <!-- /.row -->  
			</div> <!-- /.container -->
		</section> <!-- /.propertise-blog -->
		<!-- /PROPERTIES BLOG AREA END -->









