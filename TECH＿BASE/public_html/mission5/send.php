<!DOCTYPE html>
<meta charset="UTF-8">
<title>掲示板サンプル</title>
<h1>掲示板</h1>
<section>
    <h2>投稿完了</h2>
    <button onclick="location.href='Bboard.php'">戻る</button>
</section>
<?php
	$id = NULL;
	$name = $_POST['name'];
	$contents = $_POST['contents'];
	//データベース接続
	$dsn = 'mysql:dbname=tb230001db;host=localhost';
    $user = 'tb-230001';
    $password = 
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	$sql = $pdo -> prepare("INSERT INTO post (id, name, contents) VALUES (:id, :name, :contents)");
	$sql -> bindParam(':id', $id, PDO::PARAM_INT);
	$sql -> bindParam(':name', $name, PDO::PARAM_STR);
	$sql -> bindParam(':contents', $contents, PDO::PARAM_STR);
	$sql -> execute();
?>
