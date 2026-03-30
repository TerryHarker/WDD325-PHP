<?php
// Demo User:
$gespeicherterUser = 'terry@bytekultur.net';
$gespeichertesPW = 'test1234';

// Wenn Formular abgeschickt - prüfen
if( isset($_POST['username']) && isset($_POST['password']) ){
    if( $_POST['username'] == $gespeicherterUser && $_POST['password'] == $gespeichertesPW ){
        // Erfolgreich eingeloggt - loginstatus merken
        $_SESSION['loginstatus'] = 'loggedin';
        header("location: index.php?page=dashboard"); // umleitung zur admin area
    }else{
        $errorMessage = 'Logindaten waren nicht korrekt';
    }
}


?>