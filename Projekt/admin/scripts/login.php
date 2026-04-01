<?php
// Demo User:
$gespeicherterUser = 'terry@bytekultur.net';
$pwhash = '$2y$10$w76FPD1pxTlBG2Rli1iL2O2IljEVmz0SYt0haa/Lgx.WYHzL0U3kW'; // 'test1234'


// Wenn Formular abgeschickt - prüfen
if( isset($_POST['username']) && isset($_POST['password']) ){
    if( 
        $_POST['username'] == $gespeicherterUser &&  
        password_verify($_POST['password'], $pwhash) === true
    ){
        // Erfolgreich eingeloggt - loginstatus merken
        $_SESSION['loginstatus'] = 'loggedin';
        $_SESSION['loginstatus'] = 'loggedin';
        $_SESSION['login_userip'] = $_SERVER['REMOTE_ADDR']; // IP des Users zum Zeitpunkt des Logins
        $_SESSION['login_useragent'] = $_SERVER['HTTP_USER_AGENT']; // UA zum Zeitpunkt des Logins
        $_SESSION['last_activity'] = time();

        header("location: index.php?page=dashboard"); // umleitung zur admin area
    }else{
        $errorMessage = 'Logindaten waren nicht korrekt';
    }
}


?>