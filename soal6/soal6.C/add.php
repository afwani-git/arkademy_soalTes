<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$chasier = mysqli_real_escape_string($mysqli, $_POST['chasier']);
	$category = mysqli_real_escape_string($mysqli, $_POST['category']);
	$fav = mysqli_real_escape_string($mysqli, $_POST['fav']);
	$price = mysqli_real_escape_string($mysqli, $_POST['price']);
		$result = mysqli_query($mysqli, "INSERT INTO TB_Product(name,price,kategoriId,cashireId) VALUES('$fav','$price','$category','$chasier')");

		header("Location:index.php");
}
?>
