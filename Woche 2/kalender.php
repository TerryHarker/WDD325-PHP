<?php
// Variablen vorbereiten
$wochentag = date("l");
$monat = date("F");
$jahr = date("Y");
$tagmonat = date("d");


// HTML Ausgabe
?>
<html>
<head>
	<title>MINI KALENDER</title>
</head>
<body>

<h3 style="color:#999999;">MINI KALENDER</h3>
<div style="border:1px solid black;border-top:5px solid #000000; width:200px; height:250px;text-align:center;">
	<h2><?= $wochentag; // kurzschreibweise für ein Echo ?></h2>

	
	<span style="font-size:100px;font-weight:bold;"><?php echo $tagmonat; ?></span>
	
	<h2><?php echo $monat." ".$jahr; // verkettete Ausgabe ?></h2>
</div>

</body>
</html>