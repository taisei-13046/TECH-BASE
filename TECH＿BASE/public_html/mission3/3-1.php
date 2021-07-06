<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-20</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="名前　"><br>
        <input type="text" name="comment" placeholder="コメント"><br>
        <input type="submit" name="submit"><br>
    </form>
    <?php
        if (isset($_POST['comment']) && isset($_POST['name']))
        {
            $name = $_POST['name'];
            $comment = $_POST['comment'];
        }
        if ((isset($comment) && !$comment == "") && (isset($name) && !$name == ""))
        {
            $file = "mission_3-1.txt";
            $fp = fopen($file, "a+");
            $date = date("Y/m/d H:i:s");
            $lines = file($file, FILE_IGNORE_NEW_LINES);
            $lastline = $lines[count($lines)-1];
            $num = explode("<>",$lastline);
            $lastnum = 1;
            $lastnum = $num[0]+1;
            fwrite($fp, "${lastnum}<>${name}<>${comment}<>${date}".PHP_EOL);
            fclose($fp);
            $line = file($file, FILE_IGNORE_NEW_LINES);
            foreach ($line as $str)
                echo $str."<br>";
        }
    ?>
</body>
</html>