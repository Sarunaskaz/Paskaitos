<?php

echo '<h3>1.Užduotis</h3>';
//1. sukurkite funkciją kuri išspausdina kokį nors tekstą.
function echoTekstas($tekstas)
    {
        return $tekstas ;
    }

    $tekstas2 = echoTekstas('Labas Krabas');
    echo $tekstas2;

    echo '<h3>b)</h3>';

     //1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" +
     //tas paduotas kintamasis.

     
     //function tekstas()

     
    $kazkas = 'Krabas';
    function duArg($var)
    {
         echo "Labas", ' ' .$var;
    }

    $pasisveikinimas = duArg($kazkas);
    echo $pasisveikinimas;

    echo '<h3>c)</h3>';
    
    //1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius

    function firstDgt($pirmi8){
        $rez = substr("$pirmi8", 0,9);
        return $rez;
    }
    $pi = 3.14159265359;
    $spausdina = firstDgt($pi);
    echo $spausdina;

    echo '<h3>d)</h3>';
    //  1d. sukurkite funkciją kuri gražina dviejų parametrų sąndaugą.

    function sandauga($san1, $san2){
        $sandaugRez = $san1 * $san2;
        return $sandaugRez;
    }
    $pirmasSk = 10;
    $antrasSk = 20;

    $dviejuSandauga = sandauga($pirmasSk, $antrasSk);
    echo $dviejuSandauga;

    echo '<h3>e)</h3>';
    //1e. sukurkite funkciją kuri apskaičiuoja skritulio PLOTĄ. ši funkcija priima 1 parametrą
    //bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.

    function skritulioS($r){
        $pi = 3.14159265359;
        $rezultatas = substr("$pi", 0,9);
        
        $radius = $r * $r;
        $plotas = $rezultatas * $radius;
        return $plotas;
        
    }
    $skersmuo = 5;
    $skaiciuojam = skritulioS($skersmuo);
    echo $skaiciuojam;

    echo '<h3>f)</h3>';

     //1f. sukurkite funkciją kuri apskaičiuoja skritulio ILGĮ. ši funkcija priima 1 parametrą
    //bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.


  



    