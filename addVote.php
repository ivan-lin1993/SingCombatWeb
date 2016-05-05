<?php
	include "config.php";
	$fromWho=$_COOKIE['_user'];
	$cookie_time=100000;
	mysql_query("SET NAMES 'UTF8'");
	$sql = "SELECT * FROM nowSinger;";
	$result=mysql_query($sql) or die('MySQL query error 7');
	$row = mysql_fetch_array($result);
	$id=$row['id'];
	
	if($_COOKIE['hasVote']!=$id){
		$score=$_POST['rate_input'];
		mysql_query("SET NAMES 'UTF8'");
		$sql = "INSERT INTO votes (fromWho,toWho,score) VALUES ('$fromWho','$id','$score');";
		mysql_query($sql) or die('MySQL query error 1');
	}
	setcookie("hasVote", $id,time()+$cookie_time);
	header("Location: index.php");

?>