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
        <label for="month">Введите номер месяца:</label>
        <input type="text" name="month">
        <button type="submit" name="btnShow">Показать</button>
    </form>

    <?php 
        if (isset($_POST['btnShow'])) {
            ShowMonth($_POST['month']);
        }
    ?>
    
</body>
</html>