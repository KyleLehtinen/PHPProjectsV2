<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Browse Products</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
</head>
<body>

	<?php require('header.php'); ?>
	
	<div class="container">
		<h1>Browse Products</h1>
		<ul class="browse-items">
			<li class="browse-items"><a href="product.php?id=1">Macbook</a></li>
			<li class="browse-items"><a href="product.php?id=2">Ubuntu</a></li>
			<li class="browse-items"><a href="product.php?id=3">Windows</a></li>
		</ul>
	</div>

	<?php require('footer.php'); ?>
	
</body>
</html>