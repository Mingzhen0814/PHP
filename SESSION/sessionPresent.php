<?php
    include("bradapis.php");
    session_start();
    $rand = $_SESSION['rand']; 
    // if (!isset($_SESSION['rand'])) header("Location: brad55.php");

    // $rand: 區域變數
    // 透過$_SESSION['rand']取出brad55.php $rand的值
    echo $rand . '<hr>';

    $ary = $_SESSION['ary'];
    var_dump($ary);

    $s1 = $_SESSION['s1'];
    echo "<br>{$s1->getName()} : {$s1->sum()} : {$s1->avg()}<br>";


?>
<hr>
<a href="sessionDestroy.php">Game Over</a>