<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio11</title>
</head>
<body>
   <div>
   <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Primer numero</label>
            <input type="number" class="form-control" name="numero1" placeholder="Dijite un numero">
        </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Segundo numero</label>
        <input type="number" class="form-control" name="numero2" placeholder="Dijite un numero">
    </div>
    <div class="mb-3">
        <input name="calcular" type="submit" value="Calcular">
    </div>
    <div>
    <?php
     $num1=$_GET["numero1"];
     $num2=$_GET["numero2"];

     $suma= $num1+$num2;
     $resta= $num1-$num2;
     $multiplicacion= $num1*$num2;
     $divicion= $num1/$num2;

     echo "la suma de los dos numeros es: \n".$suma ."<br>"; 
    echo "la resta de los numeros es: \n".$resta ."<br>";
    echo "la multiplicacion de los numeros es:\n".$multiplicacion ."<br>";
    echo "la divicion de los numeros es:\n" .$divicion ."<br>";
    ?>
    </div>
    </form>
   </div>
</body>
</html>