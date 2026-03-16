<?php
/**
 * Beispiel Formular-Validierung
 * Die action im Form-Tag ist leer, das heisst, die Daten werden an dieses Skript (gleiche URL) gesendet
 * Dadurch können wir die Validierung direkt in dieser Datei machen, und Fehlermeldungen direkt über dem Formular ausgeben.
 */

// Monitor für POST Daten
echo "<pre> POST Daten:";
print_r($_POST);
echo "</pre>";

$hasError = false; // status-Variable für die Entscheidung nach der Validierung, ob das Formular verarbeitet werden kann.
$messages = array(); // Message-Sammelcontainer für die Ausgabe der Fehlermeldungen im HTML


// Prüfen, ob das Formualr schon abgeschickt wurde:
if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) ){
   echo 'wir sind ready für die Validierung';

   // Pflichfelder prüfen
   if( empty($_POST['name']) ){
      // Feld name ist leer
      $messages[] = 'Bitte geben Sie Ihren Namen an';
      $hasError = true;
   }
   if( empty($_POST['email']) ){
      // Feld email ist leer
      $messages[] =  'Bitte geben Sie Ihre E-Mail an';
      $hasError = true;
   }
   if( empty($_POST['password']) ){
      // Feld password ist leer
      $messages[] =  'Bitte geben Sie Ihr Passwort an';
      $hasError = true;
   }


   // email format prüfen - https://www.php.net/manual/en/function.filter-var.php
   $validEmail = filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL);
   // var_dump($validEmail);
   if( $validEmail == false ){
      // email ist nicht gültig
      $messages[] =  'Bitte geben Sie eine gültige E-Mail adresse an';
      $hasError = true;
   }


   // Länge des Namens prüfen (TODO)


   // Passwort prüfen nach bestimmten regeln (TODO)
   $minUpper = "/^(?:.*[A-Z]){1,}/"; // minimum 1 Grossbuchstaben
   $minLower = "/^(?:.*[a-z]){1,}/"; // minimum 1 Kleinbuchstaben
   $minDigits = "/^(?:.*[0-9]){1,}/"; // minimum 1 Ziffer
   $minSpecial = "/^(?:[\w\s]*[^\w\s]){1,}/"; // minimum 1 Sonderzeichen
   $noSpace = "/^\S+$/";

   
   // kann man das Formular verarbeiten?
   if( $hasError == false){
      // kein fehler gefunden - verarbeiten (TODO)

   }

}
?>
<!DOCTYPE html>
<html lang="de">
   <head>
      <meta charset="UTF-8">
      <title>Formular Demo</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.0/dist/css/uikit.min.css">
   </head>
   <body>
      <div class="uk-container uk-margin-large-top">
         <form class="uk-form-stacked" action="" method="post">
            <h3 class="uk-heading-bullet">Formular Demo</h3>
            <p>Info: Dieses Formular hat ChatGPT generiert. Es nutzt UiKit CSS (remote eingebunden) und braucht daher eine Internetverbindung für die schöne Darstellung.</p>
            
            <?php if( count($messages) >0 ){ ?>
            <div class="uk-alert uk-alert-warning">
               <?php
               echo implode('<br>', $messages); // implode flattet array zu einem string
               ?>
            </div>
            <?php } ?>


            <!-- Text -->
            <div class="uk-margin">
               <label class="uk-form-label">Name</label>
               <div class="uk-form-controls">
                  <input class="uk-input" type="text" name="name">
               </div>
            </div>
            <!-- Email -->
            <div class="uk-margin">
               <label class="uk-form-label">E-Mail</label>
               <div class="uk-form-controls">
                  <input class="uk-input" type="text" name="email">
               </div>
            </div>
            <!-- Passwort -->
            <div class="uk-margin">
               <label class="uk-form-label">Passwort</label>
               <div class="uk-form-controls">
                  <input class="uk-input" type="password" name="password">
               </div>
            </div>
            <!-- Select -->
            <div class="uk-margin">
               <label class="uk-form-label">Land</label>
               <div class="uk-form-controls">
                  <select class="uk-select" name="country">
                     <option value="">Bitte wählen</option>
                     <option value="de">Deutschland</option>
                     <option value="ch">Schweiz</option>
                     <option value="at">Österreich</option>
                  </select>
               </div>
            </div>
            <!-- Radio -->
            <div class="uk-margin">
               <label class="uk-form-label">Geschlecht</label>
               <div class="uk-form-controls">
                  <label><input class="uk-radio" type="radio" name="gender" value="male"> Männlich</label><br>
                  <label><input class="uk-radio" type="radio" name="gender" value="female"> Weiblich</label><br>
                  <label><input class="uk-radio" type="radio" name="gender" value="other"> Andere</label>
               </div>
            </div>
            <!-- Checkbox -->
            <div class="uk-margin">
               <label class="uk-form-label">Interessen</label>
               <div class="uk-form-controls">
                  <label><input class="uk-checkbox" type="checkbox" name="interests[]" value="coding"> Coding</label><br>
                  <label><input class="uk-checkbox" type="checkbox" name="interests[]" value="design"> Design</label><br>
                  <label><input class="uk-checkbox" type="checkbox" name="interests[]" value="marketing"> Marketing</label>
               </div>
            </div>
            <!-- Textarea -->
            <div class="uk-margin">
               <label class="uk-form-label">Über mich</label>
               <div class="uk-form-controls">
                  <textarea class="uk-textarea" name="aboutme" rows="4"></textarea>
               </div>
            </div>
            <!-- Datei -->
            
            
            <!-- Hidden -->
            <input type="hidden" name="form_id" value="demo_form">
            <!-- Submit -->
            <div class="uk-margin">
               <button class="uk-button uk-button-primary">Absenden</button>
            </div>
         </form>
      </div>
   </body>
</html>