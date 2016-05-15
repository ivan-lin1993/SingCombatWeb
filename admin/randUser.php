<?php
	include dirname(__FILE__)."/../config.php";
	$code="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$code2="1234567890";
	for($c=0;$c<20;$c++){
		$out="";
		for($i=0;$i<4;$i++){
			$out.=$code[rand(0,strlen($code)-1)];
		}
		for($i=0;$i<2;$i++){
			$out.=$code2[rand(0,strlen($code2)-1)];
		}
		$site="http://140.122.184.227/~ivan/singWeb/login.php?code=".$out;
		$sql="INSERT INTO users (code,site) VALUES ('$out','$site');";
		mysql_query($sql) or die("not work");
		echo $out." ,".$site;
		
		echo "<br>";
	}
	
?>