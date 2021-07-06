<?php
    $fp = fopen("mission-1-24.txt", "w");
    fwrite($fp, "書き込み成功");
    $text = file_get_contents("mission-1-24.txt");
    echo $text;
    fclose($fp);
?>