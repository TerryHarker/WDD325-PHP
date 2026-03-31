<?php
require_once('config.php');

session_name(SESSION_NAME);
session_start();
$isLoggedin = true; 

// Prüfen, ob Session existiert (User eingeloggt)
if( !isset($_SESSION['loginstatus']) || $_SESSION['loginstatus'] != 'loggedin' ){
    // user ist eingeloggt
    $isLoggedin = false;
}

// Prüfen, ob die aktuelle User IP mit der IP aus dem Login übereinstimmt
if(!isset($_SESSION['login_userip']) || $_SESSION['login_userip'] != $_SERVER['REMOTE_ADDR']){
    // user ip stimmt nicht überein
    $isLoggedin = false;
}

// Prüfen, ob aktueller Useragent mit gespeichertem übereinstimmt
if(!isset($_SESSION['login_useragent']) || $_SESSION['login_useragent'] != $_SERVER['HTTP_USER_AGENT']){
    // user ip stimmt nicht überein
    $isLoggedin = false;
}

// Prüfen, ob die Session zu lange inaktiv war
$aktuelleZeit = time(); // Zeit jetzt in Sekunen
$sessionLifetime = SESSION_LIFETIME*60; // Gültigkeit in Sekunden
if( $aktuelleZeit - $_SESSION['last_activity'] > $sessionLifetime ){
    // zu lange inaktiv
    $isLoggedin = false;
}

// user will sich ausloggen, er hat den "logout" link angeklickt
if(isset($_GET['logout'])){
    // Loginstatus zurücksetzen
    unset($_SESSION['loginstatus']); // position wird aus session gelöscht
    $isLoggedin = false;
}

// Keine Session: Umleitung und Abbruch
if($isLoggedin == false){
    header("location: login-form.php"); // umleitung
    exit(); // parser beendet das lesen
}

// erneuern
$_SESSION['last_activity'] = time(); // Timestamp erneuern
session_regenerate_id(); // erneuert die SessionID (wert des session cookies)


echo '<pre>';
echo $_COOKIE['PHPSESSID']."\n";
print_r($_SESSION);
echo '</pre>';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Geschützter Bereich</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .container-lg>div {

            margin: 16px;
        }
        .container-lg {
            width: 800px;
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
            opacity: 0.9;
            text-decoration:none;
            display:inline-block;
        }
        button:hover, .button:hover {
            opacity:1;
        }
        .flex {
            display: flex;
        } 
        .flex-left { 
            width:80%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }
        .flex-right { 
            width:20%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-content: flex-end;
        }
    </style>
</head>
<body>
    <div class="container-lg navbar flex">
        <div class="inner flex-left">
            <strong>Adminbereich</strong>
        </div>
        <div class="inner flex-right">
            <a class="button" href="admin-area.php?logout=true">Logout</a>
        </div>
    </div>
    <div class="container-lg">
        <div class="inner">
           <h1>Willkommen im Adminbereich</h1>
           <p>Hier dürfen nur diejenigen rein, die erfolgreich angemeldet sind.</p>
        </div>
    </div>
</body>
</html>