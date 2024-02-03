<?php
    $passwd = '123456';
    // hash 雜湊 -> 比對兩者是否不一樣 
    $newPasswd = password_hash($passwd, PASSWORD_DEFAULT); // PASSWORD_DEFAULT為演算法
    echo $newPasswd;
    // echo strlen($newPasswd); // 與原長度無關
    /*
    if(password_verify('123456', '$2y$10$ROuc6K7Era0MaehINz0R8e7x7d4WQfbc8/FGNb.uCwZwhR3M1Hon6')) {
        // echo 'OK';
    } else {
        echo 'XX';
    }
    */
    if(password_verify('123456', $newPasswd)) {
        echo 'OK';
    } else {
        echo 'XX';
    }
?>