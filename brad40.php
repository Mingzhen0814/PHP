<?php
    // define("RPP", 10); // row per page
    $RPP = 10;
    $page = 1;
    if (isset($_GET["page"])) $page = $_GET['page'];
    $start = ($page-1) * $RPP;
    $prev = $page - 1;
    $next = $page + 1;
    $mysqli = new mysqli('localhost', 'root', '','iii');
    $mysqli->set_charset('utf8');
    // LIMIT 10     -> 1 ~ 10
    // LIMIT 10, 10 -> 11 ~ 20
    // LIMIT 20, 10 -> 21 ~ 30
    $sql = 'SELECT id, name, addr, city, town, picurl, feature FROM gift';
    if (isset($_GET['key']) && strlen($_GET['key']) > 0){
        // 保留原值
        $key = $_GET['key'];
        $key2 = "%{$key}%";

        $sql .= ' WHERE name LIKE ? OR addr LIKE ? OR feature LIKE ?'; // name or addr or feature 全文檢索關鍵字
        $sql .= ' LIMIT ?, ?';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('sssii', $key2, $key2, $key2, $start, $RPP);
    } else {
        $sql .= ' LIMIT ?, ?';
        $key = '';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('ii', $start, $RPP);
    }
    if($stmt->execute()){
        $stmt->store_result();
        $stmt->bind_result($id, $name, $addr, $city, $town, $picurl, $feature);
?>
<form>
    <!-- 保留原值 -->
    Keyword: <input name="key" value="<?php echo $key; ?>">
    <input type="submit" value="Search">
</form>
<hr>
<a href="?page=<?php echo $prev; ?>&key=<?php echo $key; ?>">Prev</a> | <a href="?page=<?php echo $next; ?>&key=<?php echo $key; ?>">Next</a>
<hr>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>city</th>
        <th>town</th>
        <th>feature</th>
        <th>picture</th>
    </tr>
    <?php
        while ($stmt->fetch()){
            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$name}</td>";
            echo "<td>{$addr}</td>";
            echo "<td>{$city}</td>";
            echo "<td>{$town}</td>";
            echo "<td width='300px'>{$feature}</td>";
            echo "<td><a href='{$picurl}'><image src='{$picurl}' width='100px'></a></td>";
            echo "</tr>";
        }
    ?>
</table>
<?php
    } else {
        echo 'XX';
    };
?>
