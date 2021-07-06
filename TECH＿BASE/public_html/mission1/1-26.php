<?php
    $fp = fopen("mission-1-24.txt", "a+");
    $str = "hello<br>";
    fwrite($fp, $str);
    echo "書き込み成功<br>";
    fclose($fp);
    if (file_exists("mission-1-24.txt"))
    {
        $text = file_get_contents("mission-1-24.txt");
        echo $text;   
    }
?>