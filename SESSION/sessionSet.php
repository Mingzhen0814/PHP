<?php
    include("apis.php"); // 先定義學生物件

    session_start(); // 在此頁開啟組態檔的session(僅此頁)
    $rand = rand(1,49); // $rand: 區域變數
    echo $rand;
    $_SESSION['rand'] = $rand; // 透過$_SESSION['rand']存放$rand的值

    $rand = 1000; // $rand值的改變不會傳到其他頁面(因為先存放到$_SESSION，透過$_SESSION帶到其他頁面)

    $ary = [1, 2, 3, 4, 5];
    $_SESSION['ary'] = $ary;
    
    $ary = [100, 200, 300, 400, 500]; // $ary值的改變不會傳到其他頁面(因為先存放到$_SESSION，透過$_SESSION帶到其他頁面)

    $s1 = new Student('brad', 70, 45, 56);
    echo "<br>{$s1->getName()} : {$s1->sum()} : {$s1->avg()}<br>";
    $_SESSION['s1'] = $s1;
    $s1->setMath(100); // 透過物件改變會傳到其他頁面(透過記憶體位置存放)
?>
<hr>
<a href="sessionPresent.php">Next</a>