<?php
require_once('config.php'); // Seitenweite Werte nur einmal anpassen

// HTML Header vorbereiten
$pageTitle = "Nico's Portfolio | Webdesign und anderes Design";
$metaDescription = 'Webdesign von Nico - Ihre individuelle Webseite vom Profi'; // Meta Description für diese Seite definieren
$metaKeywords = ''; // Keywords für diese Seite definieren

$additionalStyles = array('extrastyle.css', 'darkmode.css'); // styles, die nur diese seite benötigt
$additionalScripts = array(); // scripts, die nur diese Seite benötigt
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" vocab="http://schema.org/">

	<?php include('includes/html-head.php'); ?>

	<body>
		<!-- header kommt hier hin -->
		<?php include('includes/header.php'); ?>
	
		<section class="main-section">
			<div class="container">
				
				<div class="mt-5">
					<h1 class="heading-xlarge">Hallo,<br><strong>Ich bin Nico</strong></h1>
					<p class="lead">Web- und anderes Design aller Art mache ich gerne für dich oder deine Firma.</p>
				</div>
				
			</div>
		</section>
		
		<!-- hier kommt der footer hin -->
		<?php include('includes/footer.php'); ?>
		
	</body>
</html>