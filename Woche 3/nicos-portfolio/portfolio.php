<?php
require_once('config.php'); // Seitenweite Werte nur einmal anpassen

// HTML Header vorbereiten
$pageTitle = "Nico's Portfolio | Webdesign Referenzen";
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" vocab="http://schema.org/">
	
	<?php include('includes/html-head.php'); ?>

	<body>
		
		<?php include('includes/header.php'); ?>
	
		<section class="main-section">
			<div class="container">
				
				<div class="mt-5">
						<h2>Aktuelle Projekte</h2>
				</div>
				<div class="row mt-4">
					<div class="col-12 col-sm-6 col-md-3">
						<img src="media/Business-20.png">
					</div>
					<div class="col-12 col-sm-6 col-md-3">
						<img src="media/eaef_Blurr-402x.jpg">
					</div>
					<div class="col-12 col-sm-6 col-md-3">
						<img src="media/Pompeo.jpg">
					</div>
					<div class="col-12 col-sm-6 col-md-3">
						<img src="media/biznus.jpg">
					</div>
				</div>
				<div>
					<em class="text-muted">image credit: webflow.io</em>
				</div>
			</div>
		</section>
		
		
		<!-- hier kommt der footer hin -->
		<?php include('includes/footer.php'); ?>
		
	</body>
</html>