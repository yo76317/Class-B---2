<div id="title">
	<?=date("m月d號 l");?> | 
	今日瀏覽:<?php echo $View->find(['date'=>date("Y-m-d")])['total'];?> | 
	累積瀏覽:<?php echo $View->math('sum','total');?>

    <a href='index.php' style='float:right'>回首頁</a>
</div>

<div id="title2">
	<a href="index.php" title="健康促進網-回首頁">
		<img src="icon/02B01.jpg" alt="">
	</a>
</div>