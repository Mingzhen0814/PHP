<?php
    // 1. 洗牌
    $poker = [];
    for ($i = 0; $i < 52; $i++) {
        $temp = rand(0, 51);

        // 檢查機制
        $isRepeat = false; // 預設值為false
        for ($j = 0; $j < $i; $j++) {
            if ($temp == $poker[$j]){
                //重複了
                $isRepeat = true;
                break;
            }
        }

        if (! $isRepeat){
            $poker[$i] = $temp;
            echo "{$poker[$i]}<br>";
        }else{
            $i--;
        }
    }


    // 2. 發牌

    // 3. 理牌 + 攤牌

?>