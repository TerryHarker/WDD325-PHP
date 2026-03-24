<?php
// Alle Formularvalidierungsfunktionen definiere ich in dieser Datei 

/**
 * validate_password - validiert einen String auf verschiedene Passwortregeln
 * @param string $passwort - das zu validierende Passwort
 * @return bool|array - true, wenn das PW akzeptiert ist, sonst ein Array mit Fehlermeldungen
 */
function validate_password( $password ){
   $pwIsValid = true; // status-Variable für die Entscheidung nach der Validierung, ob das Formular verarbeitet werden kann.
   $messages = array();

   $minUpper = "/^(?:.*[A-Z]){".PW_MIN_UPPER.",}/"; // minimum 1 Grossbuchstaben
   $minLower = "/^(?:.*[a-z]){".PW_MIN_LOWER.",}/"; // minimum 1 Kleinbuchstaben
   $minDigits = "/^(?:.*[0-9]){".PW_MIN_DIGITS.",}/"; // minimum 1 Ziffer
   $minSpecial = "/^(?:[\w\s]*[^\w\s]){".PW_MIN_SPECIAL.",}/"; // minimum 1 Sonderzeichen
   $noSpace = "/^\S+$/";
   

   if( preg_match($minUpper, $password) == 0 ){
      // echo 'kein Grossbuchstaben';
      // zu wenig Grossbuchstaben
      $messages[] =  'Das Passwort muss mindestens '.PW_MIN_UPPER.' Grossbuchstaben enthalten';
      $pwIsValid = false;
   }
   if( preg_match($minLower, $password) == 0 ){
      // zu wenig Kleinbuchstaben
      $messages[] =  'Das Passwort muss mindestens '.PW_MIN_LOWER.' Kleinbuchstaben enthalten';
      $pwIsValid = false;
   }
   if( preg_match($minDigits, $password) == 0 ){
      // zu wenig Zahlen
      $messages[] =  'Das Passwort muss mindestens '.PW_MIN_DIGITS.' Zahl(en) enthalten';
      $pwIsValid = false;
   }
   if( preg_match($minSpecial, $password) == 0 ){
      // zu wenig Sonderzeichen
      $messages[] =  'Das Passwort muss mindestens '.PW_MIN_SPECIAL.' Sonderzeichen enthalten';
      $pwIsValid = false;
   }
   if( preg_match($noSpace, $password) == 0 ){
      // Leerueichen gefunden
      $messages[] =  'Das Passwort darf keine Leerzeichen enthalten';
      $pwIsValid = false;
   }

   // var_dump($pwIsValid);

   // Resultat zurückliefern, true, wenn OK, array mit messages, wenn nicht OK.
   if ($pwIsValid==true) {
      return true;
   }else{
      return $messages;
   }
}


?>