<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1 Domaci 15</title>
</head>
<body>

<!--Napisati fju koja za zadata dva imena (globalne promenljive) ispisuje duze ime.-->

<form action="zadatak1.php" method="post">

    <input type="text" name="ime1" placeholder="Unesi ime">
    <input type="text" name="ime2" placeholder="Unesi ime">
    <input type="submit" value="Submit">

</form>
    
</body>
</html>

<?php

 

 if(isset($_POST['ime1']) and isset($_POST['ime2'])){
    $ime1 = $_POST['ime1'];
    $ime2 = $_POST['ime2'];

 function imena(){
     global $ime1, $ime2; 
     if (strlen($ime1) > strlen($ime2)  ) {
         
        echo "Duze je prvo ime <strong>$ime1</strong>";

     }

     elseif (strlen($ime2) > strlen($ime1) ) {
        echo "Duze je drugo ime <strong>$ime2</strong>";
         
     }
     else {
         echo "Imena su jednake duzine";
     }
 }

 imena();

}

 


?>