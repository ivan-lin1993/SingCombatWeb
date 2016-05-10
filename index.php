<?php 
	include "function.php";
	getNowSinger();
	/*if($_COOKIE['_user']==null){
		echo "請先登入";
		exit;
	}*/
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
<script src="js/myfunction.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
</head>
<body onload="initial();">
<nav class="navbar navbar-default">
	<div class="navbar-header">
		
		<a class="navbar-brand" href="">宿舍好聲音</a>
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
				<button class="navbar-btn" onclick="location.reload();">評目前歌手</button>
			</li>
		</ul>

	</div>
</nav>
<?php
//include "function.php";
//getSingers();

?>
<center id="all_info" style="display:block;">
<img src="<?php getSingerPic();?>" width="50%"></img>

<?php showNowSinger();?>

<br>
<form id="voteForm" action="addVote.php" method="post" style="display: block;">
	<label for="rate_input" class="control-label">評分</label>
	<input name="rate_input" value="0" type="number" class="rating" min=0 max=5 step=1 data-size="sm">
	<button class="btn btn-primary" type="submit">送出分數</button>
</form>
<form id="hotVote" action="addHotVote.php">
	<button class="btn btn-info" type="submit">人氣王投票</button>
</form>

<form id="commentForm" action="addComment.php" method="post">
	<input name="commentText" type="textarea"></input>
	<button class="btn btn-success" type="submit">送出打氣</button>
</form>
</center>
<center id="finish" style="display:none;">
	<h1>活動結束 謝謝大家 :)</h1>
	<h1>點我填問卷</h1>
</center>

</body>
</html>
