<?php
	echo "helo<br>";
	$dsn = 'mysql:dbname=tb230001db;host=localhost';
    $user = 'tb-230001';
    $password = 
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	echo "helo<br>";
?>
