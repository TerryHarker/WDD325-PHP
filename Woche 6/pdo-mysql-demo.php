<?php
/**
 * PDO Demo mit 
 * - Konstanten für die Verbindung  
 * - DB Verbindung mit PDO Objekt
 * - Try/Catch zum Abfangen von fatalen Fehlern
 * - Prepared Statements (immer notwendig, wenn User-Input ins SQL Statement einfliesst)
 */


// Schritt 1 - verbinden mit DB
define('DB_SERVER', 'localhost'); // localhost oder Server-Name / Server URL vom Hoster
define('DB_NAME', 'wdd0325'); // Deine Projektdatenbank
define('DB_USER', 'root'); // root user in .ENV File für Docker
define('DB_PASSWORD', ''); // root pw in .ENV File für Docker


// Sicherstellen dass Verbindung funktioniert, Fehler abfangen mit Try/Catch
try {
    $db = new PDO("mysql:host=".DB_SERVER.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
    // var_dump($db);
}catch ( PDOException $exception ){
    // print_r($exception);

    die('verbindung hat nicht funktioniert');
}

// Manipulation vor anzeige
if( isset($_GET['action'] ) && $_GET['action']=='delete' ){
    // Datensatz mit der ID aus $_GET['id'] löschen
    $deleteQuery = "DELETE FROM `user` WHERE ID=?";
    echo $deleteQuery;
    
    // $resultat = $db->query($deleteQuery);
    $deleteStatement = $db->prepare($deleteQuery);
    $deleteStatement->execute(array($_GET['id']));
    // var_dump($deleteStatement);
    header("Location: pdo-mysql-demo.php"); // Seite noch mal ohne parameter laden
}


// Schritt 2 - mit DB Tabellen arbeiten (CRUD)
$query = "SELECT ID, vorname, nachname  FROM `user`";
$arguments = array();

if( isset($_GET['search']) && strlen($_GET['search']) > 0 ){
    // es wurde ein Suchwort mitgeschickt, bitte filtern
    $query .= " WHERE vorname LIKE ? ";
    $query .= " OR nachname LIKE ? ";

    $arguments[] = '%'.$_GET['search'].'%';
    $arguments[] = '%'.$_GET['search'].'%';
}
echo 'die Daten aus dem User Input: ';
print_r($arguments);
$query .= "LIMIT 0, 10";
echo '<br>Der Befehl, der ausgeführt wird: '.$query;

// exit;

// $statement = $db->query($query);
$statement = $db->prepare($query);
$statement->execute($arguments);
$daten = $statement->fetchAll(PDO::FETCH_ASSOC); // assoziatives Array erstellen lassen


/*
echo '<pre>';
print_r( $daten );
echo '</pre>';
*/
?>

<h3>User Daten</h3>
<form action="" method="GET">
    <input type="text" name="search" placeholder="suche">
</form>
<table border="1">
    <tr>
        <th>ID</th>
        <th>vorname</th>
        <th>nachname</th>
        <td></td>
    </tr>
    <?php foreach($daten as $row){ ?>
    <tr>
        <td><?php echo $row['ID']; ?></td>
        <td><?php echo $row['vorname']; ?></td>
        <td><?php echo $row['nachname']; ?></td>
        <td><a href="pdo-mysql-demo.php?action=delete&id=<?php echo $row['ID']; ?>">[X]</a></td>
    </tr>
    <?php } ?>
</table>