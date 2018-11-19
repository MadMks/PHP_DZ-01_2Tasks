<?php
function ShowMonth($month=1){
    
    if ($month < 1 || $month > 12) {
        echo("<div class='alert alert-danger'>
            Введите значение месяца
            в интервале от 1 до 12!
            </div>");
        exit();
    }
    else {
        ShowTableForMonth($month);
    }
    
}
?>

<?php
    function ShowTableForMonth($m){

        if (isset($_POST['btnShow'])) {
    
            $date = "2018-$m-01";
            $endDate = "2018-$m-".date('t', strtotime($date));
?>
            <div class="blockForTable">
                <table class="tableMonth">
                    <tbody>
                        <?php
                            ShowHeaderTable();

                            ShowDate($date, $endDate);
                        ?>
                    </tbody>
                </table>
            </div>
<?php
        }
    }

    function ShowHeaderTable(){
?>
        <tr class="trHeader">
            <td>Пн</td>
            <td>Вт</td>
            <td>Ср</td>
            <td>Чт</td>
            <td>Пт</td>
            <td>Сб</td>
            <td>Вс</td>
        </tr>
<?php
    }

    function ShowDate($date, $endDate){
        echo('<tr>');
        $countDayOfWeek = 0;
        while(strtotime($date) <= strtotime($endDate)){
            $dayNumber = date('d', strtotime($date));
            $dayOfWeek = date('N', strtotime($date));

            if ($dayNumber == 1 && $dayOfWeek != 1) {
                for ($i=1; $i < $dayOfWeek; $i++) { 
                    echo('<td></td>');
                    $countDayOfWeek++;
                }
            }

            echo("<td>$dayNumber</td>");

            if ($dayOfWeek % 7 == 0) {
                echo('</tr>');
                $countDayOfWeek = 0;
                echo('<tr>');
            }

            $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
        }
        echo('</tr>');
    }
?>