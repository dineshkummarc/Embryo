<!doctype html>
<!-- Explanation: http://www.phpied.com/conditional-comments-block-downloads/ -->
<!--[if IE]><![endif]-->
<html dir="ltr" lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title></title>
		<!--[if lt IE 9]>
		<script src="Assets/Scripts/Utils/Elements/html5.js"></script>
		<![endif]-->
		<link rel="author" href="humans.txt" type="text/plain">
    	<link rel="stylesheet" href="Assets/Styles/build.css" />
		<!-- 
		As of 24/01/2012 modpagespeed fails to minify stylesheets that include @media declarations so we keep them separate.
		We could include them an then manually minify the files, that's not a problem but I chose this way as it was clearer that the following styles were for WebKit.
		-->
		<link rel="stylesheet" media="screen and (-webkit-min-device-pixel-ratio:0)" href="Assets/Styles/webkit.css" />
	</head>
	<?php flush(); ?>
	<body>
		<?php require 'Assets/Includes/IE.php'; ?>
		<ol class="hoz">
			<li><a href="/">Test</a></li>
			<li><a href="/about/">Test 2</a></li>
			<li><a href="/about/us/">Test 3</a></li>
		</ol>
		<span class="contain" style="border:1px solid red;">
			This is a <code>div</code> with a class of <code>contain</code>.
		</span>
		<div class="media" style="border:1px solid blue;">
			<a href="http://twitter.com/stubbornella" class="img">
				<img src="Assets/Images/forkme.png" alt="me" />
			</a>
			<div class="body">
				<p>This is a media object</p>
				<p>Concept from Stubbornella</p>
				<p>Might need a min-height set depending on your requirements</p>
			</div>
		</div>
    	<div class="container">
			<a href="https://github.com/Integralist/Project-Template-Files#readme" class="abs right top"><img src="Assets/Images/forkme.png"></a>
			<h1>Project Template</h1>
			<h2>Description</h2>		
			<p>These are a standard set of files, scripts, stylesheets, folder structures that I use whenever I start a new web project. Below I discuss the different aspects of it.</p>
			<h2>Google Pagespeed Module</h2>		
			<p>On our Apache server we have the <a href="http://code.google.com/p/modpagespeed/">Google Pagespeed Module</a> installed so there are certain things that we don't do which we used to. Things like *combining multiple stylesheets into one* we don't do any more because the module handles that, and caches the combined files.</p>
			<h2>CSS</h2>		
			<p>The CSS is 'object-orientated' (OOCSS) as I feel that is the most scalable way to handle projects of any size.</p>
			<p>Although I disagree with the seemingly common tradition of using a CSS reset (mainly because nearly all of them take a 'scored earth policy' approach) I decided to use one. I chose to use the <a href="https://github.com/necolas/normalize.css">normalise.css</a> reset. This was because it does a lot of things right (e.g. it leaves a lot of the default browser settings in place because they realise that you end up writing more CSS to work-around the reset than you would have written to work-around the browser defaults!) but also I only had to add two of my own customisations to it.</p>
			<p>I also liked the stylings for some of the elements (such as buttons, alert spans etc) from the <a href="https://github.com/twitter/bootstrap">Twitter Bootstrap</a> framework, but I didn't want the entire framework - just those small items. So I took the framework and stripped out 95% of it.</p>
			<div class="alert-message block-message warning">
				<h2>Browser inconsistencies</h2>
				<p>We all know that browsers render both CSS and JavaScript differently depending on their engine. In CSS the way I manage this is by writing my CSS as follows:</p>
				<ul>
					<li>Write CSS so it works with Firefox</li>
					<li>Use `IE Conditional Comments` to target IE issues**</li>
					<li>Use `@media` hack to target WebKit browsers</li>
				</ul>
				<div class="alert-actions">
					<p>**<em>I appreciate that IE10 no longer supports conditional comments but fingers crossed IE10's CSS engine just works the way we want it to</em></p>
				</div>
			</div>
			<h2>JavaScript</h2>
			<p>I write all my JavaScript to be compatible with the `AMD` module format.</p>		
			<p>There are a couple of scripts I rarely use nowadays, these being: jQuery (+ two plugins) & SWFObject, but I've included them for those odd occasions where they are needed (normally by the team I manage at work who also use my set-up).</p>		
			<p>Here is a round-up of some of the scripts and 'modules' used in this project template:</p>
			<ul>
				<li><a href="http://www.iecss.com/print-protector/">HTML5Shim</a> - <q>IE Print Protector helps IE render HTML5 elements correctly, both on screen and in print.</q></li>
				<li><a href="http://www.requirejs.org/">RequireJs</a> - <q>RequireJS loads plain JavaScript files as well as more defined modules</q></li>
				<li><a href="https://github.com/briancavalier/when.js#readme">When</a> - <q>A lightweight CommonJS Promises/A and when() implementation. It also provides several other useful Promise-related concepts, such as joining and chaining, and has a robust unit test suite.</q></li>
				<li><a href="https://github.com/ded/morpheus#readme">Morpheus</a> - <q>A Brilliant Animator. Morpheus lets you "tween anything" in parallel on multiple elements</q></li>
				<li><a href="https://github.com/addyosmani/pubsubz#readme">PubSubz</a> - <q>Just another compact library-agnostic Pub/Sub implementation</q></li>
				<li><a href="http://pivotal.github.com/jasmine/">Jasmine BDD</a> - <q>Jasmine is a behavior-driven development framework for testing your JavaScript code. It does not depend on any other JavaScript frameworks. It does not require a DOM. And it has a clean, obvious syntax so that you can easily write tests</q></li>
				<li><a href="http://sinonjs.org/">SinonJs</a> - <q>Standalone test spies, stubs and mocks for JavaScript. No dependencies, works with any unit testing framework</q></li>
				<li><a href="http://www.google.com/analytics/">Google Analytics</a> - <q>Google Analytics is the enterprise-class web analytics solution that gives you rich insights into your website traffic and marketing effectiveness</q></li>
				<li>The following are a list of AMD based modules that I use a lot:
					<ul>
						<li><span class="label">Array</span> utility methods (taken from <a href="https://github.com/millermedeiros/amd-utils">millermedeiros</a>) - <q></q></li>
						<li><span class="label success">CSS</span> utility methods</li>
						<li><span class="label warning">DOM</span> utility methods</li>
						<li><span class="label important">Host</span> utility methods</li>
						<li><span class="label notice">String</span> utility methods</li>
					</ul>
				</li>
			</ul>
			<h2>RequireJs Plugins</h2>
			<p>There are a couple of RequireJs plugins we use:</p>
			<ul>
				<li><a href="https://github.com/millermedeiros/requirejs-plugins">async</a> - <q>Useful for JSONP and asynchronous dependencies (e.g. Google Maps)</q></li>
				<li><a href="https://github.com/ZeeAgency/requirejs-tpl">tpl</a> - template engine adapted from the `_underscore` utility library</li>
			</ul>
			<h2>RequireJs Build Script</h2>
			<p>I use a custom build script along with the RequireJs' `r.js` optimiser which minifies and concatenates all my scripts into a single file ready for production use.</p>
		</div>
		<?php flush(); ?>
		<script data-main="Assets/Scripts/main" src="Assets/Scripts/require.js"></script>
		<?php include 'Assets/Includes/GoogleAnalytics.php'; ?>
	</body>
</html>
