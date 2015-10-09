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
		<link rel="stylesheet/less" type="text/css" href="css/mainstory.less" />
		<!--js-->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://rawgit.com/leafo/sticky-kit/v1.0.4/jquery.sticky-kit.min.js"></script>
		<script src="js_fk/bxslider/jquery.bxslider.min.js"></script>
		<script src="js/function.js"></script>
	</head>
	<body>
		<div class="mainstory">
			<ul class="tab-panel">
				<li class="active">全部資訊</li><!-- 
				 --><li>即時新聞</li><!-- 
				 --><li>專題報導</li><!-- 
				 --><li>討論專區</li><!-- 
				 --><li>好友動態</li>
			</ul>
			<ul class="block-panel">
			    <li class="left-image-panel">
			        <img class="left-photo" src="<?=$upload_path?>news_photo_1.jpg" />
			        <div class="right-info background">
			            <div class="title">
			                <div class="tag">
			                    <div>新聞</div><!-- 
				 				--><div>部品</div>
							</div>
			                <div class="info">GRO 全球賽車油與WeBike摩托百貨合作</div>
			            </div>
			            <div class="content">
			                摩托車綜合購物網站「Webike」自2000年在日本開幕，14年來已成為日......<span class="more">[ more ]</span>
			            </div>
				    	<div class="popular-count">
				    		<img src="<?=$images_path?>message_icon.png" />
				    		<span>126</span>
				    	</div>
			        </div>
			    </li>
			    <li class="right-image-panel">
			        <div class="left-info background">
			        	<div class="title">
			                <div class="tag">
			                    <div>專題</div><!-- 
				 				--><div>部品</div>
							</div>
			                <div class="info">MOTO7 教練團日本 Suzuka 安駕訓練受訓紀實</div>
			            </div>
			            <div class="content">
			                為了精進MOTO7 教練團騎乘技術，提升騎術訓練活動以及安全駕駛內容，MOTO7 主編楊斌與安駕講師小天特別安排到日本的Suzuka 安全駕駛教育中心，來學習最新的騎乘技巧與觀念...<span class="more">[ more ]</span>
			            </div>
			            <div class="popular-count">
				    		<img src="<?=$images_path?>message_icon.png" />
				    		<span>12,136</span>
				    	</div>
			        </div>
			        <img class="right-photo" src="<?=$upload_path?>news_photo_2.jpg" />
			    </li>
			    <li class="gallery-panel">
			    	<div class="top-info background">
						<div class="title">
			                <div class="tag">
			                    <div>專題</div><!-- 
				 				--><div>部品</div>
							</div>
			                <div class="info">SYM 野狼SB300/CR 暨重車聯盟發表會報導</div>
			            </div>
			            <div class="popular-count">
				    		<img src="<?=$images_path?>message_icon.png" />
				    		<span>12,136</span>
				    	</div>
			    	</div>
			    	<div class="bottom-photos">
			    		<img src="<?=$upload_path?>news_photo_3.jpg" />
				        <img src="<?=$upload_path?>news_photo_4.jpg" />
				        <img src="<?=$upload_path?>news_photo_5.jpg" />
				        <img src="<?=$upload_path?>news_photo_6.jpg" />
				        <img src="<?=$upload_path?>news_photo_7.jpg" />
			    	</div>
			    </li>
			    <li class="disscuss-panel">
			    	<div class="center-info background">
				    	<div class="title">
			                <div class="tag">
			                    <div>討論</div><!-- 
				 				--><div>部品</div>
							</div>
			                <div class="info">SYM 野狼SB300/CR 暨重車聯盟發表會報導</div>
			            </div>
			    		<div class="popular-count">
				    		<img src="<?=$images_path?>message_icon.png" />
				    		<span>12,136</span>
				    	</div>
			            <div class="disscuss-table">
			            	<div class="disscuss-row">
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_1.jpg" />
			            			<div class="content">
			            				台灣如果125cc能上高速的話 不守規矩的屁孩橫行......
			            			</div>
			            		</div>
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_2.jpg" />
			            			<div class="content">
			            				我認為以車速分流來說，這樣可行的但是以台灣的.....
			            			</div>
			            		</div>
			            	</div>
			            	<div class="disscuss-row">
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_1.jpg" />
			            			<div class="content">
			            				台灣如果125cc能上高速的話 不守規矩的屁孩橫行......
			            			</div>
			            		</div>
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_2.jpg" />
			            			<div class="content">
			            				我認為以車速分流來說，這樣可行的但是以台灣的.....
			            			</div>
			            		</div>
			            	</div>
			            	<div class="disscuss-row">
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_1.jpg" />
			            			<div class="content">
			            				台灣如果125cc能上高速的話 不守規矩的屁孩橫行......
			            			</div>
			            		</div>
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_2.jpg" />
			            			<div class="content">
			            				我認為以車速分流來說，這樣可行的但是以台灣的.....
			            			</div>
			            		</div>
			            	</div>
			            </div>
		            </div>
			    </li>
			    <li class="message-panel">
			    	<div class="left-photo">
			    		<img src="<?=$upload_path?>message_photo_1.jpg" />
			    	</div>
			    	<div class="right-info background">
			    		<div class="title">
			                <div class="tag">
			                    <div>AAA</div>
							</div>
			                <div class="info">GRO 全球賽車油....留言:</div>
			                <div class="content">
			                	爽~ 這樣到處都買的到了~
			                </div>
			            </div>
			    	</div>
		    		<div class="popular-count">
			    		<img src="<?=$images_path?>message_icon.png" />
			    		<span>126</span>
			    	</div>
			    </li>
			    <li class="message-panel">
			    	<div class="left-photo">
			    		<img src="<?=$upload_path?>message_photo_2.jpg" />
			    	</div>
			    	<div class="right-info background">
			    		<div class="title">
			                <div class="tag">
			                    <div>BBB</div>
							</div>
			                <div class="info">GRO 全球賽車油....留言:</div>
			                <div class="content">
			                	爽~ 這樣到處都買的到了~
			                </div>
			            </div>
			    	</div>
		    		<div class="popular-count">
			    		<img src="<?=$images_path?>message_icon.png" />
			    		<span>126</span>
			    	</div>
			    </li>
			    <li class="left-image-panel">
			        <img class="left-photo" src="<?=$upload_path?>news_photo_1.jpg" />
			        <div class="right-info background">
			            <div class="title">
			                <div class="tag">
			                    <div>新聞</div><!-- 
				 				--><div>部品</div>
							</div>
			                <div class="info">GRO 全球賽車油與WeBike摩托百貨合作</div>
			            </div>
			            <div class="content">
			                摩托車綜合購物網站「Webike」自2000年在日本開幕，14年來已成為日......<span class="more">[ more ]</span>
			            </div>
			            <div class="popular-count">
				    		<img src="<?=$images_path?>message_icon.png" />
				    		<span>126</span>
				    	</div>
			        </div>
			    </li>
			    <li class="right-image-panel">
			        <div class="left-info background">
			        	<div class="title">
			                <div class="tag">
			                    <div>專題</div><!-- 
				 				--><div>部品</div>
							</div>
			                <div class="info">MOTO7 教練團日本 Suzuka 安駕訓練受訓紀實</div>
			            </div>
			            <div class="content">
			                為了精進MOTO7 教練團騎乘技術，提升騎術訓練活動以及安全駕駛內容，MOTO7 主編楊斌與安駕講師小天特別安排到日本的Suzuka 安全駕駛教育中心，來學習最新的騎乘技巧與觀念...<span class="more">[ more ]</span>
			            </div>
			            <div class="popular-count">
				    		<img src="<?=$images_path?>message_icon.png" />
				    		<span>12,136</span>
				    	</div>
			        </div>
			        <img class="right-photo" src="<?=$upload_path?>news_photo_2.jpg" />
			    </li>
			    <li class="gallery-panel">
			    	<div class="top-info background">
						<div class="title">
			                <div class="tag">
			                    <div>專題</div><!-- 
				 				--><div>部品</div>
							</div>
			                <div class="info">SYM 野狼SB300/CR 暨重車聯盟發表會報導</div>
			            </div>
			            <div class="popular-count">
				    		<img src="<?=$images_path?>message_icon.png" />
				    		<span>12,136</span>
				    	</div>
			    	</div>
			    	<div class="bottom-photos">
			    		<img src="<?=$upload_path?>news_photo_3.jpg" />
				        <img src="<?=$upload_path?>news_photo_4.jpg" />
				        <img src="<?=$upload_path?>news_photo_5.jpg" />
				        <img src="<?=$upload_path?>news_photo_6.jpg" />
				        <img src="<?=$upload_path?>news_photo_7.jpg" />
			    	</div>
			    </li>
			    <li class="disscuss-panel">
			    	<div class="center-info background">
				    	<div class="title">
			                <div class="tag">
			                    <div>討論</div><!-- 
				 				--><div>部品</div>
							</div>
			                <div class="info">SYM 野狼SB300/CR 暨重車聯盟發表會報導</div>
			            </div>
			            <div class="popular-count">
				    		<img src="<?=$images_path?>message_icon.png" />
				    		<span>12,136</span>
				    	</div>
			            <div class="disscuss-table">
			            	<div class="disscuss-row">
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_1.jpg" />
			            			<div class="content">
			            				台灣如果125cc能上高速的話 不守規矩的屁孩橫行......
			            			</div>
			            		</div>
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_2.jpg" />
			            			<div class="content">
			            				我認為以車速分流來說，這樣可行的但是以台灣的.....
			            			</div>
			            		</div>
			            	</div>
			            	<div class="disscuss-row">
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_1.jpg" />
			            			<div class="content">
			            				台灣如果125cc能上高速的話 不守規矩的屁孩橫行......
			            			</div>
			            		</div>
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_2.jpg" />
			            			<div class="content">
			            				我認為以車速分流來說，這樣可行的但是以台灣的.....
			            			</div>
			            		</div>
			            	</div>
			            	<div class="disscuss-row">
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_1.jpg" />
			            			<div class="content">
			            				台灣如果125cc能上高速的話 不守規矩的屁孩橫行......
			            			</div>
			            		</div>
			            		<div class="disscuss-cell">
			            			<img src="<?=$upload_path?>discuss_cell_photo_2.jpg" />
			            			<div class="content">
			            				我認為以車速分流來說，這樣可行的但是以台灣的.....
			            			</div>
			            		</div>
			            	</div>
			            </div>
		            </div>
			    </li>
			</ul>
			<div class="more-panel">
				<div class="load-more">
					<img class="left-icon" src="<?=$images_path?>load_more.png" />
					<span class="hint-text">載入更多資訊</span>
					<img class="right-icon" src="<?=$images_path?>load_more.png" />
				</div>
				&nbsp;
				<div class="enter-page">
					<span class="hint-text">進入頁面專區</span>
					<img class="right-icon" src="<?=$images_path?>enter_page.png" />
				</div>
			</div>
		</div>
	</body>
</html>