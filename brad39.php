<?php
    $mysqli = new mysqli('localhost', 'root', '','db2');
    $mysqli->set_charset('utf8');
    // $sql = 'SELECT name, city FROM gift';
    // 別名
    $sql = 'SELECT name gname, city county FROM gift';
    $result = $mysqli->query($sql);
    // var_dump($result);
    // 物件重要的是屬性，因為方法大家都一樣
    while ($row = $result->fetch_object()) {
        // var_dump($row);
        // echo "{$row->name}:{$row->city}<br>";
        echo "{$row->gname}:{$row->county}<br>";
    }

?>