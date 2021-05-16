<?php
	include 'includes/class-autoload.inc.php';
	include 'includes/connect.php';
?>

<?php

class Insert
{

	function insert_data ($SKU, $name_product, $price, $parameter, $type)
	{
		include 'includes/connect.php';
		$res = mysqli_query($conn, "INSERT INTO product(SKU, name_product, price, parameter, type) VALUES ('$SKU', '$name_product', '$price', '$parameter', '$type')") or die(mysqli_error());
		return $res;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="all" href="styles/style.css">
	<title>Add</title>
</head>
<body>
	<div class="header">
		<h1 class="title">Product Add</h1><a class="cancel" href="index.php">Cancel</a>
		<hr>
	</div>
	<div class="container">
		<form name="product_editor" method="POST">
			<p>SKU</p><input type="text" name="SKU">
			<p>Name</p><input type="text" name="product">
			<p>Price</p><input type="number" name="price">
			<p>Type switcher</p>
			<select id="Type" name="Type" onChange="ProductChange()">
				<?php
				mysqli_query($conn, "SELECT * from type");
				$result = mysqli_query($conn, "SELECT * from type");
				while ($row = $result->fetch_assoc()):?>
					<?php echo "<option value='".$row['id_type']."'>".$row['name_type']."</option>";?>
				<?php endwhile;?>
			</select>
		
			<div id="1" style="display: none">Size (MB): <input type="text" name="Size"></div>
			<div id="2" style="display: none">Weight(KG): <input type="text" name="Weight"></div>
			<div id="3" style="display: none">
				<div>Height (CM): <input type="text" name="Height"></div><br>
				<div>Width (CM): <input type="text" name="Width"></div><br>
				<div>Length (CM): <input type="text" name="Length"></div><br>
			</div>
		
			<div id="param"></div>
			<input type="submit" name="Save" value="Save">
		</form>
	</div>
	<?php
		$ins = new Insert();
		if (isset($_POST["Save"])){
			if($_POST["Type"] == 1){
				$SKU = $_POST["SKU"];
				$product = $_POST["product"];
				$price = $_POST["price"];
				$type = $_POST["Type"];
				$parameter = $_POST["Size"];
			}
			if($_POST["Type"] == 2){
				$SKU = $_POST["SKU"];
				$product = $_POST["product"];
				$price = $_POST["price"];
				$type = $_POST["Type"];
				$parameter = $_POST["Weight"];
			}
			if($_POST["Type"] == 3){
				$SKU = $_POST["SKU"];
				$product = $_POST["product"];
				$price = $_POST["price"];
				$type = $_POST["Type"];				
				$parameter = $_POST["Height"]."x".$_POST["Width"]."x".$_POST["Length"];
			}
			$ins->insert_data($SKU, $product, $price, $parameter, $type);
			header("Location: add.php");
		}
	?>
	<script type="text/javascript" src="./inner.js"></script>
</body>

</html>