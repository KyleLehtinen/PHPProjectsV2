<?php 
	$products = array("Mac", "Ubuntu", "Windows");
	$options = '';

	//loop to build product dropdown for page
	foreach($products as $key=>$product) {
		$options .= "<option value='$key'>$product</option>";
	}
?>