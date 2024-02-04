<?php
    session_start();
    session_destroy();
    // header("location: brad44.php"); // 直接跳轉到登入頁面(其他頁面)   
?>
<!-- 閒置10秒自動跳轉到登入頁面 -->
<meta http-equiv="refresh" content="10; url=brad44.php">
<!-- 透過按鈕才能回到登入頁面 -->
<a href="brad44.php">Login Page</a>