<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio03</title>
</head>
<body>

<style>
        body {
            display: grid;
            height: 100vh;
            grid-template-columns: 1fr;
            justify-items: center;
            align-items: start;
            background-color: #ffffff;
            opacity: 1;
            background-image:  linear-gradient(#eaeaea 1.3px, transparent 1.3px), linear-gradient(to right, #eaeaea 1.3px, #ffffff 1.3px);
            background-size: 26px 26px;
        }

        .formulario {
            width: 30%;
            border: 1px solid #ccc;
            padding: 25px;
            border-radius: 10px;
            margin-top: 20vh;
            background: #fff;
        }
</style>

<form action="" class="formulario">
<?php 

echo "<font face=Arial size=3>";
echo "<h3>Funciones de cadenas</h3>";
echo "<strong>La cadena original es:</strong> uso de funciones cadenas en php";
$texto = "uso de funciones cadenas en php";
echo "<br><br>";

// Convertiendo a maúsculas
echo "<strong>Convertir cadena a MAYUSCULAS: </strong>".strtoupper($texto);
echo "<br>";

// Convertir primera letra a mayúscula
echo "<strong>Convierte la primer letra de la cadena en Mayuscula: </strong>";
echo ucfirst($texto)."<br>";

// Convertir primer letra de cada palabra en mayúscula
echo "<strong>Convertir primer letra de cada palabra en mayúscula: </strong>";
echo ucwords($texto)."<br>";

// Devuelve la longitud de la cadena especificada
echo "<strong>Devuelve la longitud de la cadena: </strong>";
$buscar = "cadenas";
echo strstr($texto, $buscar)."<br>";
echo "</font>";

?>
</form>

</body>
</html>