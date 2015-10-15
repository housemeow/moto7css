<?php
$images_path="images/";
$upload_path="../upload/"
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Title of the document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!--css-->
<link href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="js_fk/bxslider/jquery.bxslider.css" rel="stylesheet">
<link rel="stylesheet/less" type="text/css" href="css/style.less" />

<!--js-->
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://rawgit.com/leafo/sticky-kit/v1.0.4/jquery.sticky-kit.min.js"></script>
<script src="js_fk/bxslider/jquery.bxslider.min.js"></script>
<script src="js/function.js"></script>

</head>

<body>
	<!-- Fixed navbar -->
    <nav class="menu navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
      	<a class="navbar-brand" href="#"><img src="<?php echo $images_path ?>logo.png" alt="moto7"></a>
      	<ul class="mainmenu nav navbar-nav">
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
	    <div class="submenu widthType">
	      <a href="#" class="active">國內車廠</a>
	      <a href="#">國外車廠</a>
	      <a href="#">部品</a>
	      <a href="#">活動</a>
	      <a href="#">賽事</a>
	    </div>
      </div>
    </nav>

    <!-- Scroll content -->
    <div class="content">
	    <div class="headerAD jumbotron"><img src="<?php echo $upload_path ?>ad_970x90.gif"></div>
	    <div class="container">
	    	<div class="two_left">
            	<ol class="breadcrumb">
                  <li><a href="#">首頁</a></li>
                  <li class="category"><a href="#">專欄</a></li>
                  <li class="case"><a href="#">特別企劃</a></li>
                  <li class="active">MOTO7 教練團日本 Suzuka 安駕訓練受訓紀實</li>
                </ol>
                <div class="articlePost">
                	<div class="articleTitle">
                    	<h1>MOTO7 教練團日本 Suzuka 安駕訓練受訓紀實</h1>
                        <a class="btn" href="#"><i class="fa fa-camera fa-2x"></i><br />瀏覽相簿</a>
                        <span class="date"><i class="fa fa-calendar fa-lg"></i>05 / 08 / 2014 </span>
                    </div>
                    <div class="articleContent">
                    	<a class="btn btn-default" href="#"><i class="fa fa-reply"></i> 返回</a>
                    	<p>為了精進MOTO7 教練團騎乘技術，提升騎術訓練活動以及安全駕駛內容，MOTO7 主編楊斌與安駕講師小天特別安排到日本的Suzuka 安全駕駛教育中心，來學習最新的騎乘技巧與觀念，並且將這些知識帶回台灣，讓大家也能夠學到最完整的安全駕駛技巧。</p>
                        <div class="hit">
                        	<img src="<?php echo $upload_path ?>img_682x452.jpg">
                        </div>
                        <h2>Suzuka 交通安全中心介紹</h2>
                        <p>HONDA自1964年開始為回饋交通安全，開始研究交通安全，並且在Suzuka 設立第一間交通安全中心，直至今日在日本境內共有7間交通安全中心，另外在37個國家也都有安駕中心或活動進行，旨在進行社會回饋，提升交通安全，新竹安駕中心的前身也曾是HONDA 交通安全中心，在HONDA 與三陽分家後，才獨立出來。</p>
                        <img src="<?php echo $upload_path ?>img01.jpg">
                        <cite>HONDA 交通安全中心在全世界都有安駕中心或活動</cite>
                        <p>Suzuka 交通安全中心位於鈴鹿國際賽車場旁，擁有佔地70,000平方米的場地，整個訓練設施包含一般環場道路、道路實境模擬、低摩擦係數路面、剎車訓練場、雨天訓練場、中低速綜合訓練場、模擬市區道路以及主建築，其設施極為完善，搭配HONDA 交通安全研究團隊四十多年來的研究結晶，成為交通安全研究的指標性學校。</p>
                        <img src="<?php echo $upload_path ?>img02.jpg">
                        <div class="articleFooter">
                        	<a class="btn btn-default" href="#"><i class="fa fa-reply"></i><br />返回</a>
                            <a class="btn btn-primary" href="#"><div class="arrow"><i class="fa fa-arrow-left"></i><br />上一則</div><div class="post"><img src="<?php echo $upload_path ?>img_57x39.jpg"><span>青春無敵，我的生活，我的MY150 檔車教學特輯</span></div></a>
                            <a class="btn btn-primary" href="#"><div class="post next"><img src="<?php echo $upload_path ?>img_57x39.jpg"><span>青春無敵，我的生活，我的MY150 檔車教學特輯</span></div><div class="arrow next"><i class="fa fa-arrow-right"></i><br />下一則</div></a>
                        </div>
                    </div>
                    <div class="relatedPosts">
                        <img class="title" src="images/posttitle.png">
                        <div class="hilightnews">
                            <div>
                                <a href="#">
                                    <img src="../upload/img_165x110.jpg">
                                    <span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
                                    <span class="more"></span>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src="../upload/img_165x110.jpg">
                                    <span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
                                    <span class="more"></span>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src="../upload/img_165x110.jpg">
                                    <span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
                                    <span class="more"></span>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <img src="../upload/img_165x110.jpg">
                                    <span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
                                    <span class="more"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="relatedPosts">
                        <img class="title" src="images/commenttitle.png">
                        <div class="relatedComments">
                        	<div class="commentPost">
                            	<div class="user">
                                	<div class="photo"><img src="../upload/photo_34x34.jpg"></div>
                                	<a href="#">建豪</a>
                                </div>
                            	<div class="comment">
                                	<span class="date">六月 20, 2012 於 2:53 下午</span>
                                    <div class="postText">
                                    	<span class="fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x"></i>
                                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                        </span>
                                        <span class="txt">我比較在意的還是引擎部分~我比較在意的還是引擎部分~我比較在意的還是引擎部分~我比較在意的還是引擎部分~我比較在意的還是引擎部分~</span>
                                    </div>
                                </div>
                                <a class="btn btn-default btn-lg" href="#"><i class="fa fa-comment"></i></a>
                            </div>
                            <div class="commentPost">
                            	<div class="user">
                                	<div class="photo"><img src="../upload/photo_34x34.jpg"></div>
                                	<a href="#">羊</a>
                                </div>
                            	<div class="comment">
                                	<span class="date">六月 20, 2012 於 2:53 下午</span>
                                    <div class="postText">
                                    	<span class="fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x"></i>
                                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                        </span>
                                        <span class="txt">我比較在意的還是引擎部分~</span>
                                    </div>
                                    <div class="commentFeed">
                                        <div class="user">
                                            <div class="photo"><img src="../upload/photo_34x34.jpg"></div>
                                            <a href="#">建豪</a>
                                        </div>
                                        <div class="comment">
                                            <span class="date">六月 20, 2012 於 2:53 下午</span>
                                            <div class="postText">我比較在意的還是引擎部分~</div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-default btn-lg" href="#"><i class="fa fa-comment"></i></a>
                            </div>
                            <nav>
                            	<ul class="pagination">
                                	<li class="disabled"><a href="#"><span aria-hidden="true"><i class="fa fa-chevron-left"></i></span><span class="sr-only">Previous</span></a></li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#"><span aria-hidden="true"><i class="fa fa-chevron-right"></i></span><span class="sr-only">Next</span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="relatedComments commentForm">
                        	<form role="form">
                                <div class="commentPost">
                                    <div class="user">
                                        <div class="photo"><img src="../upload/photo_34x34.jpg"></div>
                                        <a href="#">建豪</a>
                                    </div>
                                    <div class="comment">
                                        <textarea class="form-control" rows="3" placeholder="請輸入您的評論"></textarea>
                                    </div>
                                </div>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa fa-comment"></i> 發表</a>
                            </form>
                        </div>
                    </div>
                </div>
                
	    	</div>
	    	<div class="three_right">
	    		<div class="rightTopAD">
	    			<img src="<?php echo $upload_path ?>ad_320x250.gif">
	    		</div>
	    		<div class="event">
	    			<div class="header"><h2>相關廠商</h2></div>
	    			<div class="content">
	    				<ul class="relatedProducts">
                        	<li>
                            	<img src="<?php echo $upload_path ?>img_84x63.jpg">
                                <span>光陽機車</span>
                                <a href="#">廠商專頁</a>
                            </li>
                            <li>
                            	<img src="<?php echo $upload_path ?>img_84x63.jpg">
                                <span>MOTOREX</span>
                                <a href="#">廠商專頁</a>
                            </li>
                        </ul>
	    			</div>
	    		</div>
                <div class="event">
	    			<div class="header"><h2>相關車款</h2></div>
	    			<div class="content">
	    				<ul class="relatedProducts">
                        	<li>
                            	<img src="<?php echo $upload_path ?>img_84x63.jpg">
                                <span>GSX-S1000F</span>
                                <a href="#">車款專頁</a>
                            </li>
                            <li>
                            	<img src="<?php echo $upload_path ?>img_84x63.jpg">
                                <span>GSX-S1000</span>
                                <a href="#">車款專頁</a>
                            </li>
                        </ul>
	    			</div>
	    		</div>
                <div class="event">
	    			<div class="header"><h2>相關部品</h2></div>
	    			<div class="content">
	    				<ul class="relatedProducts">
                        	<li>
                            	<img src="<?php echo $upload_path ?>img_84x63.jpg">
                                <span>MOTOREX<br>TOP SPEED 4T 5W40</span>
                                <a href="#">部品專頁</a>
                            </li>
                        </ul>
	    			</div>
	    		</div>
	    		<div class="addAD">
	    			<img src="<?php echo $upload_path ?>ad_320x250.gif">
	    		</div>
	    		<div class="addAD">
	    			<img src="<?php echo $upload_path ?>ad_320x250.gif">
	    		</div>
	    		<div class="addAD">
	    			<img src="<?php echo $upload_path ?>ad_320x250.gif">
	    		</div>
	    	</div>
      	</div>
	</div>

	<!-- Footer -->
	<div class="footer">
		<div class="container">
        	<div class="row">
			  <div class="col-xs-2">
			  	<div class="qrcode">
			  		<img src="<?php echo $images_path ?>qrcode.jpg" alt="http://www.moto7.net">
			  		<h5>MOTO7 手機</h5>版掃秒 QR code<br/>加入我的最愛
			  	</div>
			  </div>
			  <div class="col-xs-8">
			  	<dl>
			  		<dt><a href="#">首頁</a></dt>
			  		<ul>
				  		<li><a href="#">關於MOTO7</a></li>
				  		<li><a href="#">會員說明</a></li>
				  		<li><a href="#">隱私權政策</a></li>
				  	</ul>
				  	<ul>
				  		<li><a href="#">報名</a></li>
				  	</ul>
			  	</dl>
			  	<dl>
			  		<dt><a href="#">新聞</a></dt>
			  		<ul>
				  		<li><a href="#">國內車廠</a></li>
				  		<li><a href="#">國外車廠</a></li>
				  		<li><a href="#">部品</a></li>
				  	</ul>
				  	<ul>
				  		<li><a href="#">活動</a></li>
				  		<li><a href="#">賽事</a></li>
				  	</ul>
			  	</dl>
			  	<dl>
			  		<dt><a href="#">專欄</a></dt>
			  		<ul>
				  		<li><a href="#">特別企劃</a></li>
				  		<li><a href="#">安全駕駛</a></li>
				  		<li><a href="#">騎乘技術</a></li>
				  	</ul>
				  	<ul>
				  		<li><a href="#">機械原理</a></li>
				  		<li><a href="#">機車旅遊</a></li>
				  	</ul>
			  	</dl>
			  	<dl>
			  		<dt><a href="#">相簿</a></dt>
			  		<ul>
				  		<li><a href="#">熱門相簿</a></li>
				  		<li><a href="#">新聞相簿</a></li>
				  		<li><a href="#">專題相簿</a></li>
				  	</ul>
			  	</dl>
			  	<dl>
			  		<dt><a href="#">社群</a></dt>
			  		<ul>
				  		<li><a href="#">車廠</a></li>
				  		<li><a href="#">車款</a></li>
				  		<li><a href="#">部品</a></li>
				  	</ul>
			  	</dl>
			  	<dl>
			  		<dt><a href="#">討論</a></dt>
			  	</dl>
			  </div>
			  <div class="col-xs-2">
			  	<div class="fbfans">
			  		<a href="#">
			  			<span class="fa-stack fa-lg">
                          <i class="fa fa-square fa-stack-2x"></i>
                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
			  			<h5>MOTO7<br/>官方粉絲團</h5>
			  		</a>
			  	</div>
			  	<div class="share">
			  		<h5>分享MOTO7</h5>
			  		<ul>
				  		<a href="#"><i class="fa fa-twitter fa-2x"></i></a>
				  		<a href="#"><i class="fa fa-facebook fa-2x"></i></a>
				  		<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                    </ul>
				</div>
			  </div>
			</div>
		</div>
		<div class="copyright"></div>
	</div>

</body>

</html>