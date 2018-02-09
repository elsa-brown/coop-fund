<?php
/**
 * Theme header
 * Displays <head> section and nav bar: everything up until <main>
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Coop Fund</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	</style>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
	<main>
	<nav>
		<ul id="nav-mobile">
			<a href="#home"><li class="title-link">COOP FUND</li></a>
			<a href="#membership"><li>Join!</li></a>
			<a href="#glossary"><li>Glossary</li></a>
			<a href="#links"><li>Links</li></a>
			<!-- <li id="menu"><span class="sans">Menu</span><i class="fas fa-angle-down"></i></li> -->
		</ul>
		<ul id="nav-tablet">
			<a href="#home"><li class="title-link">COOP FUND</li></a>
			<li><a href="#what-is-a-coop">What Is A Cooperative?</a></li>
			<li><a href="#how-it-works">How It Works</a></li>
			<a href="#membership"><li>Join!</li></a>
			<a href="#glossary"><li>Glossary</li></a>
			<a href="#links"><li>Links</li></a>
		</ul>
		<ul id="nav-desktop">
			<a id="home-link" href="#home"><li class="title-link">COOP FUND</li></a>
			<li><a href="#about">About</a></li>
			<a href="#what-is-a-coop"><li>What Is A Cooperative?</li></a>
			<a href="#how-it-works"><li>How It Works</li></a>
			<a href="#membership"><li>Join!</li></a>
			<a href="#glossary"><li>Glossary</li></a>
			<a href="#links"><li>Important Links</li></a>
		</ul>
	</nav>
	<div class="nav-mobile-expanded hide">
		<ul>
			<li><a href="#about">About</a></li>
			<a href="#what-is-a-coop"><li>What Is A Cooperative?</li></a>
			<a href="#how-it-works"><li>How It Works</li></a>
			<a href="#membership"><li>Join!</li></a>
			<a href="#glossary"><li>Glossary</li></a>
			<a href="#links"><li>Important Links</li></a>
		</ul>
	</div>
	<a name="home" class="adjust"></a>
	<!-- end navigation -->