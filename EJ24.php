<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24</title>
</head>
<body>
<center>
        <header>
    <h1><mark> ES PAR O IMPAR</mark></h1>
</header>
<main>
    <section>
    <form action="" method="POST">
    <label for ="numero">INGRESA EL NUMERO:</label>
    <input type="number" id="numero" name="numero"><br><br>
    <button type="submit"> ENVIAR </button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $numero= $_POST['numero'];
    if($numero % 2 == 0){
        $mensaje="<br>EL NUMERO<br>" . $numero. "<br>ES PAR";
    }else{
        $mensaje="<br>EL NUMERO<br>" . $numero. "<br>ES IMPAR";
    }
    echo"<br>$mensaje<br>";
}
?>
<br>  
<a href="EJ25.php"> SIGUIENTE PRACTICA</a>
</main>
</section>
<footer>
<p>LESLYE MARGARITA ESCOBAR MORADO</p>
</footer>
</center>
</body>
</html>
<?php
/*
MI OPINION DE ESTE CODIGO ELABORADO:
El usuario ingresa un número en el campo de texto correspondiente, posteriormente, cuando 
el usuario hace clic en el botón "ENVIAR", el formulario se envía al servidor mediante el 
método POST, en el servidor, se ejecuta el código PHP que procesa los datos enviados por el 
formulario, mientras que el código PHP determina si el número ingresado es par o impar utilizando 
el operador módulo (%), si el resto de la división del número entre 2 es 0, el código PHP muestra 
un mensaje indicando que el número es par. De lo contrario, muestra un mensaje indicando que el 
número es impar.*/?>