<?php
    include("conn.php");

	$lessonId=$_POST["id"];
	$lessonKey=$_POST["signKey"];

	$sql= "insert into lessonKey(lessonid,lessonKey,state,time)values ('$lessonId','$lessonKey','true',Now())"; 
 	mysqli_query($conn, $sql);

	echo "插入成功";

　　?>