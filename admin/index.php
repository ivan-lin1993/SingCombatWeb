﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="../css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<a class="btn btn-default" href="showSingers.php">顯示所有參加人</a>
	<a class="btn btn-default" href="addSinger.html">增加參賽者</a>
	
	<div class="dropdown">
		<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">切換目前歌手<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href='changeSinger.php?id=-1'>結束</a></li>
			<?php
				include dirname(__FILE__)."/../config.php";
				mysql_query("SET NAMES 'UTF8'");
				$sql = "SELECT * FROM singers;";
				$result=mysql_query($sql) or die('MySQL query error 4');
				while($row = mysql_fetch_array($result)){
					$name=$row['name'];
					$id=$row['id'];
					echo "<li><a href='changeSinger.php?id=$id'>";
					echo $name;
					echo "</a></li>";
				}
			?>
		</ul>
	</div>
  

	
</body>
</html>