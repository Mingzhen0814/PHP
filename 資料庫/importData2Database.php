<?php
    $json = file_get_contents("https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvAgriculturalProduce.aspx");
    $data = json_decode($json);

    $myspli = new mysqli('localhost', 'root', '','iii');
    $myspli->set_charset('utf8');
    $myspli->query('DELETE FROM gift');
    $myspli->query('ALTER TABLE gift AUTO_INCREMENT = 1'); //id從1開始


    // $data: array
    // $v: object
    foreach ($data as $v) {
        $sql = "INSERT INTO gift(name, addr, feature, picurl, city, town, lat, lng) VALUES ('{$v->Name}', '{$v->SalePlace}', '{$v->Feature}','{$v->Column1}','{$v->County}','{$v->Township}',{$v->Latitude},{$v->Longitude})";
        $myspli->query($sql);
    }
?>