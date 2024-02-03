<?php
    // $dir = opendir('c:\test1');
    // $dir = @opendir('.') or die('server busy'); // 讀現在的路徑
    // $dir = @opendir('c:/') or die('server busy'); // 讀C槽資料
    $dir = @opendir('c:\test1') or die('server busy'); 
    // $dir = @opendir('c:\test2');
    // @抑制警告訊息 / 錯誤訊息
    // die('') 離開並拋出錯誤訊息
    // exit('') 離開並拋出錯誤訊息(與die效果相同)
    // var_dump($dir);
/*
    $data = readdir($dir);
    echo $data . '<br>'; // . 本路徑(現在的所在位置)

    $data = readdir($dir);
    echo $data . '<br>'; // .. 現在位置的上一層目錄

    $data = readdir($dir);
    echo $data . '<br>';

    $data = readdir($dir);
    echo $data . '<br>';
*/
/*
    C:\test1 的目錄

    2024/01/29  下午 04:02    <DIR>          .        
    2024/01/29  下午 04:02    <DIR>          ..       
    2024/01/29  下午 04:01                 0 brad1.txt
    2024/01/29  下午 04:02                 0 brad2.txt
                   2 個檔案               0 位元組    
                   2 個目錄  70,349,197,312 位元組可用 
*/
    // 讀取目錄的全資料
    while ($data = readdir($dir)){
        // 給值沒資料 -> false
        echo "{$data}<br>";
    }

    closedir($dir);

?>