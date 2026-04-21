-- 
-- Beispiel mit JOIN für den User
-- es werden beide Tabellen miteinander verbunden anhand der user_ID, 
-- die in beiden Tabellen vorhanden ist
--
SELECT *
FROM `projekt` 
LEFT JOIN `user` ON `user_ID`= `user`.`ID`

-- 
-- Beispiel mit JOIN für den User, aber nur bestimmte Spalten
-- Tabellenname wird vorangestellt, um Eindeutigkeit zu erreichen, wenn zwei Spalten den gleichen Namen haben
-- 
SELECT `projekt`.`ID`, `projekt`.`bild`, `projekt`.`titel`, 
`user`.`name`
FROM `projekt` 
LEFT JOIN `user` ON `user_ID`= `user`.`ID`

-- 
-- Beispiel mit JOIN für den User, aber mit Aliasnamen für Tabellen und Spalten
-- Aliasnamen können verwendet werden, um die Lesbarkeit zu verbessern 
-- oder um Konflikte bei Spaltennamen zu vermeiden
-- 
SELECT p.`ID`, p.`bild`, p.`titel`, 
u.`name` AS autor
FROM `projekt` AS p
LEFT JOIN `user` AS u ON `user_ID`= u.`ID`


-- Beispiel mit JOIN für die Kategorie
SELECT p.`ID`, p.`bild`, p.`titel`, 
u.`name` AS autor,
k.name AS kategorie
FROM `projekt` AS p
LEFT JOIN `user` AS u ON `user_ID`= u.`ID`
LEFT JOIN `kategorie_projekt` AS kp ON p.ID=kp.projekt_ID
LEFT JOIN `kategorie` AS k ON k.ID=kp.kategorie_ID

-- Alternative mit Unterabfrage (Subquery) für die Kategorie
-- Subqueries können verwendet werden, um ein Resultat aus mehreren Zeilen als "Spalte" zurückzugeben, 
-- z.B. mit GROUP_CONCAT, um mehrere Kategorien in einer Zeile anzuzeigen (ähnlich wie implode in PHP)
SELECT p.`ID`, p.`bild`, p.`titel`, 
(SELECT GROUP_CONCAT(`name`) FROM `kategorie` AS k LEFT JOIN `kategorie_projekt` AS kp ON k.ID = kp.kategorie_ID WHERE kp.projekt_ID = p.ID) AS kategorie
FROM `projekt` AS p