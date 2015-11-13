<?php 
/*=========================================
=  To display Gravity Form in ACF        =
=========================================*/
function displayGoogleMaps($location) {
//displays the form selected in Page and created in Forms 
    if( !empty($location) ):
			?>
			<div class="map-data">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
				<?php  $infowindow = $location['address']; ?>
				<h5><?php echo $infowindow; ?></h5>
				</div>
			</div>
			<div class="acf-map">
				
			</div>
			<?php endif;
}