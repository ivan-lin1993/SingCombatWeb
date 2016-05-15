<?php
	include "config.php";
	$code="abcdefghijklmnopqrstuvwxyz12345678901234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for($c=0;$c<60;$c++){
		$out="";
		for($i=0;$i<25;$i++){
			$out.=$code[rand(0,strlen($code)-1)];
		}
		$sql="INSERT INTO users (code) VALUES ('$out');";
		mysql_query($sql) or die("not work");
		echo $out;
		echo "<br>";
	}
	
?>