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
	    	<div class="two_left">
	    		<a class="qlinkmoto" href="#"></a>
	    		<a class="qlinkparts" href="#"></a>
	    		<div class="qlinkcompany" >
	    			<a href="#"></a>
	    			<div>
	    				<a href="#">KYMCO 光陽</a>
	    				<a href="#">YAMAHA 山葉</a>
	    				<a href="#">SYM 三陽</a>
	    				<a href="#">SUZUKI 鈴木</a>
	    				<a href="#">AEON 宏佳騰</a>
	    				<a href="#">PGO 摩特動力</a>
	    				<a href="#">HARTFORD 哈特佛</a>
	    				<a href="#">HONDA</a>
	    				<a href="#">DUCATI</a>
	    				<a href="#">KAWASKI</a>
	    				<a href="#">TRIUMPH</a>
	    				<a href="#">KTM</a>
	    				<a href="#">APRILIA</a>
	    				<a href="#">BMW</a>
	    				<a href="#">MV AGUSTA</a>
	    				<a href="#">HUSQVARNA</a>
	    			</div>
	    		</div>
	    		<div class="gallery" >
	    			<a href="#"></a>
	    			<div>
	    				<div>
	    					<a href="#">
	    						<span><img src="<?php echo $upload_path ?>img_124x83.jpg" alt="image text"></span>
	    						<ul><li>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</li></ul>
	    					</a>
	    				</div>
	    				<div>
	    					<a href="#">
	    						<span><img src="<?php echo $upload_path ?>img_124x83.jpg" alt="image text"></span>
	    						<ul><li>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</li></ul>
	    					</a>
	    				</div>
	    				<div>
	    					<a href="#">
	    						<span><img src="<?php echo $upload_path ?>img_124x83.jpg" alt="image text"></span>
	    						<ul><li>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</li></ul>
	    					</a>
	    				</div>
	    				<div>
	    					<a href="#">
	    						<span><img src="<?php echo $upload_path ?>img_124x83.jpg" alt="image text"></span>
	    						<ul><li>SUZUKI 新色登場：感受戰鬥機般的靈巧活力</li></ul>
	    					</a>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="rightAD">
			    	<img src="<?php echo $upload_path?>ad_125x125.gif"/>
			    	<img src="<?php echo $upload_path?>ad_125x125.gif"/>
			    </div>
	    	</div>
	    	<div class="two_right">
	    		<div class="slidercontrol">
	    			<a class="picLink" href=""></a>
	    			<div class="info">
	    				<span class="pre"></span>
		    			<a class="more" href=""></a>
		    			<span class="next"></span>
		    		</div>
	    		</div>
	    		<ul class="bxslider">
				  <li><img src="<?php echo $upload_path ?>img1_530x354.jpg" title="測試圖片1" link="#"/></li>
				  <li><img src="<?php echo $upload_path ?>img2_530x354.jpg" title="測試圖片2" link="#"/></li>
				  <li><img src="<?php echo $upload_path ?>img3_530x354.jpg" title="測試圖片3" link="#"/></li>
				  <li><img src="<?php echo $upload_path ?>img4_530x354.jpg" title="測試圖片4" link="#"/></li>
				  <li><img src="<?php echo $upload_path ?>img5_530x354.jpg" title="測試圖片5" link="#"/></li>
				</ul>
				<div class="tineleft">
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
		    			<div class="eventAD">
		    				<img src="<?php echo $upload_path?>ad_125x125.gif"/>
			    			<img src="<?php echo $upload_path?>ad_125x125.gif"/>
		    			</div>
		    		</div>
		    		<div class="discuss">
		    			<div class="header"><h2>熱門討論串</h2></div>
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
				</div>
	    		<div class="news">
					<img class="title" src="<?php echo $images_path ?>newstitle.png">
					<a class="newsLink" href="#">更多新聞</a>
					<div class="hilightnews">
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img_114x76.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
								<span class="more"></span>
							</a>
						</div>
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img_114x76.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
								<span class="more"></span>
							</a>
						</div>
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img_114x76.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
								<span class="more"></span>
							</a>
						</div>
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img_114x76.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
								<span class="more"></span>
							</a>
						</div>
					</div>
					<!-- Nav tabs -->
					<ul class="newtab nav nav-tabs" role="tablist">
					  <li role="presentation" class="active"><a href="#incompany" role="tab" data-toggle="tab">國內車廠</a></li>
					  <li role="presentation"><a href="#outcompany" role="tab" data-toggle="tab">國外車廠</a></li>
					  <li role="presentation"><a href="#parts" role="tab" data-toggle="tab">部品</a></li>
					  <li role="presentation"><a href="#event" role="tab" data-toggle="tab">活動</a></li>
					  <li role="presentation"><a href="#race" role="tab" data-toggle="tab">賽事</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="newtabcontent tab-content">
					  <div role="tabpanel" class="tab-pane active" id="incompany">
					  	<dl>
					  		<dt>最新</dt>
					  		<dd>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  		</dd>
					  	</dl>
					  	<dl>
					  		<dt>熱門</dt>
					  		<dd>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  		</dd>
					  	</dl>
					  </div>
					  <div role="tabpanel" class="tab-pane" id="outcompany">2</div>
					  <div role="tabpanel" class="tab-pane" id="parts">3</div>
					  <div role="tabpanel" class="tab-pane" id="event">4</div>
					  <div role="tabpanel" class="tab-pane" id="race">5</div>
					</div>
				</div>
				<div class="middleAD">
					<img src="<?php echo $upload_path ?>ad_234x60.gif">
					<img src="<?php echo $upload_path ?>ad_234x60.gif">
				</div>
				<div class="news">
					<img class="title" src="<?php echo $images_path ?>columstitle.png">
					<a class="newsLink" href="#">更多專題</a>
					<div class="hilightnews">
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img_114x76.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
								<span class="more"></span>
							</a>
						</div>
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img_114x76.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
								<span class="more"></span>
							</a>
						</div>
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img_114x76.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
								<span class="more"></span>
							</a>
						</div>
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img_114x76.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
								<span class="more"></span>
							</a>
						</div>
					</div>
					<!-- Nav tabs -->
					<ul class="columtab nav nav-tabs" role="tablist">
					  <li role="presentation" class="active"><a href="#special" role="tab" data-toggle="tab">特別企劃</a></li>
					  <li role="presentation"><a href="#safe" role="tab" data-toggle="tab">安全駕駛</a></li>
					  <li role="presentation"><a href="#ride" role="tab" data-toggle="tab">騎乘技術</a></li>
					  <li role="presentation"><a href="#machine" role="tab" data-toggle="tab">機械原理</a></li>
					  <li role="presentation"><a href="#treval" role="tab" data-toggle="tab">機車旅遊</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="newtabcontent tab-content">
					  <div role="tabpanel" class="tab-pane active" id="special">
					  	<dl>
					  		<dt>最新</dt>
					  		<dd>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  		</dd>
					  	</dl>
					  	<dl>
					  		<dt>熱門</dt>
					  		<dd>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  			<a href="#">2015 SUZUKI GSX-S1000/F</a>
					  		</dd>
					  	</dl>
					  </div>
					  <div role="tabpanel" class="tab-pane" id="safe">2</div>
					  <div role="tabpanel" class="tab-pane" id="ride">3</div>
					  <div role="tabpanel" class="tab-pane" id="machine">4</div>
					  <div role="tabpanel" class="tab-pane" id="treval">5</div>
					</div>
				</div>
				<div class="middleAD">
					<img src="<?php echo $upload_path ?>ad_234x60.gif">
					<img src="<?php echo $upload_path ?>ad_234x60.gif">
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