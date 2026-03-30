<?php
// session demo (see https://www.php.net/manual/en/ref.session.php)
session_start(); // Sessionzugriff

$_SESSION['test'] = 'Meine etwas weniger unsichere Information.';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>