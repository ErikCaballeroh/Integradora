<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <style>
        * {
            font-family: Arial;
            font-weight: 300;
            text-align: center;
        }
    </style>
    <?php
    function operaciones ($n1,$n2,$operacion)
    {
        $resultado=0;
        if($operacion=="Sumar")$resultado=$n1+$n2;
        else if($operacion=="Restar")$resultado=$n1-$n2;
        else if($operacion=="Multiplicar")$resultado=$n1*$n2;
        return $resultado;
    }
    $n1=$_POST['v1'];
    $n2=$_POST['v2'];
    $operacion=$_POST['operacion'];

    $r=operaciones($n1,$n2,$operacion);
    echo"<br><br>";
    echo"<h2>El resultado de tu operación es: $r </h2>"
    ?>
</body>
</html>             