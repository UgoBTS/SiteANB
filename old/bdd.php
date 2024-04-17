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
					<h1>Base de données</h1>
					<?php
						echo "<table style='border: solid 1px black; text-align: center; margin-right: auto;
'>";
						echo "<tr><th>idevenement</th><th>nom</th><th>date</th></tr>";

						class TableRows extends RecursiveIteratorIterator {
						  function __construct($it) {
							parent::__construct($it, self::LEAVES_ONLY);
						  }

						  function current() {
							return "<td style='border:1px solid black; font-size: 2.5vw;'>" . parent::current(). "</td>";
						  }

						  function beginChildren() {
							echo "<tr>";
						  }

						  function endChildren() {
							echo "</tr>" . "\n";
						  }
						}

						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "site";

						try {
						  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						  $stmt = $conn->prepare("SELECT idevenement, nom, date FROM evenements");
						  $stmt->execute();

						  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
						  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
							echo $v;
						  }
						} catch(PDOException $e) {
						  echo "Error: " . $e->getMessage();
						}
						$conn = null;
						echo "</table>";
					?>
					<p>...</p>
				</div>
				<div class = "paragraphe_1">
					<h1>Test</h1>
					<p>...</p>
				</div>
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