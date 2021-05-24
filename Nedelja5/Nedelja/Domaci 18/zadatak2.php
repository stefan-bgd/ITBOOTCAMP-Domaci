<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2 18D</title>
</head>
<body>
    
</body>
</html>

<?php

 #Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat #crvenom bojom a poslednje pomnozeni broj - zelenom


  $i = 30;
  $proizvod = 1;

  while($i >= 1){
    
    $proizvod *= $i;
    echo "<p style='color:green'>$proizvod</p>";

      if ($proizvod > 100000) {
          echo "<p style='color:red'>  $proizvod</p>";
          echo "Vece je od 100 000 nema dalje";
          break;
      }

    $i--;
  }

  



?>