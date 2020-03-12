<?php 
	session_start();
	$conn = mysqli_connect("localhost","root","12345678","db_blog") or die(mysqli_error());
	mysqli_query($conn,"set names utf8");
	$id = $_SESSION['id'];
	$result = mysqli_query($conn,"select *from user2 where id=$id");
	$row = mysqli_fetch_array($result);
	$_SESSION['say']=$row['say']
?>