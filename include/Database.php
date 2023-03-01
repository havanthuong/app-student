<?php
	$SERVER = "localhost";
	$USERNAME = "root";
	$PASSWORD = "";
	$DBNAME = "crudapp";
	$conn = null;
	try {
		$conn = new PDO("mysql:host=$SERVER; dbname=$DBNAME; charset=utf8", $USERNAME, $PASSWORD);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo 'Connected successfully';
	} catch (PDOException $e) {
		echo("Connection failed: " . $conn->connect_error);
		$conn = null;
	}
?>
