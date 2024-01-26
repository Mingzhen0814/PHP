<?php
    // 1. 洗牌
    $poker = range(0,51);
    shuffle($poker);
    foreach($poker as $k => $v){
        // echo "[{$k}] = {$v}<br>";
    }
?>
<?php
    // 2. 發牌  
    $players = [[], [], [], []];
    foreach($poker as $i => $card){
     // $players[第幾家][第幾張] = $card;
     // $i | 0 1 2 3 4 5 6 7 8 9 ... 51
     //------------------------------------------------
     // 家 | 0 1 2 3 0 1 2 3 0 1 ... 3    ($i%4)
     //------------------------------------------------
     // 張 | 0 0 0 0 1 1 1 1 2 2 ... 13   (int)($i/4)

        $players[$i%4][(int)($i/4)] = $card;
    }

?>
<table border="1" width="100%">

    <?php
        // 3. 理牌 + 攤牌
        $launchs = ['<font color=black>&spades;','<font color=red>&hearts;', '<font color=red>&diams;' ,'<font color=black>&clubs;'];
        $values = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];
        foreach($players as $player){
            echo '<tr>';
            sort($player);
            foreach($player as $card){
                $launch = $launchs[(int)($card / 13)];
                $value = $values[$card % 13];
                echo "<td>{$launch}{$value}</font></td>";
            }
            echo '</tr>';
        }   
    ?>
</table> 
