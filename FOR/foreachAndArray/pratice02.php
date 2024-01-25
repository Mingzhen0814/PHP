<?php
    $p = array(1 => 0, 0, 0, 0, 0, 0); // =>(mapping對應關係)
    
    for ($i = 0; $i < 100; $i++) {
        $point = rand(1,6);
        $p[$point]++;
    }
    /*  調整出現倍率
    for ($i = 0; $i < 10000; $i++) {
        $point = rand(1,9);
        $p[$point>6? $point-3: $point]++;
    }
    */
    foreach ($p as $point => $times){
        echo "{$point}點出現{$times}次<br>";
    }
?>