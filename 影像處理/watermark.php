<?php
    // https://www.php.net/manual/en/function.imagecreatefromjpeg.php
    // $img = imageCreateFromJpeg('imgs/coffee.jpg');
    $img = imageCreateFromJpeg('https://jpeg.org/images/jpegsystems-home.jpg');

    $blue = imageColorAllocate($img, 0, 0, 255);
    imagettftext($img, 36, 0, 100, 100, $blue, 'fonts/Gabarito-Bold.ttf', 'Hello, World');
    imagettftext($img, 36, -30, 0, 200, $blue, 'fonts/NotoSansTC-Bold.ttf', '資展專屬');

    header('content-type: image/jpeg');
    imagepng($img);
    imagepng($img, 'imgs/brad.jpg');

    imageDestroy($img);
?>