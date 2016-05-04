<?php
	include "config.php";
	$cookie_time=100000;
	mysql_query("SET NAMES 'UTF8'");
	$sql = "SELECT * FROM nowSinger;";
	$result=mysql_query($sql) or die('MySQL query error 7');
	$row = mysql_fetch_array($result);
	$id=$row['id'];
	echo $_COOKIE['nowSinger'];
	if($_COOKIE['nowSinger']!=$id){
		$score=$_POST['rate_input'];
		mysql_query("SET NAMES 'UTF8'");
		$sql = "INSERT INTO votes (toWho,score) VALUES ('$id','$score');";
		mysql_query($sql) or die('MySQL query error 1');
	}
	setcookie("nowSinger", $id,time()+$cookie_time);
	header("Location: index.php");

?>