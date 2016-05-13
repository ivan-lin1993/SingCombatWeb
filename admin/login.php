<?php
	if($_POST['password']!=null){
		if($_POST['password']=='admin'){
			setcookie("admin","Yes",time()+9*3600);
			header("Location: index.php");
		}
		else{
			print "錯誤密碼";
		}
	}
	if($_COOKIE['admin']=="Yes"){
		header("Location: index.php");
	}
?>
<form action="login.php" method="post">
	<input name="password" type="textarea"></input>
	<button type="submit">確認</button>
	
	
</form>