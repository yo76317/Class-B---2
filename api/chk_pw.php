<?php include_once "../base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];

//檢查acc跟pw是否為一樣
$chk=$User->math('count','*',['acc'=>$acc,'pw'=>$pw]);


// echo($chk>0)?1:0; 簡寫
// 檢查資料表 , count 有同值存在會回傳1 沒有會回傳0

if($chk>0){
    echo 1;
    $_SESSION['login']=$acc;
}else{
    echo 0;
}




?>