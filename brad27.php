<?php
    $dir = 'dir2/dir3/dir4';
    // file -> file or directory
    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
        // true -> If true, then any parent directories to the directory specified will also be created, with the same permissions.
    }
    $fp = fopen("{$dir}/file1.txt", 'a');

    /* 權限　　r(讀)     w(寫)     x(執行) 
            |  4         2         1      |
    --------+-----------------------------+----------------------------
        1   |  0         0         1      | 放在網路的資料夾開此權限即可
        2   |  0         2         0      |
        3   |  0         2         1      | 
        4   |  4         0         0      |
        5   |  4         0         1      |
        6   |  4         2         0      |
        7   |  4         2         1      | 最大權限
    */


    /*
    $data = "Hello, world\n123456789\n987654321";
    $fp = fopen('dir1/file1.txt', 'a');

    // w  -> 1. If the file does not exist, attempt to create it.
    //       2. 會清空內容 
    // r+ -> 1. 需要檔案已存在時使用
    //       2. 不會清空內容，從頭開始覆蓋掉內容
    // a  -> 1. 需要檔案已存在時使用
    //       2. 不會清空內容，從後面開始寫內容

    // fwrite($fp, 'Hello, world');
    // fwrite($fp, $data);
    fwrite($fp, 'brad');
    fflush($fp);
    fclose($fp);
    */
?>