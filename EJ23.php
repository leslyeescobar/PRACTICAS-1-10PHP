<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23</title>
</head>
<body>
<center>
        <header>
    <h1><mark> MULTIPLO DE 3 Y 5</mark></h1>
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
    $numer= $_POST['numero'];

    if($numer % 3 == 0 && $numer % 5 == 0){
        $mensaje="<br>EL NUMERO<br>" . $numer . "<br>ES MULTIPLO DE 3 Y 5";
    }else{
        $mensaje="<br>EL NUMERO<br>" . $numer . "<br>NO ES MULTIPLO DE 3 Y 5";
    }
echo $mensaje;
    }
?>
 <br>  
 <a href="EJ24.php"> SIGUIENTE PRACTICA</a>
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
Para utilizar este código, el usuario ingresa un número en el campo de texto correspondiente, 
posteriormente, cuando el usuario hace clic en el botón "ENVIAR", el formulario se envía al 
servidor mediante el método POST, en el servidor, se ejecuta el código PHP que procesa los 
datos enviados por el formulario, mientras que el código PHP determina si el número ingresado 
es múltiplo de 3 y 5 utilizando el operador módulo (%), si el número es múltiplo de 3 y 5, 
el código PHP muestra un mensaje indicando que el número es múltiplo de 3 y 5, de lo contrario, 
muestra un mensaje indicando que el número no es múltiplo de 3 y 5, el código está bien 
estructurado y es fácil de entender.*/?>