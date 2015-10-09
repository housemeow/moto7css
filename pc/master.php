<?php
$images_path="images/";
$upload_path="../upload/"
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>A1_首頁_v3</title>
	 <!--css-->
        <link href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css" rel="stylesheet">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="js_fk/bxslider/jquery.bxslider.css" rel="stylesheet">
        <link rel="stylesheet/less" type="text/css" href="css/style_new.less" />
        <!--js-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script> 

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 

        <script src="https://rawgit.com/leafo/sticky-kit/v1.0.4/jquery.sticky-kit.min.js"></script> 

        <script src="js_fk/bxslider/jquery.bxslider.min.js"></script>
        <script src="js/function.js"></script>
</head>
<body>	
	<nav role="navigation" class="header navbar-fixed-top navbar navbar-default">
            <div class="container">
                <a class="navbar-brand" href="#">
                	<img src="<?php echo $images_path ?>logo.png" alt="moto7">
                </a>
                <ul class="header-menu nav navbar-nav">
                    <li><a href="#">首頁</a></li>
                    <li class="active"><a href="#">新聞</a></li>
                    <li><a href="#">專欄</a></li>
                    <li><a href="#">相簿</a></li>
                    <li><a href="#">車廠</a></li>
                    <li><a href="#">車款</a></li>
                    <li><a href="#">部品</a></li>
                    <li><a href="#">報名</a></li>
                    <li><a href="#">討論</a></li>
                </ul>


                <ul class="member nav navbar-nav">
                    <li><a href="#">登入</a></li>
                    <li><a href="#">註冊</a></li>
                </ul>
                <ul class="contact nav navbar-nav">
                    <li><a href="#">車迷信箱</a></li>
                </ul>
                <div class="search input-group">
                    <input type="text" class="form-control" placeholder="請輸入關鍵字查詢">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"></button>
                    </span>
                </div>
                <div class="submenu">
                    <a href="#" class="active">國內車廠</a>
                    <a href="#">國外車廠</a>
                    <a href="#">部品</a>
                    <a href="#">活動</a>
                    <a href="#">賽事</a>
                </div>
            </div>
    </nav>
    <div class="content">
    	<div class="header-banner">
            <div class="banner-ad">
                <ul class="banner-ad-left">
                    <a href="#"><li class="active">SYM野狼SB300CR 暨<br>重車聯盟發表會</li></a>
                    <hr>
                    <a href="#"><li>YAHAMA 發表智慧休眠版<br>CUXi IS</li></a>
                </ul>
                <div class="banner-ad-center">
                    <img src="<?php echo $upload_path ?>ad_830x90.jpg"/>
                </div>
                <ul class="banner-ad-right">
                    <a href="#"><li >YAMAHA MT-07：<br>初次機旅的感動</li></a>
                    <hr>
                    <a href="#"><li clas>2015 Team SUZUKI<br>HCSTAR 發表</li></a>
                </ul>
            </div>
        </div>
        <div class="container">
        	<div class="three_left">
				<div class="brands">
					<div class="header-logo">
						<a href="#"></a>
					</div>
					<ul>
						<li class="active">
							<a href="#"><div><img src="<?php echo $upload_path ?>brands1.png" alt="brands"></div>
							<span>該廠牌最新文章A<br>該廠牌最新文章B</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>brands2.png" alt="brands"></div>
							<span>該廠牌最新文章A<br>該廠牌最新文章B</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>brands3.png" alt="brands"></div>
							<span>該廠牌最新文章A<br>該廠牌最新文章B</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>brands4.png" alt="brands"></div>
							<span>該廠牌最新文章A<br>該廠牌最新文章B</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>brands5.png" alt="brands"></div>
							<span>該廠牌最新文章A<br>該廠牌最新文章B</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>brands6.png" alt="brands"></div>
							<span>該廠牌最新文章A<br>該廠牌最新文章B</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>brands7.png" alt="brands"></div>
							<span>該廠牌最新文章A<br>該廠牌最新文章B</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>brands8.png" alt="brands"></div>
							<span>該廠牌最新文章A<br>該廠牌最新文章B</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>brands9.png" alt="brands"></div>
							<span>該廠牌最新文章A<br>該廠牌最新文章B</span></a>
						</li>
					</ul>
				</div>
				<div class="models">
					<div class="header-logo">
						<a href="#"></a>
					</div>
					<ul>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>models1.png" alt="models"></div>
							<span>Many 50</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>models1.png" alt="models"></div>
							<span>Many 50</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>models1.png" alt="models"></div>
							<span>Many 50</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>models1.png" alt="models"></div>
							<span>Many 50</span></a>
						</li>
					</ul>
				</div>
				<div class="parts">
					<div class="header-logo">
						<a href="#"></a>
					</div>
					<ul>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>parts1.png" alt="parts"></div>
							<span>Many 50</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>parts1.png" alt="parts"></div>
							<span>Many 50</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>parts1.png" alt="parts"></div>
							<span>Many 50</span></a>
						</li>
						<li>
							<a href="#"><div><img src="<?php echo $upload_path ?>parts1.png" alt="parts"></div>
							<span>Many 50</span></a>
						</li>
					</ul>
				</div>
        	</div>
        	<div class="three_center">
        	</div>
        	<div class="three_right">
        	</div>
        </div>		
    </div>