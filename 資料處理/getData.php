<?php
    // echo gettype($_GET);
    // var_dump($_GET);
    // url放入資料
    // http://localhost/phpd06/brad19.php?k1=v1&k2=v2
    // echo gettype($_SERVER);
    foreach($_SERVER as $k => $v){
        echo "[{'$k'} = $v]<br>";
        // 資訊：
        // HTTP_ACCEPT_LANGUAGE可抓取用戶端的預設語系
    }
?>