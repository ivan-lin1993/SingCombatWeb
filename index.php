<?php 
	include "function.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Sing Web</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/star-rating.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="navbar-header">
		
		<a class="navbar-brand" href="">宿舍歌唱大賽</a>
    </div>
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">節目<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<?php 
						showSingerList();
					?>
				</ul>
			</li>
			<li style="float: right;">
				<button class="btn" onclick="location.reload();">評下一位</button>
			</li>
		</ul>

	</div>
</nav>
<?php
//include "function.php";
//getSingers();

?>
<center>
<img src="upload/0.png" width="50%"></img>
<table>
<div class="">
<?php showNowSinger();?>
</table>
<br>
<label for="rate_input" class="control-label">評分</label>
<input id="rate_input" value="0" type="number" class="rating" min=0 max=5 step=1 data-size="sm">
</center>

</body>
</html>
