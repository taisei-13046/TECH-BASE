<?php
	$dsn = 'mysql:dbname=tb230001db;host=localhost';
    $user = 'tb-230001';
    $password = 
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	$sql = $pdo -> prepare("INSERT INTO tbtest (name, comment) VALUES (:name, :comment)");
	//変数をバインドする
	$sql -> bindParam(':name', $name, PDO::PARAM_STR);
	$sql -> bindParam(':comment', $comment, PDO::PARAM_STR);
	$name = 'taisei';
	$comment = 'aaaaaa';
	//この時点で実行される
	$sql -> execute();
?>
