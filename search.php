<?php 
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "registrationform");

	if(isset($_POST["add_to_cart"]))
	{
		if(isset($_SESSION["shopping_cart"]))
		{
			$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
			if(!in_array($_GET["id"], $item_array_id))
			{
				$count = count($_SESSION["shopping_cart"]);
				$item_array = array(
					'item_id'			=>	$_GET["id"],
					'item_name'			=>	$_POST["hidden_name"],
					'item_price'		=>	$_POST["hidden_price"],
					'item_quantity'		=>	$_POST["quantity"]
				);
				$_SESSION["shopping_cart"][$count] = $item_array;
			}
			else
			{
				echo '<script>alert("Item Already Added")</script>';
			}
		}
		else
		{
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][0] = $item_array;
		}
	}

	if(isset($_GET["action"]))
	{
		if($_GET["action"] == "delete")
		{
			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($values["item_id"] == $_GET["id"])
				{
					unset($_SESSION["shopping_cart"][$keys]);
					echo '<script>alert("Item Removed")</script>';
					echo '<script>window.location="search.php"</script>';
				}
			}
		}
	}

?>

<!doctype html>
<html>
	<head>
		<title>Hall Information</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<br /><br />
			<?php
			if(isset($_POST['search'])){
				$search = $_POST['search'];
				$query = "SELECT * FROM hallc WHERE name LIKE '%".$search."%'";
				$result = mysqli_query($connect, $query);
			}
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
						?>
						<div class="col-md-4">
							<form method="post" action="search.php?action=add&id=<?php echo $row["id"]; ?>">
								<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
									<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

									<h4 class="text-info"><?php echo $row["name"]; ?></h4>

									<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

									<input type="text" name="quantity" value="1" class="form-control" />

									<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

									<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

									<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

								</div>
							</form>
						</div>
						<?php
					}
				}
			?>
		
		</div>
	
	
	</body>
</html>