<?php
    date_default_timezone_set('Asia/Taipei');
    $dir = '.';
    $fp = opendir($dir);
?>

<table border="1" width="100%">
    <tr>
        <th>Filename</th>
        <th>Type</th>
        <th>Filesize</th>
        <th>Datetime</th>
    </tr>
    <?php
        while ($file = readdir($fp)){
            $fullname = "{$dir}/{$file}";
            echo '<tr>';
            echo "<td>{$file}</td>";
            if(is_dir($fullname)){
                echo "<td>Diretory</td>";
            } else if (is_file($fullname)) {
                echo "<td>File</td>";
            } else {
                echo "<td>Unknow</td>";
            }
            echo "<td align='right'>". filesize($fullname) . " byte" ."</td>";
            $mtime = date('Y-m-d H:i:s', filemtime($fullname));
            echo "<td align='center'>" . $mtime . "</td>";

            echo '</tr>';
        }

        // 時間
        // 1. atime -> access -> 上次存取的時間
        // 2. ctime -> change -> 檔名、內容、權限、屬性...被修改的時間
        // 3. mtime -> modify -> 檔案內容被修改的時間
    ?>
</table>