<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3</title>
</head>
<body>

<?php
   
   #Data su 3 slucajna broja (1-10). Napraviti html tabelu 3x2 koja u prvoj koloni ima #broj a u drugoj njegov kvadrat.
   
   $polje1 = mt_rand(1,10);
   $polje1kv = $polje1 ** 2;
   $polje2 = mt_rand(1,10);
   $polje2kv = $polje2 ** 2;
   $polje3 = mt_rand(1,10);
   $polje3kv = $polje3 **2;

   
  ?>

       <table border='1px'>
            <tr>
            <td> <?= $polje1 ?></td>
            <td><?= $polje1kv ?> </td>
            </tr>
            <tr>
            <td><?= $polje2 ?> </td>
            <td><?= $polje2kv ?></td>
            </tr>
            <tr>
            <td><?= $polje3 ?></td>
            <td><?= $polje3kv ?></td>
            </tr>
            
        </table>

   
</body>
</html>