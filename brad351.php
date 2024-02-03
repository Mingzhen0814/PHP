<?php
    $json = file_get_contents("https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvAgriculturalProduce.aspx");
    $data = json_decode($json);

    $mysqli = new mysqli('localhost', 'root', '','db2');
    $mysqli->set_charset('utf8');
    $mysqli->query('DELETE FROM gift');
    $mysqli->query('ALTER TABLE gift AUTO_INCREMENT = 1'); //id從1開始

    $sql = 'INSERT INTO gift(name, addr, feature, picurl, city, town, lat, lng) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
    $stmt = $mysqli->prepare($sql);
    
    
    // $data: array
    // $v: object
    foreach ($data as $v) {
        $stmt->bind_param('ssssssdd', $v->Name, $v->SalePlace, $v->Feature, $v->Column1, $v->County, $v->Township , $v->Latitude, $v->Longitude);
        $stmt->execute();
    }

?>