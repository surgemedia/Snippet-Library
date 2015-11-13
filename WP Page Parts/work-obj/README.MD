## Example Usage
```PHP
<section id="work" class="container-fluid">
<div class="row">
<?php 
//ACF Fields used
// relationshop - featured work
// dropdown of term name - work-type
$featured_work = get_field('featured_work'); //Post object
$case_study_home = array(); //empty
$work_home = array(); //empty

for ($i=0; $i < sizeof($featured_work); $i++) { 
	$obj = $featured_work[$i];
	$case_study_obj = $obj[case_study];
	$work_type = $obj[type_of_work];
	array_push($work_home, $work_type);
	array_push($case_study_home, $case_study_obj->ID);
	$case_study_url = get_permalink($case_study_obj->ID);
}
for ($j=0; $j < sizeof($case_study_home); $j++) {
	include(locate_template('templates/work-obj.php'));
}
		 ?>
	</div>
</section>
```

##Website Used On
 - Surge Media - template-home.php