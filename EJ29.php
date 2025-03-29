<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>29</title>
</head>
<body>
<center>
        <header>
            <h1><mark>DEVOLVER EL DOBLE SI ES POSITIVO, TRIPLE SI ES NEGATIVO</mark></h1>
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
    if($numero > 0){
        $mensaje="<br>EL DOBLE DEL NUMERO<br>" . $numero."<br>ES:<br>" . ($numero * 2);
    }else if($numero < 0 ){
    $mensaje="<br>EL TRIPLE DEL NUMERO<br>" . $numero."<br>ES:<br>" . ($numero * 3);
    }else{
        $mensaje="<br>NUMERO NEUTRO<br>" . $numero."<br>ES:<br>" . ($numero);
    }
    echo "<br>$mensaje<br>";
}
?>
<br>
<a href="EJ30.php"> SIGUIENTE PRACTICA</a>
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
El usuario ingresa un número en el campo de texto correspondiente, posteriormente, cuando el 
usuario hace clic en el botón "ENVIAR", el formulario se envía al servidor mediante el método POST,
en el servidor, se ejecuta el código PHP que procesa los datos enviados por el formulario, mientras 
que el código PHP determina si el número ingresado es positivo, negativo o neutro (0), si el número 
es positivo, el código PHP muestra el doble del número. Si el número es negativo, muestra el triple 
del número. Si el número es neutro (0), muestra el mismo número.*/?>

