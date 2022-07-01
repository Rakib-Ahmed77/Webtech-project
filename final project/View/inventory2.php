<?php

    $name = $_POST['name'];
	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from inventory where name like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0)
	{

	$response = "<center><hr/><h2>Inventory</h2><hr/></center>
	<table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
					<tr>
						<td>Product Name</td>
						<td>Quantity</td>
						<td>Product Type</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							<td>{$row['name']}</td>
							<td>{$row['quantity']}</td>
							<td>{$row['type']}</td>
						</tr>";
	}

	$response .= "</table>";

	mysqli_close($conn);

	echo $response;
}else{
	echo "<br><center><h2>No Data Found</h2></center>";

}


?>