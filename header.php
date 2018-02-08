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
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
	<main>
	<nav>
		<ul id="nav-mobile">
			<a href="#home"><li class="title-link">COOP FUND</li></a>
			<li><i class="fas fa-bars"></i></li>
		</ul>
		<ul id="nav-desktop">
			<a id="home-link" href="#home"><li class="title-link">COOP FUND</li></a>
			<li><a href="#about">About</a></li>
			<a href="#what-is-a-coop"><li>What Is A Cooperative?</li></a>
			<a href="#how-it-works"><li>How It Works</li></a>
			<a href="#membership"><li>Join Us!</li></a>
			<a href="#glossary"><li>Glossary</li></a>
			<a href="#links"><li>Important Links</li></a>
		</ul>
	</nav>
	<div class="nav-mobile-expanded hide">
		<ul>
			<li><a href="#about">About</a></li>
			<a href="#what-is-a-coop"><li>What Is A Cooperative?</li></a>
			<a href="#how-it-works"><li>How It Works</li></a>
			<a href="#membership"><li>Join</li></a>
			<a href="#glossary"><li>Glossary</li></a>
			<a href="#contact"><li>Contact Us</li></a>
		</ul>
	</div>
	<a name="home" class="adjust"></a>
	<!-- end navigation -->