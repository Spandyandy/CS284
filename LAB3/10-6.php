<?php
	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die ($conn->connect_error);

	if (isset($_POST['delete']) && isset($_POST['colorID']))
	{
		$colorID = get_post($conn, 'colorID');
		$query = "DELETE FROM color WHERE colorID='$colorID'";
		$result = $conn->query($query);
		if (!$result) echo "DELETE failed: $query<br>" .
			$conn->error . "<br><br>";
	}

	if (isset($_POST['colorID']) &&
	isset($_POST['name']) &&
	isset($_POST['red']) &&
	isset($_POST['green']) &&
	isset($_POST['blue']))
	{
	$colorID = get_post($conn, 'colorID');
	$name = get_post($conn, 'name');
	$red = get_post($conn, 'red');
	$green = get_post($conn, 'green');
	$blue = get_post($conn, 'blue');
	$query = "INSERT INTO color VALUES" .
	"('$colorID', '$name', '$red', '$green', '$blue')";
	$result = $conn->query($query);
	if (!$result) echo "INSERT failed: $query<br>" .
	$conn->error . "<br><br>";
	}
	echo <<<_END
	<form action="10-6.php" method="post"><pre>
		ColorID <input type="text" name="colorID">
		   Name <input type="text" name="name">
		    Red <input type="text" name="red">
		  Green <input type="text" name="green">
		   Blue <input type="text" name="blue">
		        <input type="submit" value="ADD RECORD">
	</pre></form>
	_END;
	


	$query = "SELECT * FROM color";
	$result = $conn->query($query);
	if (!$result) die("Database access failed: " . $conn->error);

	$rows = $result->num_rows;
	
	for($j = 0; $j < $rows; ++$j)
	{
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);

		echo <<<_END
	<pre>
	ColorID $row[0]
	   Name $row[1]
	    Red $row[2]
	  Green $row[3]
	   Blue $row[4]
	</pre>
	<form action="10-6.php" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="colorID" value="$row[0]">
	<input type="submit" value="DELETE RECORD"></form>
	_END;
	}
	
	$result->close();
	$conn->close();
	function get_post($conn, $var)
	{
		return $conn->real_escape_string($_POST[$var]);
	}
?>

