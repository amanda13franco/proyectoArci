<?php include('../bisnes_logic/conexion.php'); ?>
<?php include('../bisnes_logic/code_category_room.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category room</title>
</head>
<body>
    <form method="post" action="category_room.php">
        <label>Nombre</label>
        <input type="text" name="name" required>
        <button type="submit" name="save">Guardar</button>
    </form>
<a href="../index.html">Regresar</a>
</body>
</html>