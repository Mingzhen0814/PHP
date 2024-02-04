<?php
    $upload = $_FILES['upload'];
    // var_dump($upload);
    foreach ($upload as $k => $v){
        echo "{$k}:{$v}<br>";
    }

    if($upload['error'] == 0){
        if (move_uploaded_file($upload['tmp_name'], "upload/{$upload['name']}")){
            echo "success";
        } else {
            echo "failure(1)";
        };
    } else {
        echo "failure(2)";
    }
?>