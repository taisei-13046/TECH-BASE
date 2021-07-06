<?php
    //6
    $name = "スズキ";
    $number = 500;
    
    echo "ようこそ${name}さん <br>";
    echo "代金は${number}円です<br>";
    
    //7
    $number = 400;
    echo "代金は${number}円です<br>";
    
    //8
    $a = 10;
    $b = 5;
    $ans = $a + $b;
    echo "${ans}<br>";
    
    //9
    $num = 5;
    echo "${num}<br>";
    $num += 10;
    echo "${num}<br>";
    
    //10
    $result_add = 6 + 2;
    echo "6 + 2 = ${result_add}<br>";
    
    $result_add = 6 - 2;
    echo "6 - 2 = ${result_add}<br>";
    
    $result_add = 6 % 2;
    echo "6 % 2 = ${result_add}<br>";
    
    $result_add = 6 / 2;
    echo "6 / 2 = ${result_add}<br>";
    
    $result_add = 6 * 2;
    echo "6 * 2 = ${result_add}<br>";
    
    //11
    $hello = "hello world";
    echo "${hello}<br>";
    
    //12
    $str = "hello";
    echo "${str}<br>";
    $str = "world";
    echo "${str}<br>";
    
    //13
    $member = "安井";
    echo $member."さんこんにちは<br>";
    
    //14
    $str = "this is";
    $num = 5;
    echo $str.$num."<br>";
    
    //15
    $date = date("Y年m月d日 H時i分s秒");
    echo $date."<br>";
    
    //16
    $num = 5;
    var_dump($num == 5);
    var_dump($num == 4);
    
    //17
    $num = 15;
    if ($num % 3 == 0 && $num % 5 == 0)
        echo "FizzBuzz<br>";
    else if ($num % 3 == 0)
        echo "Fizz<br>";
    else if ($num % 5 == 0)
        echo "Buzz<br>";
    else
        echo $num;
    
    //18
    for ($i = 0; $i < 10; $i++)
        echo "$i<br>";
        
    //19
    for ($i = 0; $i < 100; $i++)
    {
        if ($i % 3 == 0 && $i % 5 == 0)
            echo "FizzBuzz<br>";
        else if ($i % 3 == 0)
            echo "Fizz<br>";
        else if ($i % 5 == 0)
            echo "Buzz<br>";
        else
            echo $i."<br>";
    }