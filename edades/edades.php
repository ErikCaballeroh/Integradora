<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertor edad</title>
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

<form class="formulario" action="edades.php" method="post">
    <div class="mb-3">
        <label class="form-label">Introduzca su fecha de nacimiento:</label><br>
        <input class="form-control" type="date" name="nacimiento" id="">
    </div>
    <input type="submit" value="Calcular" class="btn btn-primary">


<?php 



if($_POST){


$nacimiento = date_create($_POST['nacimiento']);
$ahora = date_create(date("Y-m-d"));
$diff = date_diff($nacimiento, $ahora);

// Datos del arreglo date_diff
// echo "<pre>";
// print_r($diff);
// echo "</pre>";

echo "<br><br>";
$horas = ($diff->days * 24);
echo "Horas que pasaron: $horas";
echo "<br>";

echo "Dias que pasaron ";
print_r($diff->days);
echo "<br>";

$semanas = floor($diff->days / 7);
echo "Semanas que pasaron: $semanas";
echo "<br>";

$meses = ($diff->y * 24) + $diff->m;
echo "Meses que pasaron: $meses";
echo "<br>";

echo "Años que pasaron: ";
print_r($diff->y);
echo "<br>";



}

?>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>