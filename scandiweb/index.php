<?php
	include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="all" href="styles/style.css">
	<title>WEB</title>
</head>
<body>
	<div class="header">
		<h1 class="title">Product List</h1> <a class="add" href="add.php">Add</a> 
		<hr>
	</div>
		<?php
		$testObj = new Data();
		$testObj->getProducts();
		// $delObj = new MassDelete();
		// $delObj->delProducts();
		?>
	</div>
</body>
</html>