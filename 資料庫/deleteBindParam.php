<?php
    $mysqli = new mysqli('localhost', 'root', '','iii');
    $mysqli->set_charset('utf8');

    $id = 3;

    // 防止隱碼攻擊
    $sql2 = 'DELETE FROM member WHERE id=?';
    $stmt = $mysqli->prepare($sql2); // 預先處理
    // https://www.php.net/manual/en/mysqli-stmt.bind-param
    $stmt->bind_param('i', $id); // 綁定不定個數參數的傳遞 -> ('型態', 不定個數參數)
    if($stmt->execute()){
        echo 'true';
    } else {
        echo 'false';
    };
?>