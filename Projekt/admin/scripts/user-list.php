<?php
// Hier kommt der verarbeitende Code für die Userliste hin
if( isset($_GET['action'] ) && $_GET['action']=='delete' ){
    $deleteQuery = "DELETE FROM `user` WHERE ID=?";
    echo $deleteQuery;

    $deleteStatement = $db->prepare($deleteQuery);
    $deleteStatement->execute(array($_GET['id']));
    header("Location: index.php?page=user-list"); // Seite noch mal ohne parameter laden
}

$query = "SELECT ID, email, `name` FROM `user` LIMIT 0, 10";
$statement = $db->query($query);
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
?>