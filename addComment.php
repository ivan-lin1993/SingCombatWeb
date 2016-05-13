<?php
	include "config.php";
	$fromWho=$_COOKIE['_user'];
	
	$commentTo=mysql_real_escape_string($_POST['commentTo']);
	
	$commentText=mysql_real_escape_string($_POST['commentText']);
	mysql_query("SET NAMES 'UTF8'");
	$sql = "INSERT INTO comments (commentFrom,commentTo,commentText) VALUES ('$fromWho','$commentTo','$commentText');";
	mysql_query($sql) or die('MySQL query error 1');
	
	
	header("Location: index.php");

?>