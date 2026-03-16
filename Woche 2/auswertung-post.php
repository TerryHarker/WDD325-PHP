<?php
// Hier kommt der Code hin, um das Formular auszuwerten.

echo 'Hallo <strong>'.$_GET['vorname'].' '.$_GET['nachname'].'</strong>. ';
echo 'Du sagst auf die Frage, ob dir PHP gefällt: <strong>'.$_GET['phplike'].'</strong>';

?>