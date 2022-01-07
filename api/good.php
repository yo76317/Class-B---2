<?php include_once "../base.php";

$news=$News->find($_POST['news']);
$type=$_POST['type'];

// 按讚要做什麼事情 news誰(登入使用者) user誰

switch($type){
    case 1:
    // 收回讚,某個人按讚的刪除
    // 改成del給條件去找出後刪除
    // -- (-1)
    // 存回去post資料表
        $Log->del(['news'=>$news['id'],'user'=>$_SESSION['login']]);
        $news['good']--;
        $News->save($news);
    break;
    case 2:
    // 按讚,在log紀錄，誰對某篇文章按讚
    // 再news找到這某篇文章
    // 針對post裡面的欄位++ (+1)
    // 存回去post資料表
        $Log->save(['news'=>$news['id'],'user'=>$_SESSION['login']]);
        $news['good']++;
        $News->save($news);
    break;
}