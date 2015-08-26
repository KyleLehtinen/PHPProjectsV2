<?php include('products.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Browse Products</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
</head>
</head>
<body>

	<?php require('header.php'); ?>
	
	<div class="container">
		<h1>Browse Products</h1>
		<form class="product-select" action="view.php">Product:
    		<select name="pid">
				<?php echo $options; ?>
    		</select>
    		Quantity: <input type="number" min="1" name="quantity">
    		<input class="myButton" type="submit" value="Submit">
		</form>
	</div>

	<?php require('footer.php'); ?>
	
</body>
</html>