<?php
$year = 2000;
if ($year % 4 == 0) {
    if ($year % 100 != 0) {
        if ($year % 400 == 0) {
            echo "閏年";
        } else {
            echo "平年";
        }
    } else {
        echo "平年";
    }
}else{
    echo "平年";
}
?>