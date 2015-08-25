<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		$id = null;
	}

	if ($id == '1') {
  		$output = 'You chose the Mac!';
	} else if ($id == '2') {
		$output = 'You chose Ubuntu!';
	} else if ($id == '3') {
  		$output = 'You chose Windows!';
	} else {
		$output = 'Product not found.';
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
	
	<h1><?php echo $output; ?></h1> 
	
	<?php require('footer.php'); ?>
	
</body>
</html>