<?php
/**
 * Projekte editieren
 * Dies ist kein vollständiges NEU/Edit Skript, es enthält lediglich den INSERT teil
 * um zu demonstrieren wie sich die N:M Verbindung (Kategorien)
 * und die 1:N Verbindung (User) auf die Erstellung von Datensätzen auswirkt
 * Vergiss für dein Projekt nicht, beim auslesen, editieren und löschen alle Tabellen zu berücksichtigen! 
 */

$user_id = $_SESSION['user_id'];
$titel = '';
$zeit = '';
$id = '';

// Eintragen
if(isset($_POST['id'])){
    // print_r($_POST);
    $bild = $_POST['bild'];
    $titel = $_POST['titel'];
    $zeit = $_POST['zeit'];
    $user_id = $_POST['user_id'];

    // zuerst Projekt speichern 
    $insertQ = "INSERT INTO `projekt` (`bild`,`titel`,`zeit`,`user_ID`) VALUES (?, ?, ?, ?)";
    $values = array($bild, $titel, $zeit, $user_id);

    $statement = $db->prepare($insertQ);
    $saved = $statement->execute( $values );
    
    // dann kategorie-verbindungen in Hilfstabelle speichern
    if($saved){
        $projektID = $db->lastInsertId(); // letzte eingefügte ID holen
        // echo 'lastInsertId: '.$projektID;

        foreach($_POST['kategorie'] as $katID){
            $katInsertQ = "INSERT INTO `kategorie_projekt` (`kategorie_ID`,`projekt_ID`) VALUES (?, ?)";
            $fk_values = array($katID, $projektID);
            $statement = $db->prepare($katInsertQ);
            $fk_saved = $statement->execute( $fk_values );
        }
    }

}

// Auslesen der Kategorien für die Mehrfachauswahl
$query = "SELECT * FROM `kategorie`";
$statement = $db->query($query);
$kategorien = $statement->fetchAll(PDO::FETCH_ASSOC);

?>