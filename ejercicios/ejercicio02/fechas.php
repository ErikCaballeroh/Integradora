<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio02</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
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

echo "<h4>Uso de la función Date</h4>";

// Imprime el dia I de la semana
echo date("I")."<br>";

// Imprime el dia, fecha completa con horas y minutos AM o PM
echo date("I j \of F Y h:i A")."<br>";

// ------------------------------------------------------------

echo "<h4>Uso de la funcion getdate</h4>";

// Regresa el día y la hora actual del sistema
$mydate = getdate(date("U"));
echo "$mydate[weekday], $mydate[month], $mydate[mday], $mydate[year]";

// ------------------------------------------------------------

echo "<h4>Uso de la función time</h4>";
$t = time();

// Fecha sinformato
echo "Sin formato: ".$t."<br>";

// Fecha con formato
echo "Con formato: ";
echo date("Y-m-d", $t);


?>
</form>

</body>
</html>