<?php
    if(! isset($_POST['account'])) header('Location: brad43.php'); // 沒有填帳號跳轉到登入畫面

    $account = $_POST['account'];
    $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
    $name = $_POST['name'];

    $icon = $_FILES['icon'];
    $iconData = file_get_contents($icon['tmp_name']);
    $iconType = $icon['type'];

    /*
           後端        |                前端
    -------------------+---------------------------------
        $_GET['']      |    method="get"
        $_POST['']     |    method="post"
        $_REQUEST['']  |    method="get" or method="post"
    */

    $mysqli = new mysqli('localhost', 'root', '','iii');
    $mysqli->set_charset('utf8');

    $sql = 'SELECT account FROM member WHERE account=?';
    $stmt = $mysqli-> prepare($sql);
    $stmt->bind_param('s', $account);
    $stmt->execute();
    $stmt->store_result();
    // 搜尋是否有重複的account 
    // 1. fetch不到 -> 傳回false
    // 2. num_rows -> This function returns 0 unless all rows have been fetched from the server.
    // https://www.php.net/manual/en/mysqli-stmt.num-rows.php
    if ($stmt->num_rows == 0){
        $sql = 'INSERT INTO member(account, passwd, name, icon, icontype) VALUES (?, ?, ?, ?, ?)';
        $stmt = $mysqli-> prepare($sql);
        $stmt->bind_param('sssss', $account, $passwd, $name, $iconData, $iconType);

        if($stmt->execute()){
            echo 'OK';
        } else {
            echo 'XX';
        };  
    } else {
        header('Location: brad43.php'); // 登入失敗跳轉到登入畫面
    }
?>