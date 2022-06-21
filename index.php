<?php 

require_once __DIR__ . "/class/Custemer.php";
require_once __DIR__ . "/showcase.php";



$giuseppe = new Custemer("Giuseppe", "Verdi", 75);
$giuseppe->setCreditCard('3214321432143214','Giuseppe Verdi',2023, 6, '001');

$giuseppe->setCart($iphone, $frigorifero);

$ugo = new Custemer("Ugo", "De Ughi", 30);
$ugo->setCreditCard('3222232155514321','Ugo De Ughi',2023, 5, '099');

$ugo->setCart($iphone, $frigorifero, $frullatore);

var_dump($giuseppe);
var_dump($ugo);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHOP</title>
</head>
<body>
  
</body>
</html>