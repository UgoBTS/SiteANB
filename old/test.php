<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Site Amitiés Neuf-Berquinoises</title>
	<meta name="description" content="Le site internet des Amitiées Neuf-Berquinoises.">
	<meta name="author" content="ANB">

	<meta property="og:title" content="Site Amitiés Neuf-Berquinoises">
	<meta property="og:type" content="website">
	<meta property="og:description" content="Le site internet des Amitiés Neuf-Berquinoises..">
	<meta property="og:image" content="logo.png">

	<link rel="icon" href="/favicon.ico">
	<link rel="icon" href="/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<link rel="stylesheet" href="styles.css?v=1.0">

</head>

<header>
	<div class="topnav">
		<img src="images/logo.png" alt="Logo" href="index.html">
		<a class="elements_menu" href="index.html" style="position:relative; bottom:50px">Accueil</a>
		<a class="elements_menu" href="apropos.html" style="position:relative; bottom:50px">A propos</a>
		<a class="elements_menu" href="evenements.php" style="position:relative; bottom:50px">Evenements</a>
		<a class="elements_menu" href="contact.html" style="position:relative; bottom:50px">Contact</a>
	</div>
</header>

<body>
	<div id="page-container">
		<div id="content-wrap">
			<div class = "banniere">
				<img src="images/banniere.png" alt="Bannière">
			</div>
			
			<div class = "contenu">
				<div class = "paragraphe_1">
					<h1>CECI EST LA PAGE DE TEST</h1>
					<p>Test.</p>
				</div>
				
				<div class = "trou_image">
				</div>
				
				<div class="slideshow-container">

				  <div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="images/banniere.png" style="width:100%">
					<div class="text">Image 1</div>
				  </div>

				  <div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="images/banniere_2.png" style="width:100%">
					<div class="text">Image 2</div>
				  </div>

				  <div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="images/banniere_3.png" style="width:100%">
					<div class="text">Image 3</div>
				  </div>

				  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				  <a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<br>

				<div style="text-align:center">
				  <span class="dot" onclick="currentSlide(1)"></span>
				  <span class="dot" onclick="currentSlide(2)"></span>
				  <span class="dot" onclick="currentSlide(3)"></span>
				</div>
		  
				<div class = "paragraphe_1">
					<h1>Qui sommes-nous?</h1>
					<p>Nous sommes une association nommée "Club des amitiés Neuf-Berquinoises".</p>
				</div>
				
				<h3>Test</h3>
				
				<div class = "formulaire">
					<form method="post" action="send_script.php">
					  Adresse email: <input type="email" name="email" > <br />
					  Sujet: <input type="text" name="subject" > <br />
					  Message: <textarea name="msg"></textarea>
					  <button type="submit" name="send_message_btn">Envoyer</button>
					</form>
				</div>
		</div>
	</div>
	
	<script src="js/scripts.js"></script>
	
</body>

<footer>
	<br class = "footer_a">Ce site a été conçu a but informatif. Il présente le Club des Amitiées Neuf-Berquinoises et ses actualités. Nous vous souhaitons une bonne navigation.</br>
	<img src="images/logo-facebook.png" alt="Logo Facebook" width="16" height="16" padding-right="100px"><a class="footer_a" href="https://www.facebook.com/" target="_blank"> Page Facebook</a>
</footer>
</html>