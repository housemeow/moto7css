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
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/function.js"></script>
<script>
jQuery(function(){
	var container = document.querySelector('#newsContainer');
	var msnry = new Masonry( container, {
	  // options
	  "columnWidth": 172,
	  itemSelector: '.newsItem',
	  "gutter": 13
	});
});
</script>
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
	      <input type="text" class="form-control" placeholder="請輸入關鍵字">
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
    	<div class="headerAD jumbotron"><img src="<?php echo $upload_path ?>ad_728x90.gif"></div>
    	<div class="container">
	    	<div class="two_right left news">
	    		<ol class="breadcrumb">
                  <li><a href="#">首頁</a></li>
                  <li class="category"><a href="#">新聞</a></li>
                  <li class="active">全部新聞</li>
                </ol>
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
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-filter fa-lg"></i> 全部新聞 <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">部品</a></li>
                    <li><a href="#">活動</a></li>
                    <li><a href="#">賽事</a></li>
                    <li><a href="#">國內車廠</a></li>
                  </ul>
                </div>
	            <div id="newsContainer">
	              <div class="newsItem">
	              	<a href="newspost.php">
	              		<h4>GRO 全球賽車油與WeBike 摩托百貨合作</h4>
	                    <img src="<?php echo $upload_path ?>img_175x117.jpg" width="154">
	                    <span class="tag">部品</span>
	                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 126</span>
	                    <p>摩托車綜合購物網站「Webike」自2000年在日本開幕，14年來已成為日本最大的摩托車改裝部品及精品的......<span>[ more ]</span></p>
	                </a>
	              </div>
	              <div class="newsItem">
	              	<a href="newspost.php">
	                	<h4>2014 Bikertopia Taiwan Rally 亞洲騎士烏托邦</h4>
	                    <img src="<?php echo $upload_path ?>img_175x117.jpg" width="154">
	                    <span class="tag">活動</span>
	                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 1,456</span>
	                    <p>哈雷重機年度盛會「Bikertopia Taiwan Rally 亞洲騎士烏托邦」是哈雷台灣總代理 太古鼎翰從「台灣哈雷狂熱搖滾......<span>[ more ]</span></p>
	                </a>
	              </div>
	              <div class="newsItem">
	              	<a href="newspost.php">
	                	<h4>台灣山葉機車再度榮獲103年體育推手獎肯定！</h4>
	                    <img src="<?php echo $upload_path ?>img_175x245.jpg" width="154">
	                    <span class="tag">國內車廠</span>
	                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 3,011</span>
	                    <p>台灣山葉機車工業股份有限公司於九月九日體育節所舉辦的體育推手獎表揚典禮上，獲頒教育部體育署103年度「體育推手獎」贊助類長期贊助獎！這是繼去年榮獲銅質獎後，再一次獲得教育部的肯定。......<span>[ more ]</span></p>
	                </a>
	              </div>
	              <div class="newsItem">
	              	<a href="newspost.php">
	                	<h4>2014 VESPA 946 Bellissima 跨世代頂級收藏</h4>
	                    <img src="<?php echo $upload_path ?>img_175x117.jpg" width="154">
	                    <span class="tag">國內車廠</span>
	                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 1,456</span>
	                    <p>VESPA 946，義大利精品工藝的極致展現，2013年黑白兩色限定版「Ricardo Italiano」在其成功問世一年後，已成絕響！經典美學，傳世工藝，雋永品味，2014年跨世代的頂級收藏車款 ─ VESPA
	946「Bellissima」將再度展現其經典與時尚完美結合的絕世工藝！......<span>[ more ]</span></p>
	                </a>
	              </div>
	              <div class="newsItem w2">
	              	<a href="newspost.php">
	                	<h4>ADC 捷報，台灣車手莊安育站上亞洲夢想盃頒獎台</h4>
	                    <img src="<?php echo $upload_path ?>img_384x256.jpg" width="339">
	                    <span class="tag">賽事</span>
	                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 1,456</span>
	                    <p>9月7日在日本鈴鹿賽車場舉行的亞洲夢想盃（ADC）第四站的賽事，台灣車手莊安育在上午第一回合與頒獎台擦身而過，下午的第二回合一舉奪得亞軍站上頒獎台，是自2012年亞洲夢想盃開辦以來，第一位
	站上頒獎台的台灣車手。......<span>[ more ]</span></p>
	                </a>
	              </div>
	              <div class="newsItem">
	              	<a href="newspost.php">
	                	<h4>全新BMW S1000R 強勢登場</h4>
	                    <img src="<?php echo $upload_path ?>img_175x245.jpg" width="154">
	                    <span class="tag">國內車廠</span>
	                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 3,011</span>
	                    <p>承襲S1000RR 的光榮傳統，但不安於現況，更勝以往。量身打造性能街車，精心調教不同引擎特性，輸出更線性、操控性更大幅提升。標配賽道版ABS 與ASC，令人肆無忌憚；輕鬆愜意面對任何路況......<span>[ more ]</span></p>
	                </a>
	              </div>
	              <div class="newsItem">
	              	<a href="newspost.php">
	                	<h4>國際級藝術大師傑作，哈雷改裝、彩繪車創作鑑賞會</h4>
	                    <img src="<?php echo $upload_path ?>img_175x117.jpg" width="154">
	                    <span class="tag">活動</span>
	                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 126</span>
	                    <p>HARLEY-DAVIDSON 台灣總代理太古鼎翰有限公司自2008年起不僅致力於騎士文化推廣，同時也與在地產業結合，創造更多騎士驚喜,繼去年成功與國際級彩繪大師合作推出限量彩繪車款，今年更加入改裝文化展現獨家手藝，創哈雷改裝彩繪新亮點。......<span>[ more ]</span></p>
	                </a>
	              </div>
	              <div class="newsItem">
	              	<a href="newspost.php">
	                	<h4>台灣山葉機車再度榮獲103年體育推手獎肯定！</h4>
	                    <img src="<?php echo $upload_path ?>img_175x245.jpg" width="154">
	                    <span class="tag">國內車廠</span>
	                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 3,011</span>
	                    <p>台灣山葉機車工業股份有限公司於九月九日體育節所舉辦的體育推手獎表揚典禮上，獲頒教育部體育署103年度「體育推手獎」贊助類長期贊助獎！這是繼去年榮獲銅質獎後，再一次獲得教育部的肯定。......<span>[ more ]</span></p>
	                </a>
	              </div>
	              <div class="newsItem">
	              	<a href="newspost.php">
	                	<h4>2014 VESPA 946 Bellissima 跨世代頂級收藏</h4>
	                    <img src="<?php echo $upload_path ?>img_175x117.jpg" width="154">
	                    <span class="tag">國內車廠</span>
	                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 1,456</span>
	                    <p>VESPA 946，義大利精品工藝的極致展現，2013年黑白兩色限定版「Ricardo Italiano」在其成功問世一年後，已成絕響！經典美學，傳世工藝，雋永品味，2014年跨世代的頂級收藏車款 ─ VESPA
	946「Bellissima」將再度展現其經典與時尚完美結合的絕世工藝！......<span>[ more ]</span></p>
	                </a>
	              </div>
	              <div class="newsItem w2">
	              	<a href="newspost.php">
	                	<h4>ADC 捷報，台灣車手莊安育站上亞洲夢想盃頒獎台</h4>
	                    <img src="<?php echo $upload_path ?>img_384x256.jpg" width="339">
	                    <span class="tag">賽事</span>
	                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 1,456</span>
	                    <p>9月7日在日本鈴鹿賽車場舉行的亞洲夢想盃（ADC）第四站的賽事，台灣車手莊安育在上午第一回合與頒獎台擦身而過，下午的第二回合一舉奪得亞軍站上頒獎台，是自2012年亞洲夢想盃開辦以來，第一位
	站上頒獎台的台灣車手。......<span>[ more ]</span></p>
	                </a>
	              </div>
	            </div>
	            <nav>
	              <ul class="pagination left">
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
            <div class="two_left right">
	    		<div class="rightAD">
			    	<img src="<?php echo $upload_path?>ad_120x240.gif"/>
			    </div>
                <div class="event">
                    <div class="header"><h2>活動特區</h2></div>
                    <div class="content">
                        <div class="item">
                            <a href="#">
                                <img src="<?php echo $upload_path ?>img_146x97.jpg">
                                <span class="name">MOTO7 騎乘技術訓練 2013年度開課</span>
                                <span class="date">報名時間: 即日起到10月底為止</span>
                                <span class="submit"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="discuss">
                    <div class="header"><h2>熱門新聞</h2></div>
                    <div class="content">
                        <ul class="list">
                            <li><a href="#">感受速度與聲浪的極限 台灣TMAX 530 GP應援團</a></li>
                            <li><a href="#">感受速度與聲浪的極限 台灣TMAX 530 GP應援團</a></li>
                            <li><a href="#">感受速度與聲浪的極限 台灣TMAX 530 GP應援團</a></li>
                            <li><a href="#">感受速度與聲浪的極限 台灣TMAX 530 GP應援團</a></li>
                            <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                            <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                            <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                            <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                            <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                            <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                        </ul>
                    </div>
                </div>
                <div class="rightAD">
			    	<img src="<?php echo $upload_path?>ad_120x240.gif"/>
                    <img src="<?php echo $upload_path?>ad_120x240.gif"/>
			    </div>
	    	</div>
	    </div>
	</div>

	<!-- Footer -->
	<div class="footer">
		<div class="container">
        	<div class="col-xs-10">
			  	<dl>
			  		<dt><a href="#">首頁</a></dt>
			  		<ul>
				  		<li><a href="#">關於MOTO7</a></li>
				  		<li><a href="#">會員說明</a></li>
				  		<li><a href="#">隱私權政策</a></li>
				  		<li><a href="#">報名</a></li>
				  	</ul>
			  	</dl>
			  	<dl>
			  		<dt><a href="#">新聞</a></dt>
			  		<ul>
				  		<li><a href="#">國內車廠</a></li>
				  		<li><a href="#">國外車廠</a></li>
				  		<li><a href="#">部品</a></li>
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
		<div class="copyright"></div>
	</div>

</body>

</html>