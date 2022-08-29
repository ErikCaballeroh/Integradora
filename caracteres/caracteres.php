<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertor de caracteres</title>
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
        
        textarea {
            resize: none;
        }
    </style>
    
<form class="formulario" action="caracteres.php" method="post">
    <div class="mb-3">
        <label class="form-label" for="texto">Introduzca el texto</label>
        <textarea class="form-control" name="texto" id="" cols="30" rows="5"></textarea>
    </div>
    <input class="btn btn-primary" type="submit" value="Convertir">


<?php 

if($_POST){

$texto = $_POST['texto'];
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
}

?>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>