<?php
$images_path="images/";
$upload_path="../upload/"
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Pagination</title>
		<!--css-->
		<link href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="js_fk/bxslider/jquery.bxslider.css" rel="stylesheet">
		<link rel="stylesheet/less" type="text/css" href="css/component-pagination.less" />
		<!--js-->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://rawgit.com/leafo/sticky-kit/v1.0.4/jquery.sticky-kit.min.js"></script>
		<script src="js_fk/bxslider/jquery.bxslider.min.js"></script>
		<script src="js/function.js"></script>
	</head>
	<body>
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
	</body>
</html>