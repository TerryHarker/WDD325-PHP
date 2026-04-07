------------------
-- MySQL Demos
------------------

-- Vor- und Nachnamen aller user auslesen (Performance: nur die Spalten, die benötigt werden)
SELECT `vorname`,`nachname` FROM `user` 

-- alle user von 1980 auslesen
SELECT * FROM `user` 
WHERE `geburtsdatum` > '1979-12-31' AND `geburtsdatum` < '1980-12-31' 

-- alle User von 1980 auslesen mit YEAR() Funktion
SELECT * FROM `user` 
WHERE YEAR(`geburtsdatum`) = '1980';

-- ACHTUNG: löscht ALLE User, da kein Filter-Argument
DELETE FROM `user`;

-- Datenmanipulation (Update und Delete) mit WHERE-Argument, üblicherweise mit ID, um nur einen ganz bestimmten Datensatz zu manipulieren
DELETE FROM `user`
WHERE `id` = 342;
