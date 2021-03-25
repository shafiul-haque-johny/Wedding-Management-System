<!doctype html>

<?php
	$servername = "localhost";
	$username="root";
	$password="";
	$dbname="registrationform";
	try{
		$conn = new mysqli($servername, $username,$password,$dbname);
		}catch(MySQLi_Sql_Exception $ex){
		echo("error in connection");
		}
	
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email = $_POST['email'];
		$ph = $_POST['ph'];
		$bdate = $_POST['bdate'];
	
		
		
		$register_query = "INSERT INTO `booking`(`name`,   `email`, `ph`, `bdate`) VALUES ('$name', '$email','$ph','$bdate')";
		
		
		$SELECT = "SELECT email Form booking,customer where customer.email = $email limit 1";

		$result = $conn -> prepare($SELECT);

		try{
		
			$register_result = mysqli_query($conn, $register_query);
			if($register_result){
				if(mysqli_affected_rows($conn)>0){
				
				}else{
				echo("error in registration");
				}
		 
				}
			}catch(Exception $ex){
			echo("error".$ex->getMessage());
			}
		}

 
?>



<html>
<head>
	<meta charset="utf-8">
	<title> Order Form</title>
	
	<meta name= "viewport" content="width = device - width, initial-scale = 1, shrink-to-fit = no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<style type="text/css">
		body {
			background-color: #F1E2E2;
			font-family : arial;
			font-size : 18px;
			line-height : 18px;
			color : #000;
			padding: 4px;
			text-align: center;
			margin: 12px;
			background: url(r.jpg) no-repeat;
			margin-top: 150px;
			margin-left : 450px;
			background-size:  cover;
		}
		
		.btn-info {
			color: #fff;
			background-color: #17a2b8;
			border-color: #17a2b8;
			text-align: center;
			margin-top: auto;
			margin-right : 20px;
		}
	</style>
	
</head>
 
<body>

	<form action="" method="post">
	<table   margin-top= "7px">

	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>

	<tr>
	<td>Name:</td>
	<td><input type="text" name="name" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	

	
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td>Phone:</td>
	<td><input type="text" name="ph" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td>Email:</td>
	<td><input type="email" name="email"></td>
	 
	</tr>
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>

	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>


	<tr>
	<td></td>
	<td></td>
	</tr>
	
	
	 
	<tr>
	<td>Date:</td>
	<td><input type="date" name="bdate" value=""></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>

	<tr>
	<td></td>
	<td></td>
	</tr>

	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="Submit" style = "height: 28px;" ></td>
	</tr>
	
	
	
	<tr>
	<td></td>
	<td></td>
	<td></td>
	<br><br>
	<td><a href="http://localhost:7777/Weeding/index.html" class="btn btn-info" role="button">Back</a></td>
	</tr>
	
	
	
	</form>
	
	
	
	<!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>