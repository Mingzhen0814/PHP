<?php
    $mysqli = new mysqli('localhost', 'root', '','iii');
    $mysqli->set_charset('utf8');
    $result = $mysqli->query('CALL test1(10,2)');
    // $row = $result->fetch_all(); // array(1) { [0]=> array(1) { [0]=> string(1) "3" } }
    // $row = $result->fetch_array(); // array(2) { [0]=> string(1) "3" ["v"]=> string(1) "3" }
    $row = $result->fetch_object(); // object(stdClass)#3 (1) { ["v"]=> string(1) "3" }
    // var_dump($row);
    echo $row->v;
    // v -> 宣告: int -> select: string
?>