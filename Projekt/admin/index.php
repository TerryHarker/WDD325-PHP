<?php
require_once('../config.php');
session_start();

$page = 'dashboard'; // default page
if( !empty($_GET['page']) ){
	$page = $_GET['page'];
}

// Login Check ****************************
$isLoggedin = false;

// Prüfen, ob Session existiert (User eingeloggt)
if( isset($_SESSION['loginstatus']) && $_SESSION['loginstatus'] == 'loggedin' ){
	// user ist eingeloggt
    $isLoggedin = true;
	}
	
	// user will sich ausloggen, er hat den "logout" link angeklickt
	if(isset($_GET['logout'])){
		// Loginstatus zurücksetzen
		unset($_SESSION['loginstatus']); // position wird aus session gelöscht
		$isLoggedin = false;
		}
		
		// Keine Session und nicht Seite login: Umleitung und Abbruch
		if($isLoggedin == false && $page != 'login'){
			header("location: index.php?page=login"); // umleitung
			exit(); // parser beendet das lesen
		}
// Login Check ende ****************************



// Wenn im Ordner "scripts" eine datei passend zum $page parameter existiert, wird sie hier eingebunden
if( is_file("scripts/".$page.".php") == true ){
	include("scripts/".$page.".php"); 
}
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" vocab="http://schema.org/">
	<head>
		<base href="<?php echo BASEURL ?>admin/">
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
				<a class="navbar-brand p-0 me-2" href="/">Admin Bereich<a>
				
				<?php if($isLoggedin == true){ // nav nur anzeigen, wenn eingeloggt ?>
				<ul class="navbar-nav flex-row flex-wrap bd-navbar-nav">
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php echo $page=='dashboard'? 'active':''; ?>" href="index.php?page=dashboard">Dashboard</a>
					</li>
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php echo $page=='content'? 'active':''; ?>" href="index.php?page=content">Content</a>
					</li>
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php echo $page=='user'? 'active':''; ?>" href="index.php?page=user">Users</a>
					</li>
				</ul>
				<?php } ?>
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
			<footer>
				<div class="container">
					<?php if($isLoggedin==true){ ?>
					<a href="?logout=true">Logout</a>
					<?php } ?>
				</div> 
			</footer>
		</section>

		
	</body>
</html>