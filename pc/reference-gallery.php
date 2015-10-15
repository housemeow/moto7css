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
	  "columnWidth": 195,
	  itemSelector: '.newsItem',
	  "gutter": 14
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
                  <li class="category"><a href="#">相簿</a></li>
                  <li class="active">熱門相簿</li>
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
                    <i class="fa fa-filter fa-lg"></i> 熱門相簿 <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">部品</a></li>
                    <li><a href="#">活動</a></li>
                    <li><a href="#">賽事</a></li>
                    <li><a href="#">國內車廠</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    即時新聞 <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">即時新聞</a></li>
                    <li><a href="#">即時新聞</a></li>
                    <li><a href="#">即時新聞</a></li>
                  </ul>
                </div>
                <div id="newsContainer">
                  <div class="newsItem galleryItem">
                  	<a href="gallerypost.php">
                  		<h4>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</h4>
                        <img src="<?php echo $upload_path ?>img_175x117.jpg">
                        <span class="tag">新聞</span>
                        <span class="comment"><i class="fa fa-picture-o fa-lg"></i> 126</span>
                    </a>
                  </div>
                  <div class="newsItem galleryItem">
                  	<a href="gallerypost.php">
                  		<h4>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</h4>
                        <img src="<?php echo $upload_path ?>img_175x117.jpg">
                        <span class="tag">新聞</span>
                        <span class="comment"><i class="fa fa-picture-o fa-lg"></i> 126</span>
                    </a>
                  </div>
                  <div class="newsItem galleryItem">
                  	<a href="gallerypost.php">
                  		<h4>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</h4>
                        <img src="<?php echo $upload_path ?>img_175x117.jpg">
                        <span class="tag">新聞</span>
                        <span class="comment"><i class="fa fa-picture-o fa-lg"></i> 126</span>
                    </a>
                  </div>
                  <div class="newsItem galleryItem">
                  	<a href="gallerypost.php">
                  		<h4>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</h4>
                        <img src="<?php echo $upload_path ?>img_175x117.jpg">
                        <span class="tag">新聞</span>
                        <span class="comment"><i class="fa fa-picture-o fa-lg"></i> 126</span>
                    </a>
                  </div>
                  <div class="newsItem galleryItem">
                  	<a href="gallerypost.php">
                  		<h4>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</h4>
                        <img src="<?php echo $upload_path ?>img_175x117.jpg">
                        <span class="tag">新聞</span>
                        <span class="comment"><i class="fa fa-picture-o fa-lg"></i> 126</span>
                    </a>
                  </div>
                  <div class="newsItem galleryItem">
                  	<a href="gallerypost.php">
                  		<h4>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</h4>
                        <img src="<?php echo $upload_path ?>img_175x117.jpg">
                        <span class="tag">新聞</span>
                        <span class="comment"><i class="fa fa-picture-o fa-lg"></i> 126</span>
                    </a>
                  </div>
                  <div class="newsItem galleryItem">
                  	<a href="gallerypost.php">
                  		<h4>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</h4>
                        <img src="<?php echo $upload_path ?>img_175x117.jpg">
                        <span class="tag">新聞</span>
                        <span class="comment"><i class="fa fa-picture-o fa-lg"></i> 126</span>
                    </a>
                  </div>
                  <div class="newsItem galleryItem">
                  	<a href="gallerypost.php">
                  		<h4>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</h4>
                        <img src="<?php echo $upload_path ?>img_175x117.jpg">
                        <span class="tag">新聞</span>
                        <span class="comment"><i class="fa fa-picture-o fa-lg"></i> 126</span>
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
	    	<div class="three_right">
	    		<div class="rightTopAD">
	    			<img src="<?php echo $upload_path ?>ad_320x250.gif">
	    		</div>
	    		<div class="event">
	    			<div class="header"><h2>活動特區</h2></div>
	    			<div class="content">
	    				<div class="item">
	    					<a href="#">
	    						<img src="<?php echo $upload_path ?>img_267x178.jpg">
	    						<span class="name">MOTO7 騎乘技術訓練 2013年度開課</span>
	    						<span class="date">報名時間: 即日起到10月底為止</span>
	    						<span class="submit"></span>
	    					</a>
	    				</div>
	    			</div>
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