<!doctype html>
<!-- Explanation: http://www.phpied.com/conditional-comments-block-downloads/ -->
<!--[if IE]><![endif]-->
<html dir="ltr" lang="en">
<head>
   <meta charset="utf-8">
   <meta name="description" content="" />
   <meta name="author" content="Storm Creative" />
	<title></title>
   <script src="Assets/Scripts/html5.min.js"></script>
   <link rel="stylesheet" href="Assets/Styles/layout.css" />
	<link rel="stylesheet" href="Assets/Styles/sub.css" />
	<link rel="stylesheet" media="screen and (-webkit-min-device-pixel-ratio:0)" href="Assets/Styles/webkit.css" />
</head>
<?php flush(); ?>
<body>
	<?php require 'Assets/Includes/IE6.php'; ?>    
   <div id="container">
		//
   </div>
   <?php flush(); ?>
   <!-- LABjs allows loading other scripts in parallel (without blocking) by inserting script tags dynamically -->
   <script src="Assets/Scripts/LAB.min.js"></script>
   <script>
		$LAB
		.setOptions({ AlwaysPreserveOrder:true, BasePath:'Assets/Scripts/' })
			.script('jquery.min.js')
			.script('library.js').wait(function(){
				// Initialise script when ready
				Storm.init({ dd:true });
			});
			
		<?php include 'Assets/Includes/GoogleAnalytics.php'; ?>
   </script>
</body>
</html>
