<?php

// class MassDelete extends Dbh {
// 	public function delProducts(){
// 		if(isset($_POST['delete'])){
// 		$chkarr = $_POST['checkbox'];
// 		foreach ($chkarr as $key => $value) {
// 			mysqli_query($conn, "DELETE FROM product WHERE id_product=".$value);
// 			$sql = "DELETE FROM product WHERE id_product=".$value;
// 			$stmt = $this->connect()->query($sql);
// 		}
// 		header("Location:../index.php");
// 		}
// 	}
// }

include '../includes/connect.php';

if(isset($_POST['delete'])){
	$chkarr = $_POST['checkbox'];
	foreach ($chkarr as $key => $value) {
		mysqli_query($conn, "DELETE FROM product WHERE id_product=".$value);
	}
	header("Location:../index.php");
}