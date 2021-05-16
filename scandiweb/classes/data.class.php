<?php

class Data extends Dbh {
	public function getProducts(){
		$sql = "SELECT * from product";
		$stmt = $this->connect()->query($sql);?>
		<div class="container">
		<form method="post" action="classes/delete.class.php">
			<input type="submit" name="delete" class="delete" value="Mass Delete">
		<?php while ($row = $stmt->fetch()) {
			?>
			<div class="block">
				<?php echo "<input class='checkbox' type='checkbox' name='checkbox[]' value='".$row['id_product']."'><br>";
				
				echo $row['SKU'].'<br>';
				echo $row['name_product'].'<br>';
				echo $row['price'].'$'.'<br>';
				if  ($row['type'] == 1){
					echo 'Size '.$row['parameter'].'MB';
				}
				elseif ($row['type'] == 2){
					echo 'Weight '.$row['parameter'].'KG';
				}
				elseif ($row['type'] == 3){
					echo 'Dimension '.$row['parameter'];
				}
				?>
			</div>
			<?php
		}
		?></form><?php
	}
}