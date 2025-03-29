<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>28</title>
</head>
<body>
    <center>
        <header>
            <h1><mark>MAYOR DE EDAD O MENOR DE EDAD</mark></h1>
</header>
<main>
    <section>
        <form action="" method="POST">
        <label for ="numero">INGRESA EL NUMERO:</label>
    <input type="number" id="numero" name="numero"><br><br>
    <button type="submit"> ENVIAR </button><br>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $numero=$_POST['numero'];
    if($numero >= 18){
        $mensaje="<br>SU EDAD ES:<br>" . $numero . "<br>ES MAYOR DE EDAD";
   
    }else if($numero < 18 ){
        $mensaje="<br>SU EDAD ES:<br>" . $numero . "<br>ES MENOR DE EDAD";
    }else{
        $mensaje="<br>$numero INGRESA NUMERO VALIDO<br>";
    }
echo $mensaje;
}
?>
<br>
<a href="EJ29.php"> SIGUIENTE PRACTICA</a>
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
El usuario ingresa su edad en el campo de texto correspondiente, posteriormente, cuando el usuario 
hace clic en el botón "ENVIAR", el formulario se envía al servidor mediante el método POST, en el 
servidor, se ejecuta el código PHP que procesa los datos enviados por el formulario, mientras que 
el código PHP determina si la edad ingresada es mayor o menor de 18 años, si la edad es mayor o 
igual a 18 años, el código PHP muestra un mensaje indicando que el usuario es mayor de edad, 
si la edad es menor de 18 años, muestra un mensaje indicando que el usuario es menor de edad.*/?>