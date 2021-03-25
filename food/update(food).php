<?php
	session_start();

	$email =  $_SESSION['$email'];
	echo $email;
	
	$old_mail = $email;
	
	$fcname=$_POST['fcname'];
	$fcloc=$_POST['fcloc'];
	$fcdes = $_POST['fcdes'];
	$fcuser = $_POST['fcuser'];
	$email=$_POST['email'];
	$pass = $_POST['pass'];
	$fcprice = $_POST['fcprice'];
	$fcph = $_POST['fcph'];
	 
	$conn = mysqli_connect('localhost','root','','registrationform');
	
	$sql = "UPDATE food SET fcname = '$fcname', fcloc = '$fcloc' , fcdes = '$fcdes', fcuser = '$fcuser', email = '$email' ,pass='$pass',fcprice='$fcprice',fcph = '$fcph'  WHERE email ='$old_mail' ";	
	echo $sql.'<br>';
	
	if(mysqli_query($conn,$sql))
	{
		header("Location: profile(food).php?email=" .$email);
	}
	else{
	   echo 'Not inserted';
	 }

 ?>
