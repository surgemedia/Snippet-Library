<!-- Start of template-plural-post-type-testimonial-content.php -->
<div class="testimonial-content row">
				<?php 
					  			// WP_Query arguments
								$args = array (
									
									'post_type'              => 'testimonials',
									
								);

								// The Query
								$query = new WP_Query( $args );
								$i = 1;
								$collapse_class = "";
								// The Loop
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) {
										$query->the_post();
										$author_details = get_field('author_name').",".get_field('author_designation').",". get_the_title();
										// $collapse_id = preg_replace("/[^A-Za-z0-9\-]/"," ",get_the_title());
										// $collapse_id = str_replace(' ', '-', $collapse_id);
										$collapse_id = get_the_id();
										if ($i==1) {	//Loop to keep the 1st testimonial open on page load
											$collapse_class = "collapse in";
											$i++;
										}
										else {
											$collapse_class = "collapse";	
										}
										
										?>
											<div class="<?php echo $collapse_class ?>" id="<?php echo $collapse_id ?>">
												<p><?php the_field('testimony'); ?></p>
												<p class="author-details">
													<span><?php echo $author_details ?></span>
													<!-- <span class="pull-right"><?php the_field('date_of_testimony'); ?></span> -->
												</p>
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
<!-- End of template-plural-post-type-testimonial-content.php -->