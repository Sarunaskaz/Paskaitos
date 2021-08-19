<?php
/*Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- 
vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, 
nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST.
*/
$get = "< style='background-color: green ;'>";
$post = "< style='background-color: yellow ;'>";


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

<form action="" method="get">
    <button type="submit" method="get" onclick="style='background-color: yellow'">Get</button><br>
</form>
    <form action="" method="post">
    <button type="submit" method="post">Post</button>
</form>
    
</body>
</html>