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
					<div class="component-container">
						<div class="article-slide-show">
							<div class="article-preview">
								<img src="images/japantravel.png" />
								<a class="article-title" href=""><p>2014 TMAX 530 車主日本GP之旅：茂木賽道篇</p></a>
								<a class="read-article" href=""><img src="images/readmore.png"></a>
							</div>
							<div class="article-list">
								<a href=""><div class="article-item">
									<img src="images/car1.png">
									<span class="article-title">CUSTOM MOTO：KYMCO QUANNON BY禾倉技研</span>
									<div class="hover-line"></div>
								</div></a>
								<a href=""><div class="article-item">
									<img src="images/car2.png">
									<span class="article-title">GRO 全球賽車油與WEBIKE 摩托百貨合作</span>
									<div class="hover-line"></div>
								</div></a>
								<a href=""><div class="article-item">
									<img src="images/car3.png">
									<span class="article-title">全新BMW R1200 RS – 旅跑車的全新演繹</span>
									<div class="hover-line"></div>
								</div></a>
								<a href=""><div class="article-item">
									<img src="images/car4.png">
									<span class="article-title">完美新境界：2015 BMW S1000RR</span>
									<div class="hover-line"></div>
								</div></a>
							</div>
						</div>
					</div>
					<div class="component-container">
						<div class="644x115_ad">
							<a href="#"><div><img src="<?php echo $upload_path ?>644x115_ad.png" alt="ad"></div></a>
						</div>
					</div>
					<div class="component-container">
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
											摩托車綜合購物網站「Webike」自2000年在日本開幕，14年來已成為日......<a class="more">[ more ]</a>
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
											為了精進MOTO7 教練團騎乘技術，提升騎術訓練活動以及安全駕駛內容，MOTO7 主編楊斌與安駕講師小天特別安排到日本的Suzuka 安全駕駛教育中心，來學習最新的騎乘技巧與觀念...<a class="more">[ more ]</a>
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
											摩托車綜合購物網站「Webike」自2000年在日本開幕，14年來已成為日......<a class="more">[ more ]</a>
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
											為了精進MOTO7 教練團騎乘技術，提升騎術訓練活動以及安全駕駛內容，MOTO7 主編楊斌與安駕講師小天特別安排到日本的Suzuka 安全駕駛教育中心，來學習最新的騎乘技巧與觀念...<a class="more">[ more ]</a>
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
					</div>
				</div>
				<div class="three_right">
					<div class="component-container">
						<div class="300x250_ad">
							<a href="#"><div><img src="<?php echo $upload_path ?>300x250_ad.png" alt="ad"></div></a>
						</div>
					</div>
					<div class="component-container">
						<div class="hot-article">
							<div class="hot-article-header">
								<div class="icon"></div>
								<span class="title">熱門話題</span>
								<div class="splitter"></div>
							</div>
							<div class="hot-article-content">
								<ul>
									<li><a href="#">
										<div class="icon hot"></div>
										<div class="title">感受速度與聲浪的極限 台灣TMAX 530 GP應援團</div></a>
									</li>
									<li><a href="#">
										<div class="icon hot"></div>
										<div class="title">劃時代三腳獸！TRICITY 125 海外試駕分享</div></a>
									</li>
									<li><a href="#">
										<div class="icon hot"></div>
										<div class="title">DUCATI新技術! 可變氣門正時系統 DVT</div></a>
									</li>
									<li><a href="#">
										<div class="icon"></div>
										<div class="title">[2014 科隆車展] DUCATI 玩樂至上主義 Scrambler</div></a>
									</li>
									<li><a href="#">
										<div class="icon"></div>
										<div class="title">SMAX的台北十大美食小吃之旅</div></a>
									</li>
									<li><a href="#">
										<div class="icon"></div>
										<div class="title">注意，必看！水冷速克達版規 V1.4</div></a>
									</li>
									<li><a href="#">
										<div class="icon"></div>
										<div class="title">相同的DNA、不同的精采靈魂［跨界跑旅SMAX小劇場］</div></a>
									</li>
									<li><a href="#">
										<div class="icon"></div>
										<div class="title">SMAX155 DIY系列 傳動拆裝過程分享</div></a>
									</li>
									<li><a href="#">
										<div class="icon"></div>
										<div class="title">SMAX 155 清完節流閥怠速問題</div></a>
									</li>
									<li><a href="#">
										<div class="icon"></div>
										<div class="title">smax大燈問題</div></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="component-container">
						<div class="300x250_ad">
							<a href="#"><div><img src="<?php echo $upload_path ?>300x250_ad.png" alt="ad"></div></a>
						</div>
					</div>
					<div class="component-container">
						<div class="300x250_ad">
							<a href="#"><div><img src="<?php echo $upload_path ?>300x250_ad.png" alt="ad"></div></a>
						</div>
					</div>
					<div class="component-container">
						<div class="300x250_ad">
							<a href="#"><div><img src="<?php echo $upload_path ?>300x250_ad.png" alt="ad"></div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>