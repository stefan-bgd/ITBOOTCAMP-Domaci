<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14D Zadatak 2</title>
    <style>
       #okvir{
           margin:100px;
       }
    </style>
</head>
<body>

    <!--
        Napraviti formu koja u jednom inputu prihvata ime i prezime razdvojene 
        razmakom. Posle slanja forme, prikazati inicijale u obliku I.P. 
        (sad saljem sa uputstvom  
        za prvo slovo - je lako, 
        za drugo slovo - nadjite poziciju razmaka preko strpos, 
        a onda preko substr uzmete slovo na sledecoj poziciji)
    -->

  <div id='okvir'>

    <form action="zadatak2.php" method="post">
         
         <p>
           Unesi Ime i Prezime:
          <input type="text" name="unos" id="unos">
          <input type="submit" value="SEND">
         </p>

         
    
    </form>

<?php
    $unos = $_POST['unos'];
    
    $ime_v = strtoupper(substr($unos, 0, 1));
    $mesto = strpos($unos, " ");
    $prezime_v = strtoupper(substr($unos, $mesto, 2));


    echo $ime_v . "." . $prezime_v . ".";

?>

    </div>
</body>
</html>

