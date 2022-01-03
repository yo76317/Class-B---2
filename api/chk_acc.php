<?php include_once "../base.php";

$acc=$_POST['acc'];

$chk=$User->math('count','*',['acc'=>$acc]);

// 檢查資料表 , count 有同值存在會回傳1 沒有會回傳0
if($chk>0){
    echo 1;
}else{
    echo 0;
}




?>