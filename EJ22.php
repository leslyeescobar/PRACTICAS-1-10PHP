<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22</title>
</head>
<body>
    <center>
        <header>
    <h1><mark>DETERMINAR SI ES VOCAL</mark></h1>
</header>
<main>
    <section>
    <form action="" method="POST">
    <label for ="letra">LETRA:</label>
    <input type="text" id="letra" name="letra" maxlength=""><br><br>
    <button type="submit"> ENVIAR </button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
   $char= $_POST['letra'];
if($char == 'a'|| $char == 'A'){
    $resultado='ES VOCAL';
}else if($char == 'e'|| $char == 'E'){
        $resultado='ES VOCAL';
}else if($char == 'i'|| $char == 'I'){
    $resultado='ES VOCAL';
 } else if($char == 'o'|| $char == 'O'){
        $resultado='ES VOCAL';
 }else if($char == 'u'|| $char == 'U'){
            $resultado='ES VOCAL';
 }else{
    $resultado ='NO ES VOCAL';
 }echo"<br>LA LETRA INGRESADA $resultado <br>"; 
 } ?>
 <br>  
<a href="EJ23.php"> SIGUIENTE PRACTICA</a>
</section>
</main>
<footer>
    <p>LESLYE MARGARITA ESCOBAR MORADO</p>
</footer>
</center>
</body>
</html>
<?php
/*
MI OPINION DE ESTE CODIGO ELABORADO:
El usuario ingresa una letra en el campo de texto correspondiente, 
posteriormente, cuando el usuario hace clic en el botón "ENVIAR", el formulario
se envía al servidor mediante el método POST, en el servidor, se ejecuta el código PHP 
que procesa los datos enviados por el formulario, mientras que el código PHP compara 
la letra ingresada por el usuario con las vocales (a, e, i, o, u) en mayúsculas y minúsculas, 
y determina si es vocal o no, finalmente, el código PHP muestra el resultado en la pantalla, 
indicando si la letra ingresada es vocal o no.*/?>
