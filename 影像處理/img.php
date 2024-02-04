<?php
    $rate = 0;
    if (isset($_GET['rate'])) $rate = $_GET['rate'];
    
    // 1. 畫布
    // https://www.php.net/manual/en/function.imagecreate.php
    $width = 400;
    $img = imageCreate($width, 20);
    // var_dump($img); // -> text/html

    // text/plain 普通文字，不會辨別標籤

    // 2. 作畫
    $yellow = imageColorAllocate($img, 255, 255, 0);
    $red = imageColorAllocate($img, 255, 0, 0);
    // imagefilledrectangle($img,0,0,200,20, $red);
    // imagefilledrectangle($img,200,0,400,20, $yellow);
    imagefilledrectangle($img,0,0,$width,20, $yellow);
    imagefilledrectangle($img,0,0,(int)($width*$rate/100),20, $red);
    //(0,0)┌--------------┐
    //     └--------------┘(400,20)
    
    // 3. 輸出 
    //    (1) brower
    //    (2) 檔案
    // https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types
    // https://www.runoob.com/http/http-content-type.html
    header('content-type: image/jpeg');
    imagepng($img);

    // 4. 清除
    imagedestroy($img);

?>