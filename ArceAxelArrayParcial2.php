<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parcial 2 Axel Arce</title>
	<style type="text/css">
    body{
      font-family: sans-serif;
      color: #000;
      background: linear-gradient(to right, #4169E1, thistle  ), #fff;
      text-align: center;
      font-size: 30px;
          }
  </style>
</head>
<body>
<?php
$carros = [
    "Vocho" => 32000,
    "Audi A4" => 360000,
    "Lamborghini Urus" => 5000000,
    "Nissan Tsuru" => 55000,
    "Ford Raptor" => 850000
];


echo '<span style="font-family: Brush Script MT; font-size: 70px; color: red;">Carros</span><br>';
foreach ($carros as $modelo => $precio) {
    echo " Modelo del carro:  $modelo " . $precio . "<br>";
}


array_push($carros); 
$carros["Jetta"] = 35000; 
$carros["Frontier"] = 358000;


asort($carros);


echo '<span style="font-family: Brush Script MT; font-size: 70px; color: red;">Carros en orden pr precio</span><br>';
foreach ($carros as $modelo => $precio) {
    echo " Modelo del carro:  $modelo  ".$precio . "<br>";
} 
?>
</body>
</html>