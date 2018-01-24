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
</head>
<body>
	<div id="body-wrapper">
	<nav>
		<ul id="nav-left">
			<a href="#home"><li class="title">COOP FUND</li></a>
			<!-- <li><a href="#mission-statement">Mission Statement</a></li> -->
			<li><a href="#about">About</a></li>
			<a href="#what-is-a-cooli"><li>What Is A Cooperative?</li></a>
			<a href="#how-it-works"><li>How It Works</li></a>
			<a href="#definitions"><li>Definitions and Appendix</li></a>
		</ul>
		<ul id="nav-right">
			<li>Sign Up / Log In</li>
		</ul>
	</nav>
	<a name="home" class="adjust"></a>
	<!-- end navigation -->
	<main>