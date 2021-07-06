<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-20</title>
</head>
<body>
    <form method="post">
        <input type="text" name="username"><br>
        <input type="submit" name="submit">
    </form>
    <?php
      echo $_POST['username'];  
    ?>
</body>
</html>