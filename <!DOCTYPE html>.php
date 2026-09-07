<!DOCTYPE html>
<html>
<body>

<form method="POST">

<input type="number" name="nota1">
<input type="number" name="nota2">
<input type="number" name="nota3">

<br><br>

<input type="submit" value="Enviar Consulta">

</form>

<?php

if ($_POST) {

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

$promedio = ($nota1 + $nota2 + $nota3) / 3;

echo "Nota 1: $nota1 <br>";
echo "Nota 2: $nota2 <br>";
echo "Nota 3: $nota3 <br>";
echo "Promedio: $promedio";

}

?>

</body>
</html>