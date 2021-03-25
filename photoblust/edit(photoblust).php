<?php

	session_start();

	$email =  $_SESSION['$email'];
	$conn = new mysqli('localhost','root','','registrationform');
	$sql = "SELECT * FROM photoblust where email=$email";
	$result = $conn->query($sql);
	$photoblust_info = mysqli_fetch_assoc($result);

 ?>

<!doctype html>
<html lang="en">
	
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<title>Edit Profile Photoblust Comp. </title>
	</head>
	
	<br><br>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				</div>

				<div class="col-md-5">
				  <h1>Edit Registration Form</h1>
				  <hr>


			 
					<form action="update(photoblust).php" method="POST">
				 
						<div class="form-group">
							<label for="name">Photography Comp. name:</label>
							<input type="text" class="form-control" name="pname" required="required"   value="<?php echo $photoblust_info['pname']; ?>">
						
						</div>
					  
						<div class="form-group">
							<label for="name">Photography Comp. Location:</label>
							<input type="text" class="form-control" name="ploc" required="required"   value="<?php echo $photoblust_info['ploc']; ?>">
						
						</div>
						
						<div class="form-group">
							<label for="name">Price:</label>
							<input type="text" class="form-control" name="pprice" required="required"   value="<?php echo $photoblust_info['pprice']; ?>">
						
						</div>
					  
						<div class="form-group">
							<label for="name">Description:</label>
							<input type="text" class="form-control" name="pdes" required="required"   value="<?php echo $photoblust_info['pdes']; ?>">
						
						</div>
					  
						<div class="form-group">
							<label for="name"> User name:</label>
							<input type="text" class="form-control" name="puser" required="required"   value="<?php echo $photoblust_info['puser']; ?>">
						
						</div>
					  
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" name="email" required="required"  value="<?php echo $photoblust_info['email']; ?>">
						
						</div>
					  
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="pass" required="required"  value="<?php echo $photoblust_info['pass']; ?>">
						</div>
					   
						<div class="form-group">
							<label for="phone">Phone Number</label>
							<input type="text" class="form-control" name="pph" required="required"  value="<?php echo $photoblust_info['pph']; ?>">
						</div>
					  


						<button type="submit" class="btn btn-primary">Submit</button>  
					
					</form>

				</div>

			</div>

		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	</body>

</html>
