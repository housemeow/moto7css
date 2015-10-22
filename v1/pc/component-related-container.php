<?php
$images_path="images/";
$upload_path="../upload/"
?>
<!DOCTYPE html>
<html >
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
		<link rel="stylesheet/less" type="text/css" href="css/component-related-container.less" />
		<!--js-->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://rawgit.com/leafo/sticky-kit/v1.0.4/jquery.sticky-kit.min.js"></script>
		<script src="js_fk/bxslider/jquery.bxslider.min.js"></script>
		<script src="js/function.js"></script>
	</head>
	<body>
		<div class="related-container">
			<div class="header"><h2>相關XX</h2></div>
			<div class="content">
				<div class="item">
					<a href="#">
						<div><img src="<?php echo $upload_path ?>closely_firm_img1.jpg"></div>
						<span class="name">請改me</span>
						<span class="submit"></span>
					</a>
				</div>
				<div class="item">
					<a href="#">
						<div><img src="<?php echo $upload_path ?>closely_firm_img2.jpg"></div>
						<span class="name">這也改一下</span>
						<span class="submit"></span>
					</a>
				</div>
			</div>
		</div>
	</body>
</html>