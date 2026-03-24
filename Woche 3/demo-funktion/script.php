<?php
// Funktion aufrufen
require_once("function.php");
define('DEFAULT_TAG', 'p');

$text = 'test'; // Variable $text im Script Scope ist nicht gleich wie in der function scope

$resultat = wrap_html('Hallo Welt', 'h1');
$resultat .= wrap_html('Hallo Welt', 'h2', 'uk-h1');

echo $text;

echo $resultat;
echo "\n";
echo wrap_html('Noch ein Text', '');
?>