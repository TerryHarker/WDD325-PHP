<?php
// Hier kommt der Code hin, um das Formular auszuwerten.

echo '<pre>';
print_r($_POST); // print_r gibt Inhalt von arrays aus
echo '</pre>';

echo 'Hallo <strong>'.$_POST['vorname'].' '.$_POST['nachname'].'</strong>. ';
echo 'Du sagst auf die Frage, ob dir PHP gefällt: <strong>'.$_POST['phplike'].'</strong>';

?>