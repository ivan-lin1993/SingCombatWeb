<?php
	include dirname(__FILE__)."/../config.php";
	mysql_query("SET NAMES 'UTF8'");
	$sql="SELECT * FROM singers;";
	$result=mysql_query($sql) or die("Can't Print");
	
	
	echo "<table border='5'>";
	echo "<tr>";
	echo "<th>id</th><th>名字</th><th>系級</th><th>歌</th><th>介紹</th>";
	echo "</tr>";
	
	
	while($row=mysql_affected_rows($result)){
		//echo $row['id'];
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['song']."</td>";
		echo "<td>".$row['about']."</td>";
		
		echo "</tr>";
	}
	
	echo "</table>";
?>