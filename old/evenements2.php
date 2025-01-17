<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Site Club Amitiés Neuf-Berquinoises</title>
	<meta name="description" content="Le site internet du Club Amitiés Neuf-Berquinoises.">
	<meta name="author" content="ANB">

	<meta property="og:title" content="Site Club Amitiés Neuf-Berquinoises">
	<meta property="og:type" content="website">
	<meta property="og:description" content="Le site internet du Club Amitiés Neuf-Berquinoises.">
	<meta property="og:image" content="logo.png">

	<link rel="icon" href="/favicon.ico">
	<link rel="icon" href="/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<link rel="stylesheet" href="styles.css?v=1.0">

</head>

<header>
	<div class="topnav">
		<img src="images/logo.png" alt="Logo" href="index.html" style="max-width:100%;height:auto;">
		<a class="elements_menu_accueil" href="index.html" style="position:relative; bottom:50px">Accueil</a>
		<a class="elements_menu_apropos" href="apropos.html" style="position:relative; bottom:50px">A propos</a>
		<a class="elements_menu_evenements" href="evenements.php" style="position:relative; bottom:50px">Evenements</a>
		<a class="elements_menu_contact" href="contact.html" style="position:relative; bottom:50px">Contact</a>
	</div>
</header>

<body>
	<div id="page-container">
		<div id="content-wrap">
			<div class = "contenu">
				<div class = "paragraphe_1">
					<h1>Les événements</h1>
					<p>L'association réalise régulièrement des événements. Vous pourrez sur cette page connaître toutes les modalités et tous les détails concernant les événements à venir. N'hésitez pas à nous contacter pour toute question.</p>
				</div>
				
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "site";

				$conn = mysqli_connect($servername, $username, $password, $dbname);
				if (!$conn) {
				  die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "SELECT * FROM evenements";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
				  while($row = mysqli_fetch_assoc($result)) {
					echo "<div class = 'paragraphe_1'><h1>" . $row["nom"]. "</h1>";
					echo "<p><b><u>Date de l'événement: " . $row["date"]. "</u></b></p>";
					echo "<p>" . $row["texte"]. "</p></div>";
				  }
				} else {
				  echo "<h1>Aucun événement prévu pour le moment.</h1>";
				  echo "<p>Cette page sera mise à jour lorsque de nouveaux événements seront prévus.</p>";
				}

				mysqli_close($conn);
				?>
			</div>
		</div>
	</div>
	<script src="js/scripts.js"></script>
	
</body>

<footer>
	<a class = "footer_first">Ce site a été conçu a but informatif. Il présente le Club Amitiés Neuf-Berquinoises et ses actualités. Nous vous souhaitons une bonne navigation.</a>
	<img class="logo_facebook" src="images/logo-facebook.png" alt="Logo Facebook" width="32" height="32"><a class="footer_afb" href="https://www.facebook.com/Club-Amiti%C3%A9s-Neuf-Berquinoises-108872641853898/" target="_blank"> Page Facebook</a><br>
	<a class="footer_a">4 rue d'Estaires 59940 Neuf-Berquin</a><br>
	<a class="footer_a">© 2022 Amitiés Neuf-Berquinoises - Tous droits réservés</a><br>
</footer>


</html>