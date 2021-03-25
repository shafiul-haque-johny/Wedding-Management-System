<?php
	session_start();

	$email =  $_SESSION['$email'];
	echo $email;
	
	$old_mail = $email;
	
	$dname=$_POST['dname'];
	$daddress=$_POST['daddress'];
	$dphone = $_POST['dphone'];
	$email=$_POST['email'];
	$dusername = $_POST['dusername'];
	$pass = $_POST['pass'];
	$dprice = $_POST['dprice'];
	
	 
	$conn = mysqli_connect('localhost','root','','registrationform');
	
	$sql = "UPDATE decoration SET dname = '$dname', daddress = '$daddress' ,dphone = '$dphone'  ,  email = '$email' ,dusername = '$dusername',pass='$pass', dprice='$dprice' WHERE email ='$old_mail' ";	
	echo $sql.'<br>';
	if(mysqli_query($conn,$sql))
	{
		header("Location: profile(decoration).php?email=" .$email);
	}
	else{
	   echo 'Not inserted';
	 }

 ?>
