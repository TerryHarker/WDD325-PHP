<?php
require_once('config.php');

$page = 'home'; // default page
if( !empty($_GET['page']) ){
	$page = $_GET['page'];
}

// Datenbankverbindung
try {
    $db = new PDO("mysql:host=".DB_SERVER.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
    // var_dump($db);
}catch ( PDOException $exception ){
    // print_r($exception);

    die('verbindung hat nicht funktioniert');
}


// Wenn im Ordner "scripts" eine datei passend zum $page parameter existiert, wird sie hier eingebunden
if( is_file("scripts/".$page.".php") == true ){
	include("scripts/".$page.".php"); 
}
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" vocab="http://schema.org/">
	<head>
		<!--<base href="http://localhost/SAE/nico/">-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title><?php echo isset($pageTitle) ? $pageTitle : 'Nico'; ?></title>
		<meta name="title" content="Nico's Portfolio | Webdesign und anderes Design">
		<meta name="description" content="Web- und anderes Design von Nico">
		<meta name="author" content="Nico">
		
		<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="assets/favicons/favicon.png">
		<link rel="icon" type="image/png" sizes="180x180" href="assets/favicons/favicon.png">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/theme.css">
	</head>
	<body>
		<header class="navbar navbar-expand-md bd-navbar">
			<nav class="container flex-wrap flex-md-nowrap" aria-label="Main navigation">
				<a class="navbar-brand p-0 me-2" href="<?php echo BASEURL; ?>">NICO's PORTFOLIO<a>
				<?php 
				/*
				<!-- Nav ohne SEF URLs -->
				<ul class="navbar-nav flex-row flex-wrap bd-navbar-nav">
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php echo $page=='home'? 'active':''; ?>" href="index.php?page=home">Home</a>
					</li>
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php echo $page=='portfolio'? 'active':''; ?>" href="index.php?page=portfolio">Portfolio</a>
					</li>
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php echo $page=='contact'? 'active':''; ?>" href="index.php?page=contact">Contact me</a>
					</li>
				</ul>
				*/
				?>
				
				<!-- nav für SEF URLs -->
				<ul class="navbar-nav flex-row flex-wrap bd-navbar-nav">
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php echo $page=='home'? 'active':''; ?>" href="<?php echo BASEURL; ?>">Home</a>
					</li>
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php echo $page=='portfolio'? 'active':''; ?>" href="<?php echo BASEURL; ?>portfolio">Portfolio</a>
					</li>
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php echo $page=='contact'? 'active':''; ?>" href="<?php echo BASEURL; ?>contact">Contact me</a>
					</li>
				</ul>
			</nav>
		</header>
	
		<!-- hier kommt der Inhalt -->
		<!-- index.php?page=home -->
		<?php
		if( is_file("views/".$page.".php") == true ){
			include("views/".$page.".php"); 
		} else {
			?>
		<section class="main-section">
			<div class="container">
					<h1>404 - Seite nicht gefunden</h1>
			</div>
		</section>
			<?php
		}
		?>
		
		<section class="footer-section">
			<div class="container">
				<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
				  <div class="col-lg-4 d-flex align-items-center">
					<a href="<?php echo BASEURL; ?>" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
					  NICO's PORTFOLIO
					</a>
					<span class="mb-3 mb-md-0 text-body-secondary">© 2024 Nico the webdesigner</span>
				  </div>
			  
				  
				</footer>
			  </div>
		</section>

		
	</body>
</html>