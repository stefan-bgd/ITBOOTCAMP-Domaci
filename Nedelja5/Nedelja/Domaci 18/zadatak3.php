<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3 18D</title>
</head>
<body>

 
    
</body>
</html>

<?php

 /* 
 Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, 
 ili je druga cifra deljiva sa 4.
 */

 $i = 30;

 while($i<=99){
    
    $i++;

#zaboravo sam kako se traze prva i druga cifra dal su deljive sa nekim brojem     
     if ($i % 3 == 0 or $i % 4 == 0) {
         echo "Prezkoci<br>";
         continue;
     }

     echo $i."<br>"; 
     
 }

 


?>