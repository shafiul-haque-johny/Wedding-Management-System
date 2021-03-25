<?php
	session_start();
	$_SESSION['$email']=$_GET['email'];
	 $email = $_GET['email'];
	 //echo $id;
	$conn = new mysqli('localhost','root','','registrationform');
	$sql = "SELECT * FROM decoration WHERE email = '$email'";
	
	$result = $conn->query($sql);

	$decoration_info = mysqli_fetch_assoc($result);
 
 ?>
 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Decoration_Info!</title>
    <style media="screen">
      .color{
         background-color: #4CAF50;
      }
    </style>
  </head>
  
	<body>

		<form action="edit(decoration).php?email=".$email" method="POST">
			<div class="container">
			  <div class="row">
				<div class="col-md-2">         
				</div>
				<div class="col-md-9">
				  <h1>Decoration Company Information</h1>
				  <hr>
				  <table class="table">
					<tr>
					  <th width="150" class="text-right">Decor Company Name:</th>
					  
					  <td><?php echo $decoration_info['dname']; ?></td>
					</tr>
					<tr>
					  <th width="150" class="text-right">Location :</th>
					  <td><?php echo $decoration_info['daddress']; ?></td>
					</tr>
					
					<tr>
					  <th width="150" class="text-right">Phone Number :</th>
					  <td><?php echo $decoration_info['dphone']; ?></td>
					</tr>
					
					<tr>
					  <th width="150" class="text-right">Email:</th>
					  <td><?php echo $decoration_info['email']; ?></td>
					</tr>
					
					<tr>
					  <th width="150" class="text-right">User Name :</th>
					  <td><?php echo $decoration_info['dusername']; ?></td>
					</tr>
					
					<tr>
					  <th width="150" class="text-right">Password:</th>
					  <td><?php echo $decoration_info['pass']; ?></td>
					</tr>
					
					<tr>
					  <th width="150" class="text-right">Price :</th>
					  <td><?php echo $decoration_info['dprice']; ?></td>
					</tr>
					
				  </table>			
				</div>
			  </div>

			</div>

		<button type="submit" class="btn btn-primary">Edit</button>  
			</form>
			<br>
			 <a href="home.php"  class="btn btn-info" role="button">Log Out</a>
			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
	</body>
</html>
