<?php
echo '<h3>1.Užduotis</h3>';
/*1.sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40
        1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais.*/ 

        $masyvas = [];

        foreach (range(0, 29) as $value)
        {       
                $masyvas[] = rand(20,40);
        }

        foreach($masyvas as $value){
                echo $value. " ";
        }
        
echo '<h3>2.Užduotis</h3>';
/* 2. sukurkite masyvą su 10 skaičių nuo 0 iki 10
        2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 20
        2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.
        t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.*/

        for ($i = 0; $i < 10; ++$i){
                foreach(range(0,1) as $value){
                        $value = rand(10,19);
                        $newArray[] = $value;
                }
        
 }      
        echo '<pre>';
        print_r($newArray);
echo '<h3>2.c)</h3>';

        for($i =0; $i < 10; ++$i){
                for($j = 0; $j < count($newArray); ++$j){
                        echo "$newArray[$j] ";
                }
        }
    

echo '<h3>3.Užduotis</h3>';
/*3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.

        reikšmės - skaičiai nuo 0 iki 9.

        3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).

        3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu*/

        $var1 = [];
        
        foreach(range(0,9) as $key){
                
                foreach(range(0,9) as $value){
                        $var1[$key][$value] = rand(0,9); 
                }
        }
                echo '<pre>';
                print_r($var1);

echo '<h3>3.b) Užduotis</h3>';
foreach ($var1 as $key => $kvadratas) {
         echo '<br>' .$key ." ";
        
         foreach($kvadratas as $key => $value){
           
            echo $value. " ";
        }
    }

echo '<h3>3.c) Užduotis</h3>';

 foreach ($var1 as $key => $kvadratas) {
         echo '<br>' .$key ." ";
        
         foreach($kvadratas as $key => $value){
           
         $rez=$value*$value;

            echo $rez. " ";
        }
    }

echo '<h3>4.Užduotis</h3>';

/*4. Sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.
raktažodžiai (key): "species","age", "name", "description". Tai bus vienas objektas,
vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.*/ 

 $gyvunas['species'] = 'Suo';  
        $gyvunas['age'] =4; 
        $gyvunas['name']= 'Aras';  
        $gyvunas['description']= 'Draugiskas';

 foreach(range(0,0) as $key => $value){
        $gyvunas [] = $key + $value;
 }       
 print_r($gyvunas);

 echo '<h3>5.Užduotis</h3>';
 
 /*5. sukurkite tris masyvus:
        $names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
        $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
        $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
        aprašus sugalvokite patys. jų reikia 10. */

 $names = ['Bobikas','Brisius','Rexas', 'Leo', 'Lukas', 'Petras', 'Stepas', 'Bartas', 'Kinderis', 'Ema'];
 $species = ['kengūra','gazelė','liūtas', 'juruLiutas', 'Panda', 'meska', 'bebras', 'meskenas', 'suo', 'katinas'];
 $descriptions = ['gražus bet piktas','pastoviai miega','šauniai maskuojasi', 'miegodas knarkia', 'begdamas riaumoja', 'kapstosi gyliai','kapstosi negyliai', 'begioja kreivai', 'suoliuoja aukstai', 'trepsi per ilgai'];

 print_r($names);

 echo '<h3>5.b)Užduotis</h3>';
 /*
 5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,
iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. 
masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.
*/

$animals = [];

foreach(range(0,9) as $names[] => $species[]){
        $species[] = $descriptions;
        $names[] = $species;
        $animals[] = $names;

}
print_r($animals);