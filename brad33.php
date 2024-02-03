<?php
    class Bike {

        // 物件屬性 -> 有物件才有的屬性
        protected $speed; 
        // private將此變數封裝，使變數僅能以本類別呼叫，要透過方法才可以改，不可任意存取
        // protected只有繼承的子類別可以呼叫使用此變數

        // 建構式/子/方法 屬性的初始化
        function __construct(){
            $this->speed = 0;
        }

        // 物件方法 -> 有物件才有的方法
        function upspeed(){
            $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.4;
        }
        function downspeed(){
            $this->speed = $this->speed < 1 ? 0: $this->speed * 0.7;
        }
        function getspeed(){
            return $this->speed;
        }
    }
    

    // 繼承/擴展之前的物件
    class Scooter extends Bike{
        private $gear;

        function __construct(){
            $this->gear = 0;
        }


        function upspeed(){
            $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.4 * $this->gear;
        }

        function changeGear($gear){
            if ($gear >= 0 && $gear <= 4) {
                $this->gear = $gear;
        }
    }
    }



    $myBike = new Bike(); // 物件的初始化
    // var_dump($myBike);
    // $myBike->speed = 123;
    $myBike->upspeed();
    $myBike->upspeed();
    $myBike->upspeed();
    $myBike->upspeed();
    $myBike->upspeed();
    $myBike->upspeed();
    $myBike->upspeed();
    $myBike->upspeed();
    // $myBike->speed = 10.1; // private將此變數封裝，使變數僅能以本類別呼叫，要透過方法才可以改，不可任意存取

    echo $myBike->getspeed();
    echo "<hr>";
    
    // $myBike->downspeed();
    // echo $myBike->speed;
    
    $myScooter = new Scooter();


    $myScooter->changeGear(2);
    $myScooter->upspeed();
    $myScooter->upspeed();
    $myScooter->upspeed();
    $myScooter->upspeed();
    $myScooter->upspeed();
    $myScooter->upspeed();
    $myScooter->upspeed();
    $myScooter->upspeed();
    echo $myScooter->getspeed();

?>