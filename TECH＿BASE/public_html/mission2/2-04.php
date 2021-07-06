<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-20</title>
</head>
<body>
    <form method="post">
        <input type="text" name="comment" value="コメント"><br>
        <input type="submit" name="submit"><br>
    </form>
    <?php
        if (isset($_POST['comment']))
            $comment = $_POST['comment'];
        if (isset($comment) && !$comment == "")
        {
            $file = "mission_2-4.txt";
            $fp = fopen($file, "a+");
            fwrite($fp, $comment.PHP_EOL);
            fclose($fp);
            $line = file($file, FILE_IGNORE_NEW_LINES);
            foreach ($line as $str)
                echo $str."<br>";
            echo "おめでとう！by安井";
        }
    ?>
</body>
</html>