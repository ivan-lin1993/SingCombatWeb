﻿<?php 
	$code=$_GET['code'];
	include "config.php";
	mysql_query("SET NAMES 'UTF8'");
	$sql = "SELECT * FROM users WHERE code='$code';";
	$result=mysql_query($sql) or die("DB ERROR");
	if(mysql_num_rows($result)==0){
		echo "無效帳號";
		exit;
	}
	$row=mysql_fetch_array($result);
	if($row['verify']==1){
		echo "已登入過";
		header("Location: index.php");
		exit;
	}
	
	
	
	$cookie_time=3600*8;
	mysql_query("SET NAMES 'UTF8'");
	$sql = "UPDATE users SET verify=1 WHERE code='$code';";
	mysql_query($sql) or die('DB ERROR2');
	setcookie("_user", $code,time()+$cookie_time);
	header("Location: index.php");

?>