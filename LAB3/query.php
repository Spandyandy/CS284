<?php
	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die ($conn->connect_error);

	$query = "SELECT * FROM apples";
	$result = $conn->query($query);
	if (!$result) die($conn->error);

	$rows = $result->num_rows;
	
	for($j = 0; $j < $rows; ++$j)
	{
		$result->data_seek($j);
		echo 'NAME: ' . $result->fetch_assoc()['name'] . '<br>';
		$result->data_seek($j);
		echo 'RED: ' . $result->fetch_assoc()['red'] . '<br>';
		$result->data_seek($j);
		echo 'GREEN: ' . $result->fetch_assoc()['green'] . '<br>';
		$result->data_seek($j);
		echo 'BLUE: ' . $result->fetch_assoc()['blue'] . '<br>';
		$result->data_seek($j);
		echo 'ID: ' . $result->fetch_assoc()['id'] . '<br><br>';
	}
	
	$result->close();
	$conn->close();
	
?>
