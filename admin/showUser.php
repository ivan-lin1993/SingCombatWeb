<?php
	include dirname(__FILE__)."/../config.php";
	mysql_query("SET NAMES 'UTF8'");
	$sql="SELECT * FROM users;";
	$result=mysql_query($sql) or die("Can't Print");
	
	
	echo "<table border='5'>";
	echo "<tr>";
	echo "<th>id</th><th>code</th><th>active</th>";
	echo "</tr>";
	
	
	while($row=mysql_fetch_array($result)){
		//echo $row['id'];
		$id=$row['id'];
		$code=$row['code'];
		if($row['verify']){
			$verify='Have Been Used';
		}
		else{
			$verify='Not';
		}
		echo "<tr>";
		echo "<td>".$id."</td>";
		
		echo "<td>".$code."</td>";
		echo "<td>".$verify."</td>";
		
		echo "</tr>";
	}
	
	echo "</table>";
?>