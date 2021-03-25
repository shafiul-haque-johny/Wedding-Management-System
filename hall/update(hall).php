<?php
	session_start();

	$email =  $_SESSION['$email'];
	echo $email;
	
	$old_mail = $email;
	
	$hname=$_POST['hname'];
	$hloc=$_POST['hloc'];
	$hcap=$_POST['hcap'];
	$hdes = $_POST['hdes'];
	$huser = $_POST['huser'];
	$email=$_POST['email'];
	$pass = $_POST['pass'];
	$hprice = $_POST['hprice'];
	$hphone = $_POST['hphone'];
	 
	$conn = mysqli_connect('localhost','root','','registrationform');
	
	$sql = "UPDATE hal SET hname = '$hname', hloc = '$hloc' , hcap = '$hcap', hdes = '$hdes',huser = '$huser', email = '$email' ,pass='$pass',hprice='$hprice',hphone = '$hphone'  WHERE email ='$old_mail' ";	
	echo $sql.'<br>';
	if(mysqli_query($conn,$sql))
	{
		header("Location: profile(hall).php?email=" .$email);
	}
	else{
	   echo 'Not inserted';
	 }

 ?>
