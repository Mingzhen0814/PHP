<?php
    $filename = $_GET['filename'];
    $data = $_GET['data'];
    $fp = fopen("dir1/{$filename}", 'w');
    fwrite($fp, $data);
    fflush($fp);
    fclose($fp);


    header("location: dir1/{$filename}");
?>