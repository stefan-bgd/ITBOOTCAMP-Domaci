<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14D Zadatak 1</title>
</head>
<body>
    <!--    
    Napraviti formu koja u 2 inputa 
    prihvata ime i prezime. Posle slanja forme, prikazati inicijale u obliku I.P.  
    -->


    <form action="zadatak1.php" method="post">
    
      <p>
      Unesi ime:
        <input type="text" name="ime" id="#ime">
      </p>

      <p>
      Unesi prezime:
        <input type="text" name="prezime" id="#prezime">
      </p>

      <input type="submit" value="SEND">
    
    </form>

    <hr>
    

</body>
</html>

<?php
    
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];

    $ime_v = strtoupper(substr($ime, 0, 1));
    $prezime_v = strtoupper(substr($prezime, 0, 1));

    echo $ime_v . "." . $prezime_v . ".";
   


?>