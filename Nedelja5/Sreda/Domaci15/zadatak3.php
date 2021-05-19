<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3</title>
</head>
<body>

<h2>Zadatak 3 Domaci 15</h2>
    
<form action="zadatak3.php" method="post">
 
 <input type="text" name="ime1" placeholder="Unesi ime">
 <input type="text" name="ime2" placeholder="Unesi ime">
 <input type="submit" value="Submit">

</form>

   
</body>
</html>

<?php

 #Dodati u prethodni program fju koja vraca krace ime. Prikazati duze ime u crvenoj, a krace ime #u zelenoj boji.

 

 if(isset($_POST['ime1']) and isset($_POST['ime2'])){
    $ime1 = $_POST['ime1'];
    $ime2 = $_POST['ime2'];

 function imena(){
     global $ime1, $ime2; 
     if (strlen($ime1) > strlen($ime2)  ) {
         
        echo "<p style='color:red;'>Duze je  ime $ime1</p>";
        echo "<p style='color:green'>Krace je  ime $ime2</p>";

     }

     elseif (strlen($ime2) > strlen($ime1) ) {
        echo "<p style='color:red'>Duze je ime $ime2</p>";
        echo "<p style='color:green'>Krace je ime $ime1</p>";
         
     }
     else {
         echo "Imena su jednake duzine";
     }
 }

 imena();

}





?>