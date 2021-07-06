<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-20</title>
    <style type="text/css">
        #form {
            float: left;
            padding-right: 10px;
        }
        #post {
            float: left;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form method="post" id="form">
        <input type="text" name="name" placeholder="名前　"><br>
        <input type="text" name="comment" placeholder="コメント"><br>
        <input type="submit" name="submit"><br>
    </form>
    <form method="post" id="delete">
        <input type="text" name="deletenum"><br>
        <input type="submit" name="submit"><br>
    </form>
    <?php
        if (isset($_POST['comment']) && isset($_POST['name']))
        {
            $name = $_POST['name'];
            $comment = $_POST['comment'];
        }
        $file = "mission_3-3.txt";
        //コメントを受け付けて表示する
        if ((isset($comment) && !$comment == "") && (isset($name) && !$name == ""))
        {
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
            {
                $buf = explode("<>", $str);
                for ($i = 0; $i < 4; $i++)
                    echo $buf[$i]." ";
                echo "<br>";
            }
        }
        //コメントを消す
        if (isset($_POST['deletenum']))
            $deletenum = $_POST['deletenum'];
        // if (isset($deletenum) and !$deletenum == "")
        // {
        //     $delCon = file($file, FILE_IGNORE_NEW_LINES);
        //     var_dump($delCon);
        //     $fp = fopen($file, "w+");
        //     for ($i = 0; $i < count($delCon); $i++)
        //     {
        //         $buf = explode("<>", $line[$i]);
        //         var_dump($buf);
        //         // if $buf == $deletenum
        //         //     fwrite($file, "".PHP_EOL);
        //         // else
        //         //     fwrite($file, $line[$i]);
        //     }
        // }
        if (isset($_POST["deletenum"])) {
            $delete = $_POST["deletenum"];
            $delCon = file("mission_3-3.txt");
        
            $fp = fopen("mission_3-3.txt", "w");
            for ($j = 0; $j < count($delCon); $j++)
            {
                $delDate = explode("<>", $delCon[$j]);
                if ($delDate[0] != $delete)
                    fwrite($fp, $delCon[$j]);
                else
                    fwrite($fp, "");
            }
        }
        fclose($fp);
    ?>
</body>
</html>