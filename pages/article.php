<?php include('../bisnes_logic/conexion.php'); ?>
<?php include('../bisnes_logic/code_article.php'); ?>
<?php
$seleccionar=false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
</head>
<body>
<form method="post" action="article.php">
<label>Nombre de articulo:</label><br>
<input type="text" name="articulo"><br>
<label>Potencia: </label><br>
<input type="text" name="potencia"><br>
<label>Selecciona una categoria: </label><br>
<?php 
$query="SELECT id,name FROM category_article"; 
$r=pg_query($conexion,$query);
$lista1="<select name='categoria'>\n<option selected>Click aqui</option>"; 
while($registro=pg_fetch_row($r)) 
{ 
$lista1.="\n<option value='".$registro[0]."'>".$registro[1]."</option>"; 
} 
$lista1.="\n</select><br><br>"; 
echo $lista1; 
?>
<?php if($seleccionar == true): ?>
<button class="btn" type="submit" name="update">Actualizar</button>&nbsp;&nbsp;
<button class="btn" type="submit" name="eliminar">Eliminar</button><br><br>
<?php else: ?>
<button class="btn" type="submit" name="guardar">Guardar</button><br><br>
<?php endif ?>
    <a href="../index.html">Regresar</a>
</body>
</html>