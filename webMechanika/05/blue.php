<?php
/*Sukurkite du atskirus puslapius blue.php ir red.php 
Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). 
Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, 
o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį 
(iš raudono į mėlyną ir atvirkščiai).
 */
$blue = '<a href="red.php">http://localhost/Paskaitos/webMechanika/05/red.php</a>';
echo "<body style='background-color: blue '></body>";

echo $blue;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>