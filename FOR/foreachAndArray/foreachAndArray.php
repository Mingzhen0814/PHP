<?php
    $a = array(1,2,3,4,5);
    var_dump($a);
    echo '<hr>';
    $a[2] = 123;
    $a[7] = 12.3;
    $a[135] = 'brad';
    var_dump($a);
    echo '<hr>';
    echo count($a);
    /*
    for ($i = 0; $i < count($a); $i++) {
        echo "{$a[$i]}<br>";
    }*/
    echo '<hr>';
    foreach($a as $k => $v){
        echo "{$k}: {$v}<br>";
    }
?>