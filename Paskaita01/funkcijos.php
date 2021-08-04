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

    function lastDgt($pirmi8){
        $rez = substr("$pirmi8", 0,9);
        return $rez;
    }
    $pi = 3.14159265359;
    $spausdina = lastDgt($pi);
    echo $spausdina;

    echo '<h3>d)</h3>';

    