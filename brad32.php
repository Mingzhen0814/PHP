<?php
    $json = file_get_contents("https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvAgriculturalProduce.aspx");
    // echo $json;
    $data = json_decode($json);
    // var_dump($data);

    foreach ($data as $v) {
        echo "{$v->Name}<br>";
    }


?>