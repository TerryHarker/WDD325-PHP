<?php
// session demo:
session_start(); // Sessionzugriff

$_SESSION['test'] = 'Meine etwas weniger unsichere Information.';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>