<?php include_once "base.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>健康促進網</title>
<link href="./css/css.css" rel="stylesheet" type="text/css">
<script src="./js/jquery-1.9.1.min.js"></script>
<script src="./js/js.js"></script>
<style>
	.pop{style="background:rgba(51,51,51,0.8);
	 			color:#FFF;
				min-height:300px;
				width:300px;
				position:absolute;
				display:none; 
				z-index:9999; 
				overflow:auto;}
</style>
</head>

<body>


<iframe name="back" style="display:none;"></iframe>
	<div id="all">
    	
		<?php include "front/header.php" ?>

        <div id="mm">
        	<div class="hal" id="lef">
            	<a class="blo" href="?do=po">分類網誌</a>
               	<a class="blo" href="?do=news">最新文章</a>
               	<a class="blo" href="?do=pop">人氣文章</a>
               	<a class="blo" href="?do=know">講座訊息</a>
               	<a class="blo" href="?do=que">問卷調查</a>
            </div>
            <div class="hal" id="main">
            	<div>
					<!-- 改跑馬燈 -->
            		<marquee style="width:80%; display:inline-block;">請民眾踴躍投稿電子報，讓電子報成為大家相互交流、分享的園地！詳見最新文章</marquee>
					
					<!-- 使用者按鈕 -->
					<span style="width:18%; display:inline-block;">
						<?php
						// 如果存在
						if(isset($_SESSION['login'])){
							if($_SESSION['login']=='admin'){
							?>
								歡迎admin，<br><button onclick="location.href='back.php'">管理</button>|<button onclick='logout()'>登出</button>
							<?php
							// 如果不存在
							}else{
							?>
								歡迎<?=$_SESSION['login'];?>，<button onclick='logout()'>登出</button>
							<?php
							}
						?>

						<?php
						}else{
						?>
							<a href="?do=login">會員登入</a>					
						<?php
						}
						?>
                    </span>

                	<div class="">
					<?php
						$do=$_GET['do'] ?? 'home';
						$file='front/'.$do.".php";
						// file_exists(檢查文件或目錄是否存在)
						// 假如檔案存在，載入$file
						// 不然幫我載入home
						if(file_exists($file)){
							include $file;
						}else{
							include "front/home.php";
						}
					?>

					</div>
        		</div>
    		</div>
    	</div>

		<?php include "front/footer.php" ?>

	</div>

</body></html>