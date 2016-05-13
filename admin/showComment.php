<!DOCTYPE html>
<?php
	include dirname(__FILE__)."/../config.php";
	$id=$_GET['commentTo'];
	$sql="SELECT * FROM comments WHERE commentTo='$id';";
	$result=mysql_query($sql);
	print 
	"<table border='5'>
		<tr>
			<th>評論內容</th>
		</tr>";
	while($row=mysql_fetch_array($result)){
		print "<tr>";
		print "<td>".$row['commentText']."</td></tr>";
	}
	print "</table>";
?>