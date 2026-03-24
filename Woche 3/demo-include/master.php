<?php
// Master datei, die einbinden wird (wird nicht selbst eingebunden)

echo '<pre>';
print_r( $_SERVER );
echo '</pre>';
?>
Dies ist die Master Datei.

<?php include("snippet.php"); ?>