<?php
	include dirname(__FILE__)."/../config.php";
	mysql_query("SET NAMES 'UTF8'");
	$sql="SELECT * FROM singers;";
	$result=mysql_query($sql) or die("Can't Print");
	
	
	echo "<table border='5'>";
	echo "<tr>";
	echo "<th>id</th><th>名字</th><th>系級</th><th>歌</th><th>分數</th><th>人氣投票</th>";
	echo "</tr>";
	
	
	while($row=mysql_fetch_array($result)){
		//echo $row['id'];
		
		$id=$row['id'];
		$sql2="SELECT SUM(score) AS total_score FROM votes WHERE toWho='$id';";
		$result2=mysql_query($sql2) or die('Shit');
		$row2=mysql_fetch_assoc($result2);
		
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['song']."</td>";
		echo "<td>".$row2['total_score']."</td>";
		
		$sql2="SELECT COUNT(*) AS hotVote FROM hot_singer_vote WHERE voteTo='$id';";
		$result2=mysql_query($sql2) or die('Shit');
		$row2=mysql_fetch_assoc($result2);
		
		echo "<td>".$row2['hotVote']."</td>";
		
		
		
		echo "</tr>";
	}
	
	echo "</table>";
?>