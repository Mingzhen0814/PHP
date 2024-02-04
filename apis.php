<?php
    
    function sayYa(){
        echo "Ya<br>";
    }
    
    // 重複定義：方法名稱重複，而內容、參數、型別不同 (php不支援)
    // overload負載
    /*function sayYa($a){

    }*/

    function sayHello($name = 'world'){
        echo "Hello, {$name}<br>";
    }

    function sayHelloV2($name = 'world', $n = 1){
        for ($i = 0; $i < $n; $i++) {
            echo "Hello, {$name}<br>";
        }
    }

    function sum() {
        // echo func_num_args(); 
        // func_num_args()輸出參數個數
        $ary = func_get_args();
        // func_get_args()輸出參數內容
        // var_dump($ary);
        $arySum = 0;
        foreach ($ary as $v) {
            $arySum += $v;
        }
        return $arySum;

    }

    define('LETTERS', 'ABCDEFGHJKLMNPQRSTUVXYWZIO');

    function checkTWId($id) {
        $isRight = false;
        // echo strlen($id);
        // 中文字長度
        // big 5 -> 2的8次方 2的8次方 -> 2的16次方 -> 65536  -> 2 byte
        // UTF8  -> 2的24次方 -> 3 byte

        /*
        if (strlen($id) == 10){
            $c1 = substr($id, 0, 1);
            $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            if (strpos($letters, $c1) !== false){
                $c2 = substr($id, 1, 1);
                if ($c2 =='1' || $c2 == '2'){
                    // $isRight = true;
                    // 作業：把它寫完
                }
            }
        }

            身分證字號：
        1. 10碼
        2. 第一碼為大寫英文
        3. 第二碼為1或2
        4. 第十碼為檢查碼(詳情看維基) 
        */
        


        if (preg_match('/^[A-Z][12][0-9]{8}$/',$id)){
            $c1 = substr($id, 0, 1);
            $a12 = strpos(LETTERS, $c1) + 10;
            $a1 = (int)($a12 / 10);
            $a2 = $a12 % 10;
            $n1 = substr($id, 1, 1);
            $n2 = substr($id, 2, 1);
            $n3 = substr($id, 3, 1);
            $n4 = substr($id, 4, 1);
            $n5 = substr($id, 5, 1);
            $n6 = substr($id, 6, 1);
            $n7 = substr($id, 7, 1);
            $n8 = substr($id, 8, 1);
            $n9 = substr($id, 9, 1);

            $sum = $a1 * 1 + $a2 * 9 + $n1 * 8 + $n2 * 7 + $n3 * 6 + $n4 * 5 + $n5 * 4 + $n6 * 3 + $n7 * 2 + $n8 * 1 + $n9 * 1;

            $isRight = $sum % 10 == 0;
            // 正規表示法
            // '/^brad$/'                 只有brad才會對
            // '/^$/'                     只有空字串才會對
            // '/^[ABC]/'                 只有開頭大寫A或大寫B或大寫C才會對
            // '/[^ABC]/'                 不要大寫A或大寫B或大寫C才會對
            // '/^[A-Z]/'                 只有開頭是大寫英文字母才會對
            // '/^[A-Z][12]/'             第二碼只能是1或2
            // '/^[A-Z][12][0-9]{8}/'     0-9只能出現8次
            // '/^[A-Z][12][0-9]{8,10}/'  0-9只能出現8-10次
            // '/^[A-Z][12][0-9]{8}$/'    只能10碼
        }


        return $isRight;

    }
    
    // 正規表示法：
    // 手機號碼 -> 0912-123456 -> /^09[0-9]{2}-[0-9]{6}$/
    // 市話     -> 04-23265860 -> /^0[2-9]-[0-9]{8}$/
    // 日期     -> 2024-01-28  -> /^[12][0-9]{3}-[12][0-9]-[123][0-9]$/
    // 時間     -> 10:20:30    -> /^[012][01234]:[0123456][0-9]:[0123456][0-9]$/
    // IP位址   -> 192.168.3.4 
    // 身分證   -> A123456789  ->/^[A-Z][1289][0-9]{8}$/
    
    
    


    function createTWIdByRandom(){
        $area = substr(LETTERS, rand(0, 25), 1);
        return createTWIdByAreaCode($area);
    }
    function createTWIdByAreaCode ($areaCode = 'A'){
        $gender = rand(0,1) == 0; // true / false
        return createTWIdByAreaCodeAndGender($areaCode, $gender);
    }
    function createTWIdByGender ($gender = true){
        $area = substr(LETTERS, rand(0, 25), 1);
        return createTWIdByAreaCodeAndGender($area, $gender);
        
    }
    function createTWIdByAreaCodeAndGender($areaCode, $gender){
        $id = $areaCode;
        $id .= $gender? '1':'2'; // .字串累加 -> $id = $id + $gender
        for ($i = 0; $i < 7; $i++) $id .= rand(0,9);
        for ($i = 0; $i < 10; $i++){
            if (checkTWId($id . $i)) {
                // checkTWId($id . $i) 測試
                $id .= $i;
                // $id .= $i; 正是加進id
                break;
            }
        }
        return $id;
    }

    class Student{
        private $name, $ch, $eng, $math;

        public function __construct($name, $ch, $eng, $math){
            $this->name = $name;
            $this->ch = $ch;
            $this->eng = $eng;
            $this->math = $math;
        }


        public function getName(){
            return $this->name;
        }

        public function sum(){
            return $this->ch + $this->eng + $this->math;
        }

        public function avg(){
            return $this->sum() / 3;
        }

        public function setMath($math){
            $this->math = $math;
        }
    }

    class Member {
        // 僅存放資料使用
        private $id, $account, $name, $passwd, $icon, $icontype; 
        public function __construct($id, $account, $passwd, $name, $icon, $icontype){
            // 初始化
            $this->id = $id;
            $this->account = $account;
            $this->name = $name;
            $this->passwd = $passwd;
            $this->icon = $icon;
            $this->icontype = $icontype;
        }


        // 原生code (效能好)
        // 取值
        public function getId(){return $this->id;}
        public function getAccount(){return $this->account;}
        public function getName(){return $this->name;}
        public function getPasswd(){return $this->passwd;}
        public function getIcon(){return $this->icon;}
        public function getIcontype(){return $this->icontype;}
        
    }

?>