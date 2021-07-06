<?php
	$dsn = 'mysql:dbname=tb230001db;host=localhost';
    $user = 'tb-230001';
    $password = 'L66myFn9hG';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	$sql = 'SHOW TABLES';
	$result = $pdo -> query($sql);
	foreach ($result as $row)
		echo $row[0]."<br>";
	echo "<hr>";
?>
