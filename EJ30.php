<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>30</title>
</head>
<body>
<center>
        <header>
            <h1><mark>INGRESAR 4 NOTAS Y OBTENER PROMEDIO DE LAS 3 MEJORES</mark></h1>
</header>
<main>
    <section>
        <form action="" method="POST">
        <label for ="nota1">NUMERO 1:</label>
    <input type="number" id="nota1" name="nota1"><br><br>
    <label for ="nota2">NUMERO 2:</label>
    <input type="number" id="nota2" name="nota2"><br><br>
    <label for ="nota3">NUMERO 3:</label>
    <input type="number" id="nota3" name="nota3"><br><br>
    <label for ="nota4">NUMERO 4:</label>
    <input type="number" id="nota4" name="nota4"><br><br>
    <button type="submit"> ENVIAR </button><br>
</form>
<?php
 if($_SERVER["REQUEST_METHOD"]=='POST'){
    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];
    $nota3=$_POST['nota3'];
    $nota4=$_POST['nota4'];

    $notas= array($nota1, $nota2, $nota3, $nota4);
    rsort($notas);
    $promedio=($notas[0]+$notas[1]+$notas[2])/3;
    echo"<p>EL PROMEDIO DE LAS 3 MEJORES NOTAS ES:<br>" . number_format($promedio, 2) . "</p>";
    if($promedio >= 6){
        echo"<p>APROBADO</p>";
    }else{
        echo"<p>reprobado</p>";
    }
 }
?>
<br>
<a href="EJ21.php"> SIGUIENTE PRACTICA</a>
  </main>
</section> 
<footer>
    <p>LESLYE MARGARITA ESCOBAR MORADO</p>
</footer> 
</body>
</center>
</html>
<?php
/*
MI OPINION DE ESTE CODIGO ELABORADO:
El usuario ingresa cuatro notas en los campos de texto correspondientes, posteriormente, cuando el 
usuario hace clic en el botón "ENVIAR", el formulario se envía al servidor mediante el método POST, 
en el servidor, se ejecuta el código PHP que procesa los datos enviados por el formulario, mientras 
que el código PHP ordena las notas de mayor a menor utilizando la función rsort() y luego calcula 
el promedio de las tres mejores notas, el código PHP muestra el promedio de las tres mejores notas 
con dos decimales utilizando la función number_format() y también indica si el usuario está aprobado 
o reprobado según si el promedio es mayor o igual a 6.*/?>
