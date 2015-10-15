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
		<!-- <div class="related-comments">
			<img class="title" src="<?php echo $images_path ?>commenttitle.png">
			<div class="item">
				<div>
					<a href="#">
						<img src="<?php echo $upload_path ?>img_165x110.jpg">
						<span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
						<span class="more"></span>
					</a>
				</div>
			</div>
		</div> -->
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
		
	</body>
</html>