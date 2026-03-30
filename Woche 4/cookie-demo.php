<?php
// cookie demo (see https://www.php.net/manual/en/function.setcookie.php)

$gueltigbis = time()+10; // gibt einen Unix Timestamp zurück
setcookie('testcookie', 'Information', $gueltigbis);

// cookie auslesen
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';
?>