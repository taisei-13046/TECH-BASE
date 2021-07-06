<?php
	$dsn = 'mysql:dbname=tb230001db;host=localhost';
    $user = 'tb-230001';
    $password = 'L66myFn9hG';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	$sql = 'SHOW CREATE TABLE tbtest';
	$result = $pdo -> query($sql);
	var_dump($result);
	foreach ($result as $row)
		echo $row[1];
	echo "<hr>";
?>
