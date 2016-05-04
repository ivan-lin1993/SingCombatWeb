<?php
	include dirname(__FILE__)."/../config.php";
	$id=$_GET['id'];
	$sql="UPDATE nowSinger SET id='$id';";
	mysql_query($sql) or die("ERROR");
	
	header("Location: index.php");
?>


