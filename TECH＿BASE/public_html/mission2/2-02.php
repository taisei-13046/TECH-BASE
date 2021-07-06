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
            $file = "mission_2-2.txt";
            $fp = fopen($file, "w+");
            fwrite($fp, $comment);
            fclose($fp);
            $txt = file_get_contents($file);
            if ($txt == "完成！")
                echo "おめでとう！";
            else
                echo $txt;
        }
    ?>
</body>
</html>