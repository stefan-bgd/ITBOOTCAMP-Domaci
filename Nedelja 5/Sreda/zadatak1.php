<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1</title>
    <style>

       .zelena {
           color:green;
       }

       .crvena{
           color:red;
       }
    </style>
</head>
<body>

  <?php

     # Data su dva slucajna broja. Prikazati veci broj u zelenoj, a manji broj u 
      #crvenoj   #boji.  Uraditi zadatak na 2 načina: 
     #a) Boje ubaciti u inline style
     #b) Boju odrediti preko klase, tako da php samo pravi element sa odredjenom  
     #klasom.
  
     $a1 = mt_rand(1,20);
     $b1 = mt_rand(1,20);
     $veci1 = 0;
     $mani1 = 0;
     
     echo "Brojevi su $a1 i $b1";


   if ($a1 == $b1) {
      echo "<p>Brojevi su jednaki</p>";
      
   }     
   else {
         
      if ($a1 > $b1) {
            $veci1 = $a1;
            $manji1 = $b1;     
         }
      else {
            $veci1 = $b1;
            $manji1 = $a1; 

         }
           
   }      

  ?>   
   <div class='zelena'> <p>Veci broj je <?= $veci1 ?></p> </div>
   <div class='crvena'> <p>Manji broj je <?= $manji1 ?></p> </div>    
</body>
</html>

<?php

#Drugi nacin

echo "<hr>";

$a = mt_rand(1, 20);
$b = mt_rand(1,20);
$veci = 0;
$manji = 0;

echo "<p>Brojevi su $a i $b</p>";


if ($a == $b) {
   echo "<p>Brojevi su jednaki</p>";
}
else{

   if ($a > $b) {
      $veci = $a;
      $manji = $b;
   }
   else {
      $veci = $b; 
      $manji = $a;
   }
}
echo "<p style='color:green' >Veci broj je $veci</p>";
echo "<p style='color:red' >Manji broj je $manji</p>";

?>