<?php
    $fp = fopen('dir1/ns1hosp.csv', 'r');
    fgets($fp); // 去除標題列(不顯示)
    while ($line = fgets($fp)){ 
        $row = explode(',', $line); // 資料剖析
        echo "{$row[2]}:{$row[4]}:{$row[7]}<br>";
    }
    fflush($fp);
    fclose($fp);
?>