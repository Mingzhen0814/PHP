<?php
    // 1. 洗牌
    $poker = range(0,51);
    for ($i = 51; $i >= 1; $i--) {
            $temp = rand(0, $i-1);
            
            $poker[$temp] = $poker[$i] ^ $poker[$temp];
            $poker[$i] = $poker[$i] ^ $poker[$temp];
            $poker[$temp] = $poker[$i] ^ $poker[$temp];



        
    }
    foreach ($poker as $k => $v) {
        echo "{$k} : {$v}<br>";
    }



    // 2. 發牌

    // 3. 理牌 + 攤牌

?>