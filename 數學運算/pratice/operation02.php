<?php
    $op = $x = $y = $result = '';
    if(isset($_GET['x']) && isset($_GET['y'])){
        $x = $_GET['x'];
        $y = $_GET['y'];
        $op = $_GET['op'];
        switch($op){
            case '1':
                $result = $x + $y;
                break;
            case '2':
                $result = $x - $y;
                break;
            case '3':
                $result = $x * $y;
                break;
            case '4':
                $r1 = (int)($x/$y);
                $r2 = $x % $y;
                $result = "{$r1}......{$r2}";
                break; 
        }
    }
?>
<form>
    <input name="x" value="<?php echo $x; ?>">
    <select name="op">
        <!-- 顯示select的原值 -->
        <option value='1' <?php echo $op=='1'?'selected':''; ?>>加</option>
        <option value='2' <?php echo $op=='2'?'selected':''; ?>>減</option>
        <option value='3' <?php echo $op=='3'?'selected':''; ?>>乘</option>
        <option value='4' <?php echo $op=='4'?'selected':''; ?>>除</option>
    </select>
    <input name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <span><?php echo $result; ?></span>
</form>