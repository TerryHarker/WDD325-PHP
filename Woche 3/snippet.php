<?php
// Snippet, das von master.php eingebunden wird

/*
echo '<pre>';
print_r( $_SERVER );
echo '</pre>';
*/
echo 'Diese Datei hat mich eingebunden: '.basename($_SERVER['PHP_SELF']);
?>
<p>Dieser Inhalt steht in einer separaten Datei</p>