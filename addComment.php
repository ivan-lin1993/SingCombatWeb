<?php
	include "config.php";
	$fromWho=$_COOKIE['_user'];
	$cookie_time=100000;
	mysql_query("SET NAMES 'UTF8'");
	$sql = "SELECT * FROM nowSinger;";
	$result=mysql_query($sql) or die('MySQL query error 7');
	$row = mysql_fetch_array($result);
	$id=$row['id'];
	
	
	$commentText=mysql_real_escape_string($_POST['commentText']);
	mysql_query("SET NAMES 'UTF8'");
	$sql = "INSERT INTO comments (commentFrom,commentTo,commentText) VALUES ('$fromWho','$id','$commentText');";
	mysql_query($sql) or die('MySQL query error 1');
	
	
	header("Location: index.php");

?>