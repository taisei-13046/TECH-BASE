<?php
	echo "helo<br>";
	$dsn = 'mysql:dbname=tb230001db;host=localhost';
    $user = 'tb-230001';
    $password = 
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	$sql = "CREATE TABLE IF NOT EXISTS tbtest (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(32) NOT NULL,
		comment TEXT
	)";
	$stmt = $pdo->query($sql);
	echo "helo<br>";
?>
