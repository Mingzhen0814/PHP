<?php
    $mysqli = new mysqli('localhost', 'root', '','iii');
    $mysqli->set_charset('utf8');

    $sql = 'SELECT * FROM member WHERE id = 17';
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
    echo $row['name'] . '<hr>';

?>
<!-- base64 影像格式 -->
Icon: <img src="data:image/jpeg; base64, <?php echo base64_encode($row['icon']); ?>">