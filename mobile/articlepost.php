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
              <li class="category"><a href="#">專欄</a></li>
              <li class="case"><a href="#">特別企劃</a></li>
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
                        <a class="btn btn-primary" href="#"><div class="arrow"><i class="fa fa-arrow-left"></i><br />上一則</div><div class="post"><span>青春無敵，我的生活，我的MY150 檔車教學特輯</span></div></a>
                        <a class="btn btn-primary next" href="#"><div class="post next"><img src="<?php echo $upload_path ?>img_57x39.jpg"><span>青春無敵，我的生活，我的MY150 檔車教學特輯</span></div><div class="arrow next"><i class="fa fa-arrow-right"></i><br />下一則</div></a>
                    </div>
                </div>
			    <div class="news colum">
			    	<img class="title" src="<?php echo $images_path ?>posttitle.png">
					<div class="hilightnews">
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img2X_67x45.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
							</a>
						</div>
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img2X_67x45.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
							</a>
						</div>
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img2X_67x45.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
							</a>
						</div>
						<div>
							<a href="#">
								<img src="<?php echo $upload_path ?>img2X_67x45.jpg"/>
								<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	    <div class="breakAD">
		 	<img src="<?php echo $upload_path?>ad2X_320x50.gif"/>
		</div>
		<div class="content middle">
			<div class="articlePost">
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
                                    <span class="txt">我比較在意的還是引擎部分~</span>
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
                                   <span class="txt"> 我比較在意的還是引擎部分~</span>
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
			
	    	<div class="middleAD">
		    	<img src="<?php echo $upload_path?>ad2X_125x125.gif"/>
		    	<img src="<?php echo $upload_path?>ad2X_125x125.gif"/>
		    </div>
			
    		<div class="event">
    			<div class="eventheader"><h2>相關廠商</h2></div>
    			<div class="eventcontent">
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
    			<div class="eventheader"><h2>相關車款</h2></div>
    			<div class="eventcontent">
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
    			<div class="eventheader"><h2>相關部品</h2></div>
    			<div class="eventcontent">
    				<ul class="relatedProducts">
                    	<li>
                        	<img src="<?php echo $upload_path ?>img_84x63.jpg">
                            <span>MOTOREX<br>TOP SPEED 4T 5W40</span>
                            <a href="#">部品專頁</a>
                        </li>
                    </ul>
    			</div>
    		</div>
		</div>
		
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