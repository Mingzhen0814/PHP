<?php 
/*
    $a = 5 / 0; // class的名字: DivisionByZeroError -> 後面程式碼不會跑
    echo "Hello\n";
*/
?>
<?php
/*
    // 程式出問題的話就不會當掉
    try{ // 可能會出問題的程式碼
        $x = 0;
        $a = 5 / $x;
    } catch(DivisionByZeroError $error){
        echo "分母不可為0\n";
    } catch(Error $error){
        // 可以接多個catch，分別處理
        echo "錯誤";
    }
    echo "Hello\n";
*/
?>
<?php
function f(){
    // 拋出錯誤的建構子
    // throw Error("error!!");

    // 拋出例外的建構子
    // throw new Exception("exception!!\n");
    
    echo"hi\n";
}    

// PHP錯誤主要分兩種: 錯誤與例外

// catch   可以有很多個
// finally 只能有一個，且不能接參數
    try{
        f();
        $x = 0;
        $a = 5 / $x;
    } catch(Throwable $error){
        // Throwable將全部錯誤一次處理
        echo "error: " . $error->getMessage();
        // 無指定拋出錯誤的訊息 -> 會顯示錯誤類別
    }finally{
        echo "同Hello那行\n";
    }
        
    echo "Hello\n";
?>