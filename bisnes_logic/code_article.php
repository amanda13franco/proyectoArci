<?php
$articulo="";
$potencia="";
$categoria=0;
    $query = 'SELECT article.id as "idar",article.name as "nombre",article.power as "poder",category_article.name as "catego" FROM  article inner join 
    category_article on article.id_category_article=category_article.id';
    $resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
    $numReg = pg_num_rows($resultado);

    if($numReg>0){
        echo "<table align='center'>
        <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Potencia</th>
        <th>Categoria</th></tr>";
        while ($fila=pg_fetch_array($resultado)) {
        echo "<tr><td>".$fila['idar']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['poder']."</td>";
        echo "<td>".$fila['catego']."</td>";
        echo "<td><a href=../pages/article.php?sele=".$fila['idar']." > Seleccionar</a></td></tr>";
        }
                        echo "</table>";
    }else
                        echo "No hay Registros";

    //Ejemplo de un INSERT es lo mismo para UPDATE O DELETE                    
   // $sql = "INSERT INTO article VALUES (9,'hola',23,'now()','now()',1)";
    // Ejecutamos la consulta (se devolverá true o false):
   // return pg_query( $conexion, $sql );


/**Metodo guardar */
if(isset($_POST['guardar']))
    {
        $articulo=$_POST['articulo'];
        $potencia=$_POST['potencia'];
        $categoria=$_POST['categoria'];
        //pg_query("INSERT INTO article VALUES (10,'holaaa','2 w','now()','now()',1)");
        pg_query("INSERT INTO article VALUES (11,'{$articulo}','{$potencia}','now()','now()',{$categoria})");
        header('location:../pages/article.php');
    }
//metodo de seleccionar
    if(isset($_GET['sele'])){
        $idar=$_GET['sele'];
        $seleccionar=true;
        $record=pg_query($conexion,`SELECT article.id as "idar",article.name as "nombre",article.power as "poder",category_article.name as "catego" FROM  article inner join 
        category_article on article.id_category_article=category_article.id where article.id=1`);
    
        if(@count($record)==1){
            $n=pg_fetch_array($record);
            $articulo=$n['nombre'];
            $potencia=$n['poder'];
            $categoria=$n['catego'];
        }
    }

    ?>