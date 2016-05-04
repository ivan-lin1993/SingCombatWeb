<?php
	include "config.php";
	function addComment($commentFrom,$commentTo,$commentText){
		mysql_query("SET NAMES 'UTF8'");
		$sql = "INSERT INTO comments (commentFrom,commentTo, commentText) VALUES ('$commentFrom','$commentTo', '$commentText');";
		mysql_query($sql) or die('MySQL query error 1');
	}
	function addVote($fromWho,$toWho,$vote){
		if($_COOKIE[$fromWho]=="Yes"){
			mysql_query("SET NAMES 'UTF8'");
			$sql = "INSERT INTO votes (fromWho,toWho, score) VALUES ('$fromWho','$toWho', '$score');";
			mysql_query($sql) or die('MySQL query error 2');
			User_setCookie($fromWho,"Yes");
		}
	}
	function showComments($commentTo){
		mysql_query("SET NAMES 'UTF8'");
		$sql = "SELECT * FROM comments WHERE commentTo='$commentTo';";
		$result=mysql_query($sql) or die('MySQL query error 3');
		/*
		while($row = mysql_fetch_array($result)){
		
			$row= json_encode($row,JSON_UNESCAPED_UNICODE);
			echo $row;
		}
		*/
	}
	function showSingerList(){
		mysql_query("SET NAMES 'UTF8'");
		$sql = "SELECT * FROM singers;";
		$result=mysql_query($sql) or die('MySQL query error 4');
		while($row = mysql_fetch_array($result)){
			echo "<li><a>";
			echo $row['name'];
			echo "</a></li>";
		}
	}
	function showNowSinger(){
		
		mysql_query("SET NAMES 'UTF8'");
		$sql = "SELECT * FROM nowSinger;";
		$result=mysql_query($sql) or die('MySQL query error 5');
		$row = mysql_fetch_array($result);
		$id=$row['id'];
		
		mysql_query("SET NAMES 'UTF8'");
		$sql = "SELECT * FROM singers WHERE id='$id';";
		$result=mysql_query($sql) or die('MySQL query error 6');
		
		while($row = mysql_fetch_array($result)){
			echo "<tr><td>";
			echo $row['name'];
			echo "</td></tr>";
			
			echo "<tr><td>";
			echo $row['department'];
			echo "</td></tr>";
			
			echo "<tr><td>";
			echo $row['song'];
			echo "</td></tr>";
			
		}
		
	}
	//******************************************************************
	function showSingerVotes($id){
		mysql_query("SET NAMES 'UTF8'");
		$sql = "SELECT * FROM votes WHERE id='$id';";
		$result=mysql_query($sql) or die('MySQL query error 5');
		$i=0;
		$total=0;
		while($row = mysql_fetch_array($result)){
			$total+=$row['score'];
			$i+=1;
		}
	}
	function User_setCookie($key,$value){
		setcookie($key, $value,time()+3600*4);
	}
	function isCookie($key,$value){
		setcookie($key, $value,time()+3600*4);
	}
?>