<!DOCTYPE html>
<html>
<head>
	<title>Chris Corey</title>

	<!-- META -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- FAVICON -->
	<link rel="shortcut icon" href="/assets/images/favicon.ico">

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">

    <!-- JAVASCRIPT -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>

</head>
<body>

<!-- MODALS -->

<div id="opaque-modal"></div>

<div id="email-modal">
	<button onclick="ToggleEmailModal()">Close</button>
	<form action="/assets/php/main.php" method="post">
		<ul>
			<li><p>Name<span style="color: red">*</span></p><input type="text" name="contact-name" required><br></li>
			<li><p>Email<span style="color: red">*</span></p><input type="email" name="contact-email" required><br></li>
		</ul>
		<ul>
			<li><p>Phone #</p><input type="tel" name="contact-phone"><br></li>
			<li><p>Organization</p><input type="text" name="contact-organization"><br></li>
		</ul>
		<div>
			<!-- <p>Message<span style="color: red">*</span></p><input type="text" name="contact-message" required><br> -->
			<p>Message<span style="color: red">*</span></p><textarea name="contact-message" required></textarea><br>
			<button type="submit" name="SentEmail">Send</button>
			<?php
	        session_start();
	        // Uncomment to simulate successful email sent
			//$_SESSION['emailSent'] = 1;
			if (isset($_SESSION['emailSent']))
			{
				session_unset();
				session_destroy();
				?>
					<h2 style="color: green">Email Sent</h2>
					<script type="text/javascript">ToggleEmailModal(1)</script>
				<?php
			}
			?>
		</div>
	</form>
</div>

<!-- END MODALS -->

<header></header>

<nav id="mobile-nav">

	<div id="nav-icon1">
	  <span></span>
	  <span></span>
	  <span></span>
	</div>

	<ul id="mobile-nav-menu">
		<li><a href="#home">Home</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#experience">Experience</a></li>
		<li><a href="#portfolio">Projects</a></li>
		<li><a href="#contact">Contact</a></li>
	</ul>
</nav>

<nav id="desktop-nav">
	<a href="#home">Home</a>
	<a href="#about">About</a>
	<a href="#experience">Experience</a>
	<a href="#portfolio">Projects</a>
	<a href="#contact">Contact</a>
</nav>

<main>
	<section class="content">
		<!-- <section class="main" id="home">
			<h1>Chris Corey</h1>
		</section> -->

		<section class="main" id="home">
			<div class="main-container">
				<img src="/assets/images/headshot.jpg" alt="My Mug">
				<h1>Chris Corey</h1>
				<h3>Full Stack Web Developer</h3>
				<div>
					<a target="_blank" href="https://www.linkedin.com/in/chris-corey-11b78695"><img src="/assets/images/linkedin.png" alt="linkedin"></a>
					<a target="_blank" href="https://github.com/Chris3037"><img src="/assets/images/github.png" alt="github"></a>
					<a target="_blank" href="https://twitter.com/chris_corey_95"><img src="/assets/images/twitter.png" alt="twitter"></a>
				</div>
			</div>
		</section>

		<section class="main" id="about">
			<div class="main-container">
    			<h1>About page info</h1>
    		</div>
		</section>

		<section class="main" id="experience">
			<div class="main-container">
    			<h1>Are you experienced?</h1>
    		</div>
	    </section>

		<section class="main" id="portfolio">
			<div class="main-container">
    			<h1>Here are some projects I've worked on</h1>
			</div>
		</section>

		<section class="main" id="contact">
			<div class="main-container">
	    		<h1>You can contact me here:</h1>
				<button onclick="ToggleEmailModal()">Contact</button>
	    	</div>
		</section>

	</section>

	<footer></footer>
</main>
</body>
</html>
