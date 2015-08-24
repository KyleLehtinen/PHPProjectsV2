<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Browse Products</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<?php require('header.php'); ?>

	<h1>Browse Products</h1>
	<ul class="browse-items">
		<li class="browse-items"><a href="product.php?id=1">Macbook</a></li>
		<li class="browse-items"><a href="product.php?id=2">Ubuntu</a></li>
		<li class="browse-items"><a href="product.php?id=3">Windows</a></li>
	</ul>

	<?php require('footer.php'); ?>
	
</body>
</html>