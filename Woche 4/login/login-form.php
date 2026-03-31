<?php
require_once('config.php');

session_name(SESSION_NAME); // Name des session cookies - vor session_start()!
session_start();
// Demo User - mit gehashtem PW - nicht rekonstruierbar
$gespeicherterUser = 'terry@bytekultur.net';
$gespeichertesPW = '$2y$10$w76FPD1pxTlBG2Rli1iL2O2IljEVmz0SYt0haa/Lgx.WYHzL0U3kW'; // 'test1234'
// echo password_hash($gespeichertesPW, PASSWORD_DEFAULT);

// Wenn Formular abgeschickt - prüfen
if( isset($_POST['username']) && isset($_POST['password']) ){
    if( 
        $_POST['username'] == $gespeicherterUser &&  
        password_verify($_POST['password'], $gespeichertesPW) === true
    ){
        // user hat sich korrekt authentifiziert

        $_SESSION['loginstatus'] = 'loggedin';
        $_SESSION['login_userip'] = $_SERVER['REMOTE_ADDR']; // IP des Users zum Zeitpunkt des Logins
        $_SESSION['login_useragent'] = $_SERVER['HTTP_USER_AGENT']; // UA zum Zeitpunkt des Logins

        $_SESSION['last_activity'] = time();

        header("location: admin-area.php"); // umleitung zur admin area
    }else{
        $errorMessage = 'Logindaten waren nicht korrekt';
    }
}

session_regenerate_id(); // erneuert die SessionID (wert des session cookies)

// Erfolgreich eingeloggt - loginstatus merken

?><!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .container>div {

            margin: 16px;
        }
        .container {
            width: 300px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }
        input[type=text], input[type=password] {
            width:100%;
            width:-webkit-fill-available;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: block;
            border: none;
            background: #f1f1f1;
        }
        button,
        a.button {
            background-color: #e27018;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            text-decoration:none;
        }
        button:hover, .button:hover {
            opacity:1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="inner">
            <?php
            if( isset($errorMessage) ){
                echo '<p style="color:red">'.$errorMessage.'</p>';
            }
            ?>
            <form method="POST" action="">
                
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Benutzernamen eingeben" name="username" required>
                
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Passwort eingeben" name="password" required>
                
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>