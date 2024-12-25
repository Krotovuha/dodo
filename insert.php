<?php 
	$con = mysqli_connect("MySQL-8.2","root","","dodo");
	$query = mysqli_query($con, "INSERT INTO korzina(img, name, price) VALUES (
		'{$_GET['img']}',
		'{$_GET['name']}',
		'{$_GET['price']}'
) ");

	header("Location: index.php")

 ?>