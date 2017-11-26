<?php // cars.php
	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die ($conn->connect_error);

	if (isset($_POST['delete']) && isset($_POST['descriptionID']))
	{
		$descriptionID = get_post($conn, 'descriptionID');
		$query = "DELETE FROM color WHERE descriptionID='$descriptionID'";
		$result = $conn->query($query);
		if (!$result) echo "DELETE failed: $query<br>" .
			$conn->error . "<br><br>";
	}

	if (isset($_POST['name']) &&
	isset($_POST['brand']) &&
	isset($_POST['price']) &&
	isset($_POST['year']))
	{
	$name = get_post($conn, 'name');
	$brand = get_post($conn, 'brand');
	$price = get_post($conn, 'price');
	$year = get_post($conn, 'year');
	$query = "INSERT INTO color(name, brand, price, year) VALUES" .
	"('$name', '$brand', '$price', '$year')";
	$result = $conn->query($query);
	if (!$result) echo "INSERT failed: $query<br>" .
	$conn->error . "<br><br>";
	}
echo <<<_END
<link rel="stylesheet" href="style.css">
<form action="cars.php" method="post"><pre>
	<div class = "add">
   Name <input type="text" name="name">
  Brand <input type="text" name="brand" style='color:red'>
  Price <input type="text" name="price" style='color:green'>
   Year <input type="text" name="Year" style='color:blue'>
	<input type="submit" value="ADD CAR">
	</div>	
	</pre></form> 
_END;
	$query = "select car.carID, name, brand, price, year, engine, horsepower, engineRev, maxSpeed from car, spec, carwithspec WHERE carwithspec.carID = car.carID AND carwithspec.specID = spec.specID";
	$result = $conn->query($query);
	if (!$result) die("Database access failed: " . $conn->error);

	$rows = $result->num_rows;
	
	for($j = 0; $j < $rows; ++$j)
	{
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
	
	echo <<<_END
	<hr style='clear:both'>
	<form action="cars.php" method="post" style="float:left">
	
	<img src = "pics/$row[0].jpg">

	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="carID" value="$row[0]">
	<div class = "record">
	<pre>
<button type="submit" formaction="pics/$row[0].jpg">Click to enlarge image!</button>
CarID: 		   	 $row[0]
Name : 		   	 $row[1]
brand: 		    	 $row[2]
price: 		   	 $row[3]
year : 		   	 $row[4]
Engine Name:	 	 $row[5]
Horsepower:		 $row[6]
Engine Revolution Speed: $row[7] seconds (0 to 60 mph)
Maximum Speed:	 	 $row[8]
	</pre>
	</div>
_END;
	}

	$result->close();
	$conn->close();

	function get_post($conn, $var)
	{
		return $conn->real_escape_string($_POST[$var]);
	}

?>

