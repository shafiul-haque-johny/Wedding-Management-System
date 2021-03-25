<?php
	session_start();

	$email =  $_SESSION['$email'];
	echo $email;
	
	$old_mail = $email;
	
	$pname=$_POST['pname'];
	$ploc=$_POST['ploc'];
	$pprice = $_POST['pprice'];
	$pdes = $_POST['pdes'];
	$puser = $_POST['puser'];
	$email=$_POST['email'];
	$pass = $_POST['pass'];
	$pph = $_POST['pph'];
	 
	$conn = mysqli_connect('localhost','root','','registrationform');
	
	$sql = "UPDATE photoblust SET pname = '$pname', ploc = '$ploc' , pprice = '$pprice', pdes = '$pdes', puser = '$puser', email = '$email' ,pass='$pass',pph = '$pph'  WHERE email ='$old_mail' ";	
	echo $sql.'<br>';
	if(mysqli_query($conn,$sql))
	{
		header("Location: profile(photoblust).php?email=" .$email);
	}
	else{
	   echo 'Not inserted';
	 }

 ?>
