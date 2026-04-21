<?php
// Dieser Code wird in index.php gleich vor dem HTML ausgeführt

// Daten aus der Tabelle Projekte auslesen: 
$query = "SELECT p.*,
(SELECT GROUP_CONCAT(`name`) FROM `kategorie` AS k LEFT JOIN `kategorie_projekt` AS kp ON k.ID = kp.kategorie_ID WHERE kp.projekt_ID = p.ID) AS kategorie
FROM `projekt` AS p";
$statement = $db->query( $query );
$portfoliodaten = $statement->fetchAll( PDO::FETCH_ASSOC ); // Array für die Ausgabe im views/portfolio.php

$pageTitle = 'Nico | Meine Referenzen';
?>