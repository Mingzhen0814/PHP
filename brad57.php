<?php
    session_start();
    
    // 拿掉變數
    // 1. unset
    // unset($_SESSION['rand']); // unset可以拿掉任何指定的變數

    // 2. session_destroy()
    session_destroy();
?>