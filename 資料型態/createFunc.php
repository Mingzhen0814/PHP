<?php
    // sayYa(); // 整個頁面有呼叫即可
    // function sayYa(){
    //     echo "Ya<br>";
    // }
    
    // // 重複定義：方法名稱重複，而內容、參數、型別不同 (php不支援)
    // // overload負載
    // /*function sayYa($a){

    // }*/

    // function sayHello($name = 'world'){
    //     echo "Hello, {$name}<br>";
    // }

    // function sayHelloV2($name = 'world', $n = 1){
    //     for ($i = 0; $i < $n; $i++) {
    //         echo "Hello, {$name}<br>";
    //     }
    // }

    // function sum() {
    //     // echo func_num_args(); 
    //     // func_num_args()輸出參數個數
    //     $ary = func_get_args();
    //     // func_get_args()輸出參數內容
    //     // var_dump($ary);
    //     $arySum = 0;
    //     foreach ($ary as $v) {
    //         $arySum += $v;
    //     }
    //     return $arySum;

    // }


    include("bradapis.php"); // 使此頁面可使用在其他頁面定義過的函式


    sayYa();

    sayHello('brad');
    sayHello('amy', 2); // Hello, amy
    sayHello(); // Hello, world(預設值)

    sayHelloV2('tony', 3);
    sayHelloV2('kevin');
    sayHelloV2(4); // Hello, 4
    // sayHelloV2( ,4); // 語法錯誤
    sayHelloV2();

    /*
    1. function sayHelloV2($name, $n)               -> 至少給2個參數
    2. function sayHelloV2($name, $n = 1)           -> 至少給1個參數
    3. function sayHelloV2($name = 'world', $n = 1) -> 可不給參數
    */

    // sum(1, 2, 3, 7, 8, 9, 100, 200, 300);
    $v1 = sum(1, 2, 3, 7, 8, 9);
    echo $v1;
?>