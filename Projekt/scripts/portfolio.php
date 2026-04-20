<?php
// Dieser Code wird in index.php gleich vor dem HTML ausgeführt

// Daten aus der Tabelle Projekte auslesen: 
$query = "SELECT * FROM `projekt`";
$statement = $db->query( $query );
$portfoliodaten = $statement->fetchAll( PDO::FETCH_ASSOC ); // Array für die Ausgabe im views/portfolio.php

$pageTitle = 'Nico | Meine Referenzen';
?>