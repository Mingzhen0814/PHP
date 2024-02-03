<?php
    // https://www.php.net/manual/en/class.pdo.php
    // $pdo = new PDO("資料庫","帳號","密碼")
    // $pdo = new PDO("mysql:host=10.0.100.177;port=3306;dbname=iii","root","")
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=iii","root","");
    $sql = 'SELECT * FROM gift';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    // 方法 -> Exception例外/異常 -> try...catch...
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    // var_dump($result);
    foreach ($result as $row) {
        echo "{$row->name}<br>";
    }
?>