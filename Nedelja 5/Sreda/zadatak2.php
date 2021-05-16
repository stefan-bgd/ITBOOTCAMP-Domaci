<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
</head>
<body>
    
</body>
</html>

<?php

  
#Data su tri broja. Prikazati ih u rastućem redosledu.


  $a = mt_rand(1,10);
  $b = mt_rand(1,10);
  $c = mt_rand(1,10);
  $najveci = 0;
  $srednji = 0;
  $mali = 0;
  echo "Dati brojevi su $a, $b i $c";

 if ($a == $b or $a==$c or $b == $c) 
 {
       echo "<p>Neki od brojeva su jednaki. Zavrti opet za rastuci niz</p>";
 }
 else 
 { 
 
      if ($a > $b and $a > $c and $b > $c) {
            $najveci = $a;
            $srednji = $b;
            $mali = $c;
      }
      elseif ($a > $b and $a > $c and $c > $b) {
            $najveci = $a;
            $srednji = $c;
            $mali = $b;
      }
      elseif($b > $c and $b > $a and $a > $c){
            $najveci = $b;
            $srednji = $a;
            $mali = $c;      
      }
      elseif($b > $c and $b > $a and $c > $a){
            $najveci = $b;
            $srednji = $c;
            $mali = $a;      
      }
      elseif($c > $a and $c > $b and $a > $b){
            $najveci = $c;
            $srednji = $a;
            $mali = $b;      
      }
      else {
            $najveci = $c;
            $srednji = $b;
            $mali = $a;

      }
    
      echo "<p>Rastuci niz brojeva: $mali, $srednji, $najveci</p>";
   }   

  

 



?>