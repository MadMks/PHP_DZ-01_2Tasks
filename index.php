<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Основы, работа с формами, работа с функциями.</title>
</head>
<body>
    
    <div class="container">
        <div class="row">

            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Задание 1</h5>
                        <p class="card-text">
                            Написать PHP скрипт, создающий на странице три текстовых
                            поля. В эти поля пользователь должен заносить значения R, G
                            и B цветовых компонент (в интервале 0-255). На странице также
                            должна присутствовать кнопка Accept и тег span с каким-либо
                            текстом внутри.<br>
                            <br>
                            После нажатия на кнопку Accept, надо создать цвет на основе
                            введенных пользователем значений R, G и B. Этим цветом залить
                            фон тега span, а текст залить дополнительным цветом.
                        </p>
                        <a href="task1/task1.php" class="btn btn-primary"
                        target="_blank">Посмотреть</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Задание 2</h5>
                        <p class="card-text">
                            Создать функцию, которая принимает в качестве параметра
                            целочисленное значение month в интервале от 1 до 12. Это 
                            значение интерпретируется как номер месяца текущего года. При
                            вызове функция должна вывести на странице в виде таблицы
                            календарь одного месяца текущего года, соответствующего 
                            переданному значению month.<br>
                            <br>
                            Формат календаря продумать самостоятельно. Предусмотреть
                            реакцию функции на неправильные значения month. Для 
                            оформления использовать CSS, выделять цветом выходные дни и т.п.
                        </p>
                        <a href="task2/task2.php" class="btn btn-primary"
                        target="_blank">Посмотреть</a>
                    </div>
                </div>

            </div>
                
        </div>
    </div>

</body>
</html>