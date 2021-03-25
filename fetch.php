<?php
$connect = mysqli_connect("localhost", "root", "", "registrationform");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM hal 
	WHERE hname LIKE '%".$search."%'
	OR hloc LIKE '%".$search."%' 
	
	";
}
else
{
	$query = "SELECT * FROM hal ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>hall Name</th>
							<th>Address</th>
							<th>capacity</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["hname"].'</td>
				<td>'.$row["hloc"].'</td>
				<td>'.$row["hcap"].'</td>
				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>