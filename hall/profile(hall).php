<?php
	session_start();
	$_SESSION['$email']=$_GET['email'];
	$email = $_GET['email'];
	$conn = new mysqli('localhost','root','','registrationform');
	$sql = "SELECT * FROM hal WHERE email = '$email'";
	
	$result = $conn->query($sql);

	$hall_info = mysqli_fetch_assoc($result);
 
 ?>
 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>hall_info!</title>
    <style media="screen">
      .color{
         background-color: #4CAF50;
      }
    </style>
  </head>
  
	<body>

		<form action="edit(hall).php?email=".$email" method="POST">
			<div class="container">
			  <div class="row">
				<div class="col-md-2">         
				</div>
				<div class="col-md-9">
				  <h1>Hall Information</h1>
				  <hr>
				  <table class="table">
					<tr>
					  <th width="150" class="text-right">Hall Name:</th>
					  <td><?php echo $hall_info['hname']; ?></td>
					</tr>
					<tr>
					  <th width="150" class="text-right">Location :</th>
					  <td><?php echo $hall_info['hloc']; ?></td>
					</tr>
					
					<tr>
					  <th width="150" class="text-right">Capacity :</th>
					  <td><?php echo $hall_info['hcap']; ?></td>
					</tr>
					
					<tr>
					  <th width="150" class="text-right">Description :</th>
					  <td><?php echo $hall_info['hdes']; ?></td>
					</tr>
					
					<tr>
					  <th width="150" class="text-right">Price :</th>
					  <td><?php echo $hall_info['hprice']; ?></td>
					</tr>
					
					<tr>
					  <th width="150" class="text-right">Phone Number :</th>
					  <td><?php echo $hall_info['hphone']; ?></td>
					</tr>
					<tr>
					  <th width="150" class="text-right">Email:</th>
					  <td><?php echo $hall_info['email']; ?></td>
					</tr>
					
					<tr>
					  <th width="150" class="text-right">User Name :</th>
					  <td><?php echo $hall_info['huser']; ?></td>
					</tr>
					
					<tr>
					  <th width="150" class="text-right">Password:</th>
					  <td><?php echo $hall_info['pass']; ?></td>
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
