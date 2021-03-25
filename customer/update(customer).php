<?php
	session_start();

	$email =  $_SESSION['$email'];
	
	$old_mail = $email;
	echo $email;
	
	$cname=$_POST['cname'];
	$pass=$_POST['pass'];
	$caddress=$_POST['caddress'];
	$cph = $_POST['cph'];
	$email=$_POST['email'];
	 
	$conn = mysqli_connect('localhost','root','','registrationform');
	
	$sql = "UPDATE customer SET cname = '$cname', pass = '$pass' , caddress = '$caddress', cph = '$cph', email = '$email'   WHERE email ='$old_mail' ";	
	
	if(mysqli_query($conn,$sql))
	{
		header("Location: profile(customer).php?email=" .$email);
	}
	else{
	   echo 'Not inserted';
	 }

 ?>
