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
		<link rel="stylesheet/less" type="text/css" href="css/component-related-comments.less" />
		<!--js-->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://rawgit.com/leafo/sticky-kit/v1.0.4/jquery.sticky-kit.min.js"></script>
		<script src="js_fk/bxslider/jquery.bxslider.min.js"></script>
		<script src="js/function.js"></script>
	</head>
	<body>
		<div class="related-comments">
			<img class="title-icon" src="images/commenttitle.png">
			<div class="comments-list">
				<div class="comments-post">
					<div class="user">
						<div class="photo"><img src="../upload/photo_34x34.jpg"></div>
						<a href="#">建豪</a>
					</div>
					<div class="comments">
						<span class="date">六月 20, 2012 於 2:53 下午</span>
						<div class="post-text">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
							<span class="text">我比較在意的還是引擎部分~我比較在意的還是引擎部分~我比較在意的還是引擎部分~我比較在意的還是引擎部分~我比較在意的還是引擎部分~</span>
						</div>
					</div>
					<a class="btn btn-default btn-lg" href="#"><i class="fa fa-comment"></i></a>
				</div>
				<div class="comments-post">
					<div class="user">
						<div class="photo"><img src="../upload/photo_34x34.jpg"></div>
						<a href="#">羊</a>
					</div>
					<div class="comments">
						<span class="date">六月 20, 2012 於 2:53 下午</span>
						<div class="post-text">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
							<span class="text">我比較在意的還是引擎部分~</span>
						</div>
						<div class="comments-feed">
							<div class="user">
								<div class="photo"><img src="../upload/photo_34x34.jpg"></div>
								<a href="#">建豪</a>
							</div>
							<div class="comments">
								<span class="date">六月 20, 2012 於 2:53 下午</span>
								<div class="post-text">我比較在意的還是引擎部分~</div>
							</div>
						</div>
					</div>
					<a class="btn btn-default btn-lg" href="#"><i class="fa fa-comment"></i></a>
				</div>
				<nav>
					<div class="pagination">
						<ul>
							<li class="previous"><a href="#"><div class="pagination-item disable">&lt;</div></a><div class="hr-line"><span></span></div></li>
							<li><a href="#"><div class="pagination-item active">1</div></a><div class="hr-line"><span></span></div></li>
							<li><a href="#"><div class="pagination-item">2</div></a><div class="hr-line"><span></span></div></li>
							<li><a href="#"><div class="pagination-item">3</div></a><div class="hr-line"><span></span></div></li>
							<li><a href="#"><div class="pagination-item">4</div></a><div class="hr-line"><span></span></div></li>
							<li><a href="#"><div class="pagination-item">5</div></a><div class="hr-line"><span></span></div></li>
							<li><a href="#"><div class="pagination-item"><span class="dot">...</span></div></a><div class="hr-line"><span></span></div></li>
							<li class="next"><a href="#"><div class="pagination-item">&gt;</div></a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="comments-list comment-form">
				<form role="form">
					<div class="comments-post">
						<div class="user">
							<div class="photo"><img src="../upload/photo_34x34.jpg"></div>
							<a href="#">建豪</a>
						</div>
						<div class="comments">
							<textarea class="form-control" rows="3" placeholder="請輸入您的評論"></textarea>
						</div>
					</div>
					<a class="btn btn-default btn-sm" href="#"><i class="fa fa-comment"></i> 發表</a>
				</form>
			</div>
		</div>
		
	</body>
</html>