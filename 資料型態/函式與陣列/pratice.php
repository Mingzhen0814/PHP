<?php

    include('bradapis.php');
    if (checkTWId('A123456789')){
        echo'OK';
    }else{
        echo 'XX';
    }
    // checkTWId('A123456879');

    echo '<hr>';
    echo createTWIdByRandom() . '<br>';
    echo createTWIdByAreaCode('B') . '<br>';
    echo createTWIdByGender(false) . '<br>';
    echo createTWIdByAreaCodeAndGender('Y', true) . '<br>';
?>