<?php
	include "config.php";
	$fromWho=$_COOKIE['_user'];
	$cookie_time=100000;
	mysql_query("SET NAMES 'UTF8'");
	$sql = "SELECT * FROM nowSinger;";
	$result=mysql_query($sql) or die('MySQL query error 7');
	$row = mysql_fetch_array($result);
	$id=$row['id'];
	
	if($_COOKIE['hasHotVote']!=$id){
		mysql_query("SET NAMES 'UTF8'");
		$sql = "INSERT INTO hot_singer_vote (voteFrom,voteTo) VALUES ('$fromWho','$id');";
		mysql_query($sql) or die('MySQL query error 10');
	}
	setcookie("hasHotVote", $id,time()+$cookie_time);
	header("Location: index.php");
?>