<?php
    // $a = array();
    $a = [];
    var_dump($a);
    echo "<hr>";
    $a[] = [];   // array[0] = [];
    $a[] = ['brad', 'peter'];   // index[1] = ['brad', 'peter'];
    $a[] = 123;  // index[2] = 123;
    $a[0][] = 3; // index[0][0] = 3;
    $a[0][] = [11, 22, 33]; // index[0][1] = [11, 22, 33];
    var_dump($a);
    echo "<hr>";
    echo count($a);    // 一維角度 -> 3個元素
    echo count($a[0]); // 一維角度 -> 2個元素
    echo "<hr>";
    foreach ($a as $k => $v) {
        if (gettype($v) == 'array') {
            foreach ($v as $kk => $vv) {
                if (gettype($vv) == 'array') {
                    foreach ($vv as $kkk => $vvv) {
                        echo $vvv . '  ';
                    }
                } else {
                    echo $vv;
                }
                echo '<br>';
            }
        } else {
            echo $v;
        }
        echo '<br>';
    }
?>