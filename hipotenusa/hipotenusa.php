<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teorema de pitagoras</title>
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

    <form class="formulario" action="hipotenusa.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="cateto__a">Cateto a</label>
            <input class="form-control" type="text" name="cateto__a">
        </div>
        <div class="mb-3">
        <label class="form-label" for="cateto__b">Cateto b</label>
        <input class="form-control" type="text" name="cateto__b">
        </div>
        <input class="btn btn-primary" type="submit" value="Resultado">
    
    <?php 
    
    if($_POST){
        $cateto__a = "";
        $cateto__a = $_POST['cateto__a'];
        $cateto__b = "";
        $cateto__b = $_POST['cateto__b'];

        $hipotenusa = round(sqrt(pow($cateto__a, 2) + pow($cateto__b, 2)), 2);
        
        echo "<i>= $hipotenusa</i>";
    }

    ?>

    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>