<?php
    include_once('functions.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="task2.php" method="POST">

    <button type="submit" name="btnShow">Показать</button>
    </form>

    <?php ShowMonth(11); ?>
    
</body>
</html>