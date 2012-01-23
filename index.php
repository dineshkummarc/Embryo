<!doctype html>
<!-- Explanation: http://www.phpied.com/conditional-comments-block-downloads/ -->
<!--[if IE]><![endif]-->
<html dir="ltr" lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title></title>
	<script src="Assets/Scripts/Utils/html5.min.js"></script>
	<link rel="stylesheet" href="Assets/Styles/structure.css" />
	<link rel="stylesheet" media="screen and (-webkit-min-device-pixel-ratio:0)" href="Assets/Styles/webkit.css" />
</head>
<?php flush(); ?>
<body>
	<?php require 'Assets/Includes/IE6.php'; ?>    
	<div id="container">
		
	</div>
	<?php flush(); ?>
	<script data-main="Assets/Scripts/main" src="Assets/Scripts/Require.min.js"></script>
	<?php include 'Assets/Includes/GoogleAnalytics.php'; ?>
</body>
</html>
