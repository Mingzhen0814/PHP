<?php
    $mysqli = new mysqli('localhost', 'root', '','iii');
    $mysqli->set_charset('utf8');

    $account = 'brad';
    $passwd = '123456';
    $name = 'Brad';
    $sql1 = "INSERT INTO member(account, passwd, name) VALUES ('{$account}', '{$passwd}', '{$name}')";
    echo $sql1; // 除錯用
    if ($mysqli->query($sql1)){
        echo "OK";
    } else {
        echo "XX";
    };

    echo "<hr>";
    
    // 防止隱碼攻擊
    $sql2 = 'INSERT INTO member(account, passwd, name) VALUES (?, ?, ?)';
    $stmt = $mysqli->prepare($sql2); // 預先處理
    // https://www.php.net/manual/en/mysqli-stmt.bind-param
    $stmt->bind_param('sss', $account, $passwd, $name); // 綁定不定個數參數的傳遞 -> ('型態', 不定個數參數)
    if($stmt->execute()){
        echo 'true';
    } else {
        echo 'false';
    };
?>