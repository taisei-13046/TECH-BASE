<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-20</title>
</head>
<body>
    <form method="post">
        <input type="text" name="numGet"><br>
        <input type="submit" name="submit">
    </form>
    <?php
        if (isset($_POST['numGet']))
            $num = $_POST['numGet'];
        if (isset($num))
        {
            if ($num % 3 == 0 && $num % 5 == 0)
                echo "FizzBuzz<br>";
            else if ($num % 3 == 0)
                echo "Fizz<br>";
            else if ($num % 5 == 0)
                echo "Buzz<br>";
            else
                echo $num;
        }
    ?>
</body>
</html>