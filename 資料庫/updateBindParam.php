<?php
    $mysqli = new mysqli('localhost', 'root', '','iii');
    $mysqli->set_charset('utf8');

    $account = 'mark';
    $id = 2;
    $name = 'Mark';

    // 防止隱碼攻擊
    $sql2 = 'UPDATE member SET account=?, name=? WHERE id=?';
    $stmt = $mysqli->prepare($sql2); // 預先處理
    // https://www.php.net/manual/en/mysqli-stmt.bind-param
    $stmt->bind_param('ssi', $account, $name, $id); // 綁定不定個數參數的傳遞 -> ('型態', 不定個數參數)
    if($stmt->execute()){
        echo 'true';
    } else {
        echo 'false';
    };
?>