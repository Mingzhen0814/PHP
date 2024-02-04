<?php
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=iii","root","");
    $stmt = $pdo->prepare("CAll test1(?, ?)");
    $param = [100, 8];
    $stmt->execute($param);
    $result = $stmt->fetchObject();
    // var_dump($result);
    echo "{$result->v}";
?>