﻿<?php
	if($_COOKIE['admin']!="Yes"){
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="../css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<a class="btn btn-default" href="showSingers.php">顯示所有參加人</a>
	<a class="btn btn-default" href="addSinger.html">增加參賽者</a>
	<a class="btn btn-default" href="showUser.php">顯示使用者帳號狀況</a>
	<div class="dropdown">
		<label>目前歌唱</label>
		<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
		<?php 
			include dirname(__FILE__)."/../config.php";
			mysql_query("SET NAMES 'UTF8'");
			$sql = "SELECT * FROM nowSinger;";
			$result=mysql_query($sql) or die('MySQL query error 5');
			$row = mysql_fetch_array($result);
			$id=$row['id'];
			
			mysql_query("SET NAMES 'UTF8'");
			$sql = "SELECT * FROM singers WHERE id='$id';";
			$result=mysql_query($sql) or die('MySQL query error 6');
			$row=mysql_fetch_array($result);
			echo $row['name'];
		?>
		 <span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href='changeSinger.php?id=-1'>結束</a></li>
			<?php
				
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
	<div>
		<form id="commentForm" action="showComment.php" method="get">
			<label>顯示留言</label>
			<select name="commentTo">
				<?php 
					mysql_query("SET NAMES 'UTF8'");
					$sql = "SELECT * FROM singers;";
					$result=mysql_query($sql) or die('MySQL query error 4');
					while($row = mysql_fetch_array($result)){
						echo "<option value=".$row['id'].">";
						echo $row['name'];
						echo "</option>";
					}
				?>
			</select>
			<button class="btn" type="submit">查詢</button>
		</form>
	</div>
	
</body>
</html>