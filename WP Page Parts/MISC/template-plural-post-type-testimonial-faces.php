<!-- Start of template-plural-post-type-testimonial-faces.php -->
<div class="testimonial-images">
		  		<h3>What Our Clients Say</h3>
		  		<ul class="">
					<li class="row">
					  	<div class="col-lg-12">
					  		<?php 
					  			// WP_Query arguments
								$args = array (
									
									'post_type'              => 'testimonials',
									
								);

								// The Query
								$query = new WP_Query( $args );
								$i = 1;
								$aria_expanded = "";
								// The Loop
								if ( $query->have_posts() ) {
									while ( $query ->have_posts() ) {
										$query->the_post();
										// $collapse_id = preg_replace("/[^A-Za-z0-9\-]/"," ",get_the_title());
										// $collapse_id = str_replace(' ', '-', $collapse_id);
										$collapse_id = get_the_id();
										if ($i==1) { //Loop to keep the 1st testimonial open on page load
											$aria_expanded = "true";
											$i++;
										}
										else {
											$aria_expanded = "false";	
										}
										
										?>
											<div data-toggle="collapse" href="#<?php echo $collapse_id ?>" aria-expanded="<?php echo $aria_expanded ?>" aria-controls="<?php echo $collapse_id ?>">
												<img src="<?php the_field('author_image'); ?>" alt="client-image">
                        					</div>
								  		<?
								  		
									}
								} else {
									echo "<p>No Testimonials Found</p>";
								}


								// Restore original Post Data
								wp_reset_postdata();

					  		?>
		  				</div>
					</li>
				</ul>
			</div>
<!-- End of template-plural-post-type-testimonial-faces.php -->