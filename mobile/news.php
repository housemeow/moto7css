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
<link href="css/jquery_mobile/jquery.mobile.icons.min.css" rel="stylesheet">
<link href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" rel="stylesheet">
<link href="css/jquery_mobile/moto7.min.css" rel="stylesheet">
<link rel="stylesheet/less" type="text/css" href="css/style.less" />

<!--js-->
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/utils/Draggable.min.js"></script>
<script src="js_fk/bxslider/jquery.bxslider.min.js"></script>
<script src="js/function.js"></script>
</head>

<body>
	<div data-role="page" class="page">
	  <!-- panel -->
	  <div class="memberPanel" data-role="panel" id="memberPanel" data-display="push" data-position="left" data-position-fixed="true">
	  	<div>
	    	<h2>會員服務</h2>
	    	<a class="close" href="#" href="#memberPanel" data-rel="close"><img src="<?php echo $images_path?>menucloseicon.png"/></a> 
	   	</div>
	    <ul data-role="listview">
	      <li data-icon="false"><a href="#">登入</a></li>
	      <li data-icon="false"><a href="#">註冊</a></li>
	    </ul>
	  </div> 
	  <div class="menuPanel" data-role="panel" id="menuPanel" data-display="push" data-position="right" data-position-fixed="true"> 
	    <div class="title">
	    	<h2>主選單</h2>
	    	<a class="close" href="#" href="#memberPanel" data-rel="close"><img src="<?php echo $images_path?>menucloseicon.png"/></a> 
	   	</div>
	   	<div class="content">
		   	<ul class="mainmenuList">
		      <li class="mainmenuitem"><a href="#"><img src="<?php echo $images_path?>menuhome.png"/><span>首頁</span></a></li>
		      <li class="mainmenuitem"><a href="#"><img src="<?php echo $images_path?>menubooking.png"/><span>報名</span></a></li>
		      <li class="mainmenuitem last"><a href="#"><img src="<?php echo $images_path?>menudiscuss.png"/><span>討論</span></a></li>
		      <li class="mainmenuitem"><a href="#"><img src="<?php echo $images_path?>menunews.png"/><span>新聞</span></a></li>
		      <li class="mainmenuitem"><a href="#"><img src="<?php echo $images_path?>menucolums.png"/><span>專欄</span></a></li>
		      <li class="mainmenuitem last"><a href="#"><img src="<?php echo $images_path?>menugallery.png"/><span>相簿</span></a></li>
		      <li class="submenuList">
		      	<ul>
		      		 <li><a href="#">國內車廠</a></li>
		      		 <li><a href="#">國外車廠</a></li>
		      		 <li><a href="#">部品</a></li>
		      		 <li><a href="#">活動</a></li>
		      		 <li><a href="#">賽事</a></li>
		      	</ul>
		      </li>
		      <li class="mainmenuitem"><a href="#"><img src="<?php echo $images_path?>menucompany.png"/><span>車廠</span></a></li>
		      <li class="mainmenuitem"><a href="#"><img src="<?php echo $images_path?>menumoto.png"/><span>車款</span></a></li>
		      <li class="mainmenuitem last"><a href="#"><img src="<?php echo $images_path?>menuparts.png"/><span>部品</span></a></li>
		      <li class="fbfans">
              		<a href="#">
              			<span class="fa-stack fa-lg">
                          <i class="fa fa-square fa-stack-2x"></i>
                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                        <h5>MOTO7<br/>官方粉絲團</h5>
                    </a>
              </li>
		      <li class="sharebtn">
              		<h5>分享MOTO7</h5>
			  		<ul>
				  		<a href="#"><i class="fa fa-twitter fa-2x"></i></a>
				  		<a href="#"><i class="fa fa-facebook fa-2x"></i></a>
				  		<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                    </ul>
              </li>
		    </ul>
		</div>
	  </div> 

	  <!-- header -->
	  <div data-role="header" class="header" data-position="fixed">
	  	<a class="membermenu" href="#memberPanel"><img src="<?php echo $images_path?>membermenuicon.png"/></a>
	    <a class="logo" href="#"><img src="<?php echo $images_path?>logo.png"/></a> 
	    <a class="mainmenu" href="#menuPanel"><img src="<?php echo $images_path?>mainmenuicon.png"/></a>
	  </div>

	  <!-- content -->
	  <div data-role="main" class="pagecontent ui-content">
	  	<div class="toolbar ui-bar">
	  		<div class="search">
	        	<input type="text" placeholder="請輸入關鍵字查詢">
	        	<button type="button"><img src="<?php echo $images_path?>searchicon.png"/></button>
	        </div>
	        <a href="#"><img src="<?php echo $images_path?>mailicon.png"/>車迷信箱</a>
	    </div>
	    <div class="headerAD">
	    	<img src="<?php echo $upload_path?>ad2X_320x100.gif"/>
	    </div>
		<div class="content">
    		<ol class="breadcrumb">
              <li><a href="#">首頁</a></li>
              <li class="category"><a href="#">新聞</a></li>
              <li class="active">全部新聞</li>
            </ol>
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
            <div class="articleList newsContainer">
            	<a class="articleItem newsItem" href="newspost.php">
                	<img src="<?php echo $upload_path ?>img_89x59.jpg"/>
                    <div class="articleInfo">
						<span class="tag">部品</span>
                        <span class="comment"><i class="fa fa-comment fa-lg"></i>12,136</span>
						<h1>MOTO7 教練團日本 Suzuka 安駕訓練受訓紀實</h1>
                    </div>
                </a>
                <a class="articleItem newsItem" href="newspost.php">
                	<img src="<?php echo $upload_path ?>img_89x59.jpg"/>
                    <div class="articleInfo">
						<span class="tag">部品</span>
						<span class="comment"><i class="fa fa-comment fa-lg"></i>12,136</span>
						<h1>MOTO7 教練團日本 Suzuka 安駕訓練受訓紀實</h1>
                    </div>
                </a>
            </div>
		</div>
	    <div class="breakAD">
		 	<img src="<?php echo $upload_path?>ad2X_320x50.gif"/>
		</div>
		<div class="content middle">
		    <div class="event">
	    		<div class="eventheader"><h2>活動特區</h2></div>
	    		<div class="eventcontent">
	    			<div class="item">
	    				<a href="#">
	    					<span class="img">
	    						<img src="<?php echo $upload_path ?>img2X_267x178.jpg">
	    						<span class="name">MOTO7 騎乘技術訓練 2013年度開課</span>
	    					</span>
	    					<span class="date">報名時間: 即日起到10月底為止</span>
	    					<img class="submit" src="<?php echo $images_path?>eventsubmit.png"/>
	    				</a>
	    			</div>
	    		</div>
	    	</div>
            <div class="articleList newsContainer">
            	<a class="articleItem newsItem" href="newspost.php">
                	<img src="<?php echo $upload_path ?>img_89x59.jpg"/>
                    <div class="articleInfo">
						<span class="tag">部品</span>
                        <span class="comment"><i class="fa fa-comment fa-lg"></i>12,136</span>
						<h1>MOTO7 教練團日本 Suzuka 安駕訓練受訓紀實</h1>
                    </div>
                </a>
                <a class="articleItem newsItem" href="newspost.php">
                	<img src="<?php echo $upload_path ?>img_89x59.jpg"/>
                    <div class="articleInfo">
						<span class="tag">部品</span>
						<span class="comment"><i class="fa fa-comment fa-lg"></i>12,136</span>
						<h1>MOTO7 教練團日本 Suzuka 安駕訓練受訓紀實</h1>
                    </div>
                </a>
            </div>
	    	<div class="middleAD">
		    	<img src="<?php echo $upload_path?>ad2X_125x125.gif"/>
		    	<img src="<?php echo $upload_path?>ad2X_125x125.gif"/>
		    </div>
		</div>
		<div class="disscuss">
	    	<div class="disscussheader"><h2>熱門討論串</h2></div>
	    	<div class="disscusscontent">
	    		<ul class="disscuss">
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

	  <!-- footer -->
	  <div class="footer" data-role="footer">
	    <ul>
			 <li><a href="#">關於MOTO7</a></li>
			 <li><a href="#">會員說明</a></li>
			 <li><a href="#">隱私權政策</a></li>
		</ul>
		<img src="<?php echo $images_path?>copyright.png"/>
	  </div> 
	</div> 
</body>
</html>