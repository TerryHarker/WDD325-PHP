<?php
// cookie demo

$gueltigbis = time()+10; // gibt einen Unix Timestamp zurück
setcookie('testcookie', 'Information', $gueltigbis);

// cookie auslesen
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';
?>