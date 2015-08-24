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
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<?php require('header.php'); ?>
	
	<h1><?php echo $output; ?></h1> 
	
	<?php require('footer.php'); ?>
	
</body>
</html>