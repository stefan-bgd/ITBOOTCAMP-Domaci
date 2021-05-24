<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1 17D</title>
</head>
<body>
    
   

</body>
</html>

<?php
/*
Napisati funkciju koja prikazuje paragraf sa 2 spana unutra.
 Prvi span ima vase ime, drugi span vase prezime. 
 Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. 
 (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta)
*/


function paraf(){
    $ime = "Stefan Jovanovic";
    return $ime;
    
}

$paraf = paraf();
$duzina = strlen($paraf) - 1;

echo "Duzina je $duzina";


for ($i=1; $i<=$duzina; $i++) { 
     
    echo "<p><span>$paraf</span></p>";
}



?>