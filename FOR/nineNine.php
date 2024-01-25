<?php
    $start = 1; $rows = 1; $cols = 9;
    if(isset($_GET['start'])){
        $start = $_GET['start'];
        $rows = $_GET['rows'];
        $cols = $_GET['cols'];
    }

?>
<h1>Nine-Nine</h1>
<hr>
<form>
    start: <input type="number" name="start">
    rows: <input type="number" name="rows" min="1">
    cols: <input type="number" name="cols" min="1">
    <input type="submit" value="GO!">
</form>
<hr>
<table border="1" width="100%">
    <?php
        define('ROWS', $rows); // define定義常數(慣例是常數全大寫)
        define('COLS', $cols); // define定義常數
        define('START', $start); // define定義常數
        
        for($k = 0; $k < ROWS; $k++){
            echo "<tr>";
            for ($j = START; $j < (START + COLS); $j++) {
                $newj = $j + $k * COLS;

                if (($k % 2 == 0 && $j % 2 == 0)||($k % 2 == 1 && $j % 2 == 1)) {
                    echo "<td bgcolor='lightblue'>";
                }else{
                    echo "<td bgcolor='lightpink'>";
                }

                for ($i = 1; $i < 10; $i++) {
                    $r = $newj * $i;
                    echo "{$newj} x {$i} = {$r} <br>";
                }
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
</table>