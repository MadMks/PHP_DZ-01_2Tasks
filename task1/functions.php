<?php
    function ShowForm(){
?>
        <form method="POST">
            <div class="form-group">
                <label for="red">Red:</label>
                <input type="text" name="red" class="form-control">
            </div>
            <div class="form-group">
                <label for="green">Green:</label>
                <input type="text" name="green" class="form-control">
            </div>
            <div class="form-group">
                <label for="blue">Blue:</label>
                <input type="text" name="blue" class="form-control">
            </div>

            <button type="submit" name="btnShow" 
                class="btn btn-primary">Accept</button>
        </form>   
<?php                    
    }

    function ShowSpan(){
        if (isset($_POST['btnShow'])) {
            $red = !empty($_POST['red']) ? $_POST['red'] : 0;
            $green = !empty($_POST['green']) ? $_POST['green'] : 0;
            $blue = !empty($_POST['blue']) ? $_POST['blue'] : 0;

            if (($red < 0 || $red > 255)
                || ($green < 0 || $green > 255)
                || ($blue < 0 || $blue > 255)) {
                echo("<div class='alert alert-danger'>
                Введите значение цвета
                в интервале от 0 до 255!
                </div>");
                exit();
            }
?>
            <span style="padding: 15px 20px;
            color: rgb(<?=FindFontColor($blue)?>,
                <?=FindFontColor($red)?>,
                <?=FindFontColor($green)?>);
            background-color: rgb(<?=$red?>, <?=$green?>, <?=$blue?>)">Span</span>
<?php
        }
    }

    function FindFontColor($nColor){
        return $nColor = 255 - $nColor;
    }
?>