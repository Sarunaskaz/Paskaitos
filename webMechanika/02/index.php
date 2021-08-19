<?php
/*Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, 
o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu 
(pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.
*/
if(isset ($_GET['color'])){
         $color= $_GET['color']; 
          echo "<body style='background-color: $color;'></body>";
     }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <a href = "http://localhost/Paskaitos/webMechanika/02/index.php?color=1">var2</a>
</body>
</html>