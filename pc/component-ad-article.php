<?php
$images_path="images/";
$upload_path="../upload/"
?>
<!DOCTYPE html>
<html lang="en">
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
		<link rel="stylesheet/less" type="text/css" href="css/component-ad-article.less" />
		<!--js-->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://rawgit.com/leafo/sticky-kit/v1.0.4/jquery.sticky-kit.min.js"></script>
		<script src="js_fk/bxslider/jquery.bxslider.min.js"></script>
		<script src="js/function.js"></script>
	</head>
	<body>
		<div class="ad-article">
			<div class="ad-article-header clearfix">
				<div class="redbox"></div>
				<span>活動特區</span>
				<div class="splitter"></div>
			</div>
			<div class="ad-article-content">
				<div class="article-thumbnail">
					<img src="<?php echo $images_path ?>moto7.jpg">
					<div class="description">
						MOTO7 騎乘技術訓練 2013年度開課
					</div>
				</div>
				<div class="signup">
					<span>報名時間: 即日起到10月底為止</span>
					<img src="<?php echo $images_path ?>signup.png">
				</div>
			</div>
		</div>
	</body>
</html>