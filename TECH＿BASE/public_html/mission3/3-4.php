<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-20</title>
    <style type="text/css">
        .inline_block {
            display: inline-block;      /* インラインブロック要素にする */
            background-color:  #ccc;    /* 背景色指定 */
            padding:  20px;             /* 余白指定 */
            height: 100px;              /* 高さ指定 */
        }
        
        #form {
            display: inline-block;      /* インラインブロック要素にする */
            background-color:  #ccc;    /* 背景色指定 */
            padding:  40px;             /* 余白指定 */
            height: 140px;
        }
    </style>
</head>
<body>
    <form method="post" class="inline_block" id="form">
        <input type="text" name="name" placeholder="名前"><br>
        <input type="text" name="comment" placeholder="コメント"><br>
        <input type="submit" name="submit"><br>
    </form>
    <form method="post" class="inline_block">
        <input type="text" name="deletenum" placeholder="削除"><br>
        <input type="submit" name="submit"><br>
    </form>
    <form method="post" class="inline_block">
        <input type="text" name="editnum" placeholder="編集"><br>
        <input type="text" name="edit_name" placeholder="名前"><br>
        <input type="text" name="edit_comment" placeholder="コメント"><br>
        <input type="submit" name="submit"><br>
    </form>
    <?php
        if (isset($_POST['comment']) && isset($_POST['name']))
        {
            $name = $_POST['name'];
            $comment = $_POST['comment'];
        }
        $file = "mission_3-4.txt";
        $date = date("Y/m/d H:i:s");
        //コメントを受け付けて表示する
        if ((isset($comment) && !$comment == "") && (isset($name) && !$name == ""))
        {
            $fp = fopen($file, "a+");
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
        if (isset($_POST["deletenum"])) {
            $delete = $_POST["deletenum"];
            $delCon = file($file);
            $fp = fopen($file, "w");
            for ($j = 0; $j < count($delCon); $j++)
            {
                $delDate = explode("<>", $delCon[$j]);
                if ($delDate[0] != $delete)
                    fwrite($fp, $delCon[$j]);
                else
                    fwrite($fp, "");
            }
            fclose($fp);
        }
        if ((isset($_POST['editnum'])) && (isset($_POST['edit_comment'])) && (isset($_POST['edit_name'])))
            {
                $deletenum = $_POST['editnum'];
                $editComment = $_POST['edit_comment'];
                $editName = $_POST['edit_name'];
            }
        if (isset($_POST['editnum']))
        {
            $edit = $_POST['editnum'];
            $editCon = file($file);
            $fp = fopen($file, "w");
            for ($i = 0; $i < count($editCon); $i++)
            {
                $editData = explode("<>", $editCon[$i]);
                if ($editData[0] != $edit)
                    fwrite($fp, $editCon[$i]);
                else
                    fwrite($fp, "${i}<>${editName}<>${editComment}<>${date}".PHP_EOL);
            }
            fclose($fp);
        }
    ?>
</body>
</html>