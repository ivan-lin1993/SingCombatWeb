<?php
	if($_POST['name']==NULL||$_POST['department']==NULL||$_POST['song']==NULL)
    {
        echo "<script>alert('錯誤');</script>";
		exit;
    }



	include dirname(__FILE__)."/../config.php";
	$name=$_POST['name'];
	$department=$_POST['department'];
	$song=$_POST['song'];
	
	mysql_query("SET NAMES 'UTF8'");
	$sql = "INSERT INTO singers (name, department , song) VALUES ('$name', '$department', '$song');";
	mysql_query($sql) or die('MySQL query error');
	
	$target_path = "upload/"; //指定上傳資料夾
	$target_path .= $_FILES['photo']['name']; //上傳檔案名稱
	echo iconv("UTF-8", "big5", $target_path );
	/*if(move_uploaded_file($_FILES['photo']['tmp_name'],
		iconv("UTF-8", "big5", $target_path ))) {
		echo "檔案：". $_FILES['photo']['name'] . " 上傳成功!";
	} 
	else{
		echo "檔案上傳失敗，請再試一次!";
	}
	*/
	header("Location: index.php");
?>