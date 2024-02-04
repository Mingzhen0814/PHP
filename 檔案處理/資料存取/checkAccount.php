<?php
    if(isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];

        $mysqli = new mysqli('localhost', 'root', '','iii');
        $mysqli->set_charset('utf8');
            
        $sql = 'SELECT account FROM member WHERE account=?';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('s', $account);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows() > 0){
            echo 'Account EXIST';
        } else {
            echo '';
        }
    }
?>