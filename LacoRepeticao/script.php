<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="phpcss.css">
</head>
<body>
  <center>
<div>
<?php

$numero = $_POST['numero'];
$opcao = $_POST['op']; 

echo "<h1>RESULTADO</h1>";
function calcularTabuadaWhile($numero) {
  $i = 1;
  while ($i <= 10) {
    $resultado = $numero * $i;
    echo "<p>$numero x $i = $resultado <br></p>";
    $i++;
  }
}

function calcularTabuadaFor($numero) {
  for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<p>$numero x $i = $resultado <br></p>";
  }
}

if ($opcao == "while") {
  calcularTabuadaWhile($numero);
} else if ($opcao == "for") {
  calcularTabuadaFor($numero);
} else {
  echo "<p>Opção de cálculo inválida.</p>";
}

?>
</div>
  </center>
</body>
</html>
