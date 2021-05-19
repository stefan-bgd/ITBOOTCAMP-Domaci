<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2 Domaci 15</title>
</head>
<body>

 <form action="zadatak2.php" method="post">
 
   <input type="text" name="ime1" placeholder="Unesi ime">
   <input type="text" name="ime2" placeholder="Unesi ime">
   <input type="submit" value="Submit">
 
 </form>
    
</body>
</html>

<?php

#Napisati fju koja za zadata dva imena (globalne promenljive) vraca duze ime. Pri pozivanju #prikazati rezultat.

if (isset($_POST['ime1']) and isset($_POST['ime2'])) {
    
    $ime1 = $_POST['ime1'];
    $ime2 = $_POST['ime2'];
    

    function imena(){

        global $ime1, $ime2;

        if (strlen($ime1) > strlen($ime2)) {
            
            return $ime1;
        }

        if (strlen($ime2) > strlen($ime1)) {
            
            return $ime2;
        }

        else {
            return " - Imena su jednaka";
        }

    }
    
   
  $imena = imena();

  echo "Duze ime je $imena";

}




?>