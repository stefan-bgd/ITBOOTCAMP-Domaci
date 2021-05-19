<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1 16D</title>
</head>
<body>

     
     
    
</body>
</html>

<?php

/* 

1. Uneti 4 broja preko forme. U php fajlu ucitati ta 4 broja preko $_GET.
2. (nastavak) Proveriti uslov da li je drugi broj veci od prvog, i četvrti od treceg.
 Ako uslov nije ispunjen, prikazati gresku (die).
3. (nastavak) Ako je uslov ispunjen, izračunati 
zbir onih brojeva od prvog do drugog koji su deljivi sa 4, 
pa zbir onih brojeva od trećeg do četvrtog koji su deljivi sa 3. 
Prikazati koji je zbir veći.


*/

 $broj1 = $_GET['broj1'];
 $broj2 = $_GET['broj2'];
 $broj3 = $_GET['broj3'];
 $broj4 = $_GET['broj4'];
 $zbir1 = 0;
 $zbir2 = 0;


 if($broj2 > $broj1 ){
    for($i = $broj1; $i <=$broj2; $i++){
        if ($i % 2 ==  0) {
            echo "Deljivi sa 2: $i<br>";
             $zbir1 += $i;
        }
    }

 }

 if ($broj4 > $broj3) {
      for($a = $broj3; $a <=$broj4; $a++){
          if ($a % 3 ==  0) {
               echo "Deljivi sa 3: $a<br>";
               $zbir2 += $a;
          }
      }
 }

 else {
     die("Uslov nije ispunjen");
 }

 echo "<p>Zbir deljivih sa 2 je $zbir1</p>";
 echo "<p>Zbir deljivih sa 3 je $zbir2</p>";

?>