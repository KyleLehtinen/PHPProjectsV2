<?php 
	include('products.php');
	
	if ((isset($_GET['pid']) && isset($_GET['quantity'])) 
		&& array_key_exists($_GET['pid'], $products)) {
		
		$pid = $_GET['pid'];
		$quantity = $_GET['quantity'];

		if ($products[$pid] == 'Mac' && $quantity > 7) {
			$output = "You can't order over 7 Macs.";
		} else {
			$output = "Your order includes $quantity $products[$pid] computers";
		}
	} else {
		if (!isset($_GET['pid'])) {
			$output = "You need to select a valid product from the list.";
		} else if (!isset($_GET['quantity'])) {
			$output = "You need to have a quantity of at least 1.";
		} else {
			$output = "The selected product does not exist.";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>

	<?php require('header.php'); ?>
	
	<div class="container">
		<h1><?php echo $output; ?></h1> 
	</div>

	<?php require('footer.php'); ?>
	
</body>
</html>