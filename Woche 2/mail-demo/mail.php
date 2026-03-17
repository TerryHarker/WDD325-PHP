<?php
// variablen vorbereiten:
$address = 'test-qejxfsnv8@srv1.mail-tester.com'; // REsultat hier https://mail-tester.com/test-qejxfsnv8
$from = 'terry@bytekultur.net';
$subject = 'Mail aus dem Skript';
$body = 'Hallo Mailtester, du hast eine Nachricht erhalten';

$headers = 'From: ' .$from . "\r\n" ;

// mail senden
try{

    if( mail($address, $subject, $body, $headers) ){
        echo 'Mail wurde gesendet';
        }else{
            echo 'mail konnte nicht gesendet werden';
            }
} catch( Exception $e ){
    print_R($e);
}
?>