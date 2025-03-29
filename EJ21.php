<!DOCTYPE html> 
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name= "viewport" content="widt=device-width,initial-scale=1.0">
        <title> 21</title>
</head>
<body>
<center>
    <header>
<h1><mark>DEVOLVER EL MAYOR</mark></h1>
</header>
<main>
    <section>
<form action="" method="POST">
    <label for ="numero1">NUMERO 1:</label>
    <input type="number" id="numero1" name="numero1"><br><br>
    <label for ="numero2">NUMERO 2:</label>
    <input type="number" id="numero2" name="numero2"><br><br>
    <label for ="numero3">NUMERO 3:</label>
    <input type="number" id="numero3" name="numero3"><br><br>
    <button type="submit"> ENVIAR </button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $numero1=$_POST['numero1'];
    $numero2=$_POST['numero2'];
    $numero3=$_POST['numero3'];

   if($numero1 > $numero2 && $numero1 > $numero3){
    $mayor=$numero1;
   }else if ($numero2 > $numero1 && $numero2 > $numero3){
    $mayor=$numero2;
   }else{
   $mayor=$numero3;
   }
   echo"<br>EL NUMERO $mayor ES EL MAYOR DE LOS 3 NUMEROS<br>";
}
?>  
<br>  
<a href="EJ22.php"> SIGUIENTE PRACTICA</a>
</section>
</main>
<footer>
    <p>LESLYE MARGARITA ESCOBAR MORADO</p>
</footer>
 </center>
</body>
</html>
<?php
/*MI OPINION DE ESTE CODIGO ELABORADO:
Para utilizarlo el usuario ingresa tres números en los campos de texto correspondientes,
posteriormente cuando el usuario hace clic en el botón "ENVIAR", el formulario se envía 
al servidor mediante el método POST y en el servidor, se ejecuta el código PHP que 
procesa los datos enviados por el formulario mientras que el código PHP compara los 
tres números ingresados por el usuario y determina cuál es el mayor, finalmente, el 
código PHP muestra el resultado en la pantalla, indicando cuál es el número mayor, 
en general, el código está bien estructurado y es fácil de entender.*/?>