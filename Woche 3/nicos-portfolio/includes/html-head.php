<?php
$pageTitle = (isset($pageTitle)) ? $pageTitle : DEFAULT_PAGETITLE;
$metaDescription = (isset($metaDescription)) ? $metaDescription : '';
$metaKeywords = (isset($metaKeywords)) ? $metaKeywords : '';
?>
<head>
	<base href="<?php echo BASEURL ?>" >
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php echo $pageTitle; ?></title>

	<meta name="title" content="<?php echo $pageTitle; ?>">
	<meta name="description" content="<?php echo $metaDescription; ?>">
	<meta name="keywords" content="<?php echo $metaKeywords; ?>">
	<meta name="author" content="Nico">
	
	<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="assets/favicons/favicon.png">
	<link rel="icon" type="image/png" sizes="180x180" href="assets/favicons/favicon.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/theme.css">

	<?php
	// additional Stylesheets ausgeben, wenn sie existieren
	if( isset($additionalStyles) ){
		/*
		for( $i=0; $i<count($additionalStyles); $i++){
			// mit jedem eintrag in $additionalStyles das gleiche machen
			echo '<link rel="stylesheet" href="assets/css/'.$additionalStyles[ $i ].'">'."\n";
		}
		*/	
		foreach( $additionalStyles as $styleSheet ){
			// mit jedem eintrag in $additionalStyles das gleiche machen
			echo '<link rel="stylesheet" href="assets/css/'.$styleSheet.'">'."\n";
		}
	}
	?>

</head>