<?php
/** 
* Mail demo für PHPMailer
*/

// Namespace für die Klassen
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

// Start-Datei laden, in der alle weiteren Dateien dieser Library geladen werden können
require 'vendor/autoload.php';

$mailer = new PHPMailer(true);
// print_r($mailer); // Objekte können wie Arrays mit print_r() angeschaut werden


// konfiguration
$mailer->isSMTP(); // SMTP aktivieren
$mailer->SMTPAuth = true; // Authentifizierung aktivieren (normalerweise erforderlich)


// SMTP Servereinstellungen
$mailer->Host = 'smtp.gmail.com'; // Postausgangsserver
$mailer->Port = 465; // Für TLS: 587
$mailer->Username = 'terrythed3v@gmail.com'; // Deine Mailadresse
$mailer->Password = ''; // App paswort, wird per Chat zugestellt
$mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Für TLS: PHPMailer::ENCRYPTION_STARTTLS

// Mail vorbereiten - Absender = Mailkonto wie oben
$mailer->setFrom('terrythed3v@gmail.com', 'PHP Skript von Terry'); // Absender
$mailer->addReplyTo('learn@bytekultur.ch', 'PHP Skript'); // Antwort an - falls du eine andere als den verwendeten Postausgang möchtest

// Tipp: teste deine Mail mit mail-tester.com
// $mailer->addAddress('test-ofr5zlghc@srv1.mail-tester.com'); // Testempfänger, Resultat für diese E-Mail Adresse: https://mail-tester.com/test-ofr5zlghc

// E-Mail erstellen
$mailer->addAddress('terry@bytekultur.net'); // Echter Empfänger - deine Adresse zum Testen
$mailer->Subject = 'Mein Mail aus dem PHP Unterricht'; // Betreff
$mailer->Body = 'Hallo Terry, gratuliere, du hast ein Mail erhalten!'; // Nachricht

// E-Mail senden
$mailsent = $mailer->send();

// Prüfen ob es geklappt hat
if($mailsent == true)
{
    echo 'E-Mail wurde geschickt';
}else{
    echo 'E-Mail konnte nicht geschickt werden';
}

?>