<?php
    include_once('functions.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Задание 2</title>
</head>
<body>


    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2>Задание 2</h2>
            </div>
        </div>


        <div class="row">

            <div class="col-6">
                <form action="task2.php" method="POST">
                    <div class="form-group">
                        <label for="month">Введите номер месяца:</label>
                        <input type="text" name="month" class="form-control">
                    </div>
                    <button type="submit" name="btnShow" class="btn btn-primary">Показать</button>
                </form>
            </div>

            <div class="col-6">
                <?php 
                    if (isset($_POST['btnShow'])) {
                        ShowMonth($_POST['month']);
                    }
                ?>
            </div>

        </div>
    </div>

    

    
    
</body>
</html>