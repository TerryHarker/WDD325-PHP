<?php
// Config Datei für das ganze Projekt
define('BASEURL', 'http://localhost/WDD325-PHP/Projekt/'); // Konstante definieren mit einem fixen Wert
define('MEDIAFOLDER', 'media'); // Ordner für Projekte
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'].'WDD325-PHP/Projekt/');

// Passwortregeln
define('PW_MIN_UPPER', 3); // Anzahl Grossbuchstaben
define('PW_MIN_LOWER', 1); // Anzahl Grossbuchstaben
define('PW_MIN_DIGITS', 1); // Anzahl Grossbuchstaben
define('PW_MIN_SPECIAL', 1); // Anzahl Grossbuchstaben

// SEO
define('DEFAULT_PAGETITLE', 'Nicos HTML Page'); // Standard SEO Page Title, wenn keiner definiert wurde

// Datenbank...
?>