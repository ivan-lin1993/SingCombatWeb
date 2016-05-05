<?php
	include dirname(__FILE__)."/../config.php";
	if($_GET['id']==null){
		exit;
	}
	$id=$_GET['id'];
	$sql="UPDATE nowSinger SET id='$id';";
	mysql_query($sql) or die("ERROR");
	
	header("Location: index.php");
?>


