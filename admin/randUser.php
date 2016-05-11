<?php
	include dirname(__FILE__)."/../config.php";
	$code="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$code2="1234567890";
	for($c=0;$c<60;$c++){
		$out="";
		for($i=0;$i<4;$i++){
			$out.=$code[rand(0,strlen($code)-1)];
		}
		for($i=0;$i<2;$i++){
			$out.=$code2[rand(0,strlen($code2)-1)];
		}
		$sql="INSERT INTO users (code) VALUES ('$out');";
		mysql_query($sql) or die("not work");
		echo $out;
		echo "<br>";
	}
	
?>