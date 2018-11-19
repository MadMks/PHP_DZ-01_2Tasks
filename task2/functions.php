<?php
function ShowMonth($month=1){
    
    if ($month < 1 || $month > 12) {
        echo("Введите значение месяца
        в интервале от 1 до 12");
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
            echo '$m = '.$m.'</br>';    // FIX
    
            $date = "2018-$m-01";
            $endDate = "2018-$m-".date('t', strtotime($date));
            echo('Кол-во дней в месяце:'.date('t', strtotime($date)));
?>
            <table>
                <tbody>
                    <tr>
                        <td>Пн</td>
                        <td>Вт</td>
                        <td>Ср</td>
                        <td>Чт</td>
                        <td>Пт</td>
                        <td>Сб</td>
                        <td>Вс</td>
                    </tr>
                    <?php
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
                    ?>
                </tbody>
            </table>
<?php
        }
    }
?>