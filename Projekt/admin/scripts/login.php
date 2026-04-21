<?php

// Wenn Formular abgeschickt - prüfen
if( isset($_POST['username']) && isset($_POST['password']) ){
    // User aus der Datenbank lesen anhand des Usernamens (email)
    $query = "SELECT `ID`, `passwort` FROM `user` WHERE email=?";
    $statement = $db->prepare( $query ); // auzuführender Befehl
    $statement->execute( [$_POST['username']] ); // Daten schicken und ausführen
    $userdata = $statement->fetch( PDO::FETCH_ASSOC ); // Datenabholen
    // print_r($userdata);
if( 
        $userdata !==false && 
        password_verify($_POST['password'], $userdata['passwort']) === true
    ){
        // Erfolgreich eingeloggt - loginstatus merken
        $_SESSION['loginstatus'] = 'loggedin';
        $_SESSION['user_id'] = $userdata['ID']; // user ID in Session, um später den User zuweisen zu können
        $_SESSION['login_userip'] = $_SERVER['REMOTE_ADDR']; // IP des Users zum Zeitpunkt des Logins
        $_SESSION['login_useragent'] = $_SERVER['HTTP_USER_AGENT']; // UA zum Zeitpunkt des Logins
        $_SESSION['last_activity'] = time();

        header("location: index.php?page=dashboard"); // umleitung zur admin area
    }else{
        $errorMessage = 'Logindaten waren nicht korrekt';
    }
}


?>