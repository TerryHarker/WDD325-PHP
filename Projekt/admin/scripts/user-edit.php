<?php
// Hier kommt der verarbeitende Code für das Userformular hin
$id = '';
$name = '';
$email = '';


// 2. Schritt: speichern (UPDATE)
if(isset($_POST['id'])){

    // sanitizing / Vorbereiten der Variablen
    $id = (int)$_POST['id'];
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $passwort = $_POST['passwort']; // keine Bereinigung hier!
    
    // validierung würde hier hinkommen... s. validierung woche 2
    
    
    // Update query
    $updateQ = "UPDATE `user`SET `name`= ?, `email`=?"; 
    $values = array($name, $email);

    // Passwort wird nur geändert, wenn es nicht leer ist
    if(!empty($passwort)){
        $passwort_hash = password_hash( $_POST['passwort'], PASSWORD_DEFAULT );
        $updateQ .= ", `passwort`=?";
        $values[] = $passwort_hash;
        
    }
    $updateQ .=" WHERE id=?";
    $values[] = $id;
    
    $statement = $db->prepare( $updateQ );
    $updated = $statement->execute( $values );
    // var_dump($updated);

    // umleiten zur Liste: 
    header("Location: index.php?page=user-list");
}


// 1. Schritt: lesen
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    
    // User auslesen
    $query = "SELECT * FROM `user` WHERE id=? LIMIT 1";
    $statement = $db->prepare( $query );
    $statement->execute( [$id] );
    $user = $statement->fetch( PDO::FETCH_ASSOC );

    if($user!==false){
        $name = $user['name'];
        $email = $user['email'];
    }
}
    



?>