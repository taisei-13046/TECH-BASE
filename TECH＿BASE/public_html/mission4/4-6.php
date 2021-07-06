<?php
	$dsn = 'mysql:dbname=tb230001db;host=localhost';
    $user = 'tb-230001';
    $password =
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	$sql = 'SELECT * FROM tbtest';
	$stmt = $pdo->query($sql);
	$result = $stmt->fetchAll();
	foreach ($result as $row)
	{
		echo $row['id'].',';
		echo $row['name'].',';
		echo $row['comment'].'<br>';
		echo "<hr>";
	}
?>
