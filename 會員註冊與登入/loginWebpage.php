<?php
    include("apis.php");
    session_start();

    if(isset($_POST['account'])){
        $account = $_POST['account'];
        $passwd = $_POST['passwd'];
        $mysqli = new mysqli('localhost', 'root', '','iii');
        $mysqli->set_charset('utf8');
        $sql = 'SELECT id, account, passwd, name, icon, icontype FROM member WHERE account = ?';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('s', $account);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0){
            $stmt->bind_result($id, $account, $hashpasswd, $name,$icon,$icontype);
            $stmt->fetch(); // account唯一鍵 -> 只會抓取一筆
            if(password_verify($passwd, $hashpasswd)){
                $_SESSION['member'] = new Member($id, $account, $hashpasswd, $name,$icon,$icontype);
                header('Location: main.php'); // 登入成功跳轉到主頁面
            }
        }
    }


?>
<h1>Login</h1>
<hr>
<form method="post">
    Account: <input name="account"><br>
    Password: <input type="password" name="passwd"><br>
    <input type="submit" value="Login">
</form>