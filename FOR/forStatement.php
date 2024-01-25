<?php
    $i = 0;
    for (printBrad() ; $i < 10; printLine()) {
        echo "{$i}<br>";
        $i++;
    }
    
    
    /*
    for ($i = 0; $i < 10; $i++) {
        echo "{$i}<br>";
    }*/


    /* 無窮迴圈 
    for (;;) {
        echo "{$i}<br>";
    }*/

    function printBrad(){
        echo "Brad";
        printLine();
    }

    function printLine(){
        echo "<hr>";
    }
?>