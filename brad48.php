<?php
    $max = 100;
    if(isset($_REQUEST['max']) && strlen($_REQUEST['max']) > 0){
        $max = $_REQUEST['max'];
    }
    echo rand(1, $max);
?>