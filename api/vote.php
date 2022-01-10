<?php include_once "../base.php";
// $Que->save(['id'=>$_POST['opt'],'count'=>'count+1']);
$opt=$Que->find($_POST['opt']);
$opt['count']++;

$subject=$Que->find($opt['parent']);
$subject['count']++;

$Que->save($opt);
$Que->save($subject);

to("../index.php?do=result&id=".$subject['id']);