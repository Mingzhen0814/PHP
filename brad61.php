<?php
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=iii","root","");
    $stmt = $pdo->prepare('INSERT INTO member (account,passwd,name) VALUES(?,?,?)');
    $param = ['BABO' ,password_hash(33333, PASSWORD_DEFAULT),'babo'];
    $stmt->execute($param);
?>