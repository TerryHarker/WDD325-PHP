<?php
define('DISPLAY_DEBUG', false); 

// Config Datei für das ganze Projekt
define('BASEURL', 'http://localhost/WDD325-PHP/Projekt/'); // Konstante definieren mit einem fixen Wert
define('MEDIAFOLDER', 'media'); // Ordner für Projekte
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'].'WDD325-PHP/Projekt/');

// Passwortregeln
define('PW_MIN_UPPER', 3); // Anzahl Grossbuchstaben
define('PW_MIN_LOWER', 1); // Anzahl Grossbuchstaben
define('PW_MIN_DIGITS', 1); // Anzahl Grossbuchstaben
define('PW_MIN_SPECIAL', 1); // Anzahl Grossbuchstaben

// Session config
define('SESSION_NAME', md5('eigenername')); // Session name maskieren
define('SESSION_LIFETIME', 15); // Sessiongültigkeit bei inaktivität (Minuten)

// SEO
define('DEFAULT_PAGETITLE', 'Nicos HTML Page'); // Standard SEO Page Title, wenn keiner definiert wurde

// Datenbank
define('DB_SERVER', 'localhost'); // Server, meist localhost oder der Servername von deinem Hoster
define('DB_USER', 'root'); // DB User - für Produktiv einen eigenen erstellen
define('DB_PASSWORD', ''); // PW des DB Users - für Produktiv eigenes erstellen
define('DB_NAME', 'wdd0325-nico'); // deine DB
?>