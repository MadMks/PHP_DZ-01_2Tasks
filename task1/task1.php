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
    <title>Задание 1</title>
</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2>Задание 1</h2>
            </div>
        </div>


        <div class="row">

            <div class="col-6">
                <?php ShowForm(); ?>
            </div>

            <div class="col-6">
                <?php ShowSpan(); ?>
            </div>

        </div>
    </div>
    
</body>
</html>