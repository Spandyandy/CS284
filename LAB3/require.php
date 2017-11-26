<?php
	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($connection->connect_error) die ('did not connect!');
?>
