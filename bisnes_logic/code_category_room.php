<?php

class CodeCategoryBD{
    function save(){
        return 'jaja';
    }
}
    //Method save category room
    //required only name
    if(isset($_POST["save"]))
    {
        $name= $_POST['name'];                  
        $sql = "INSERT INTO category_room(name,tm_add,tm_update) VALUES ('{$name}','now()','now()')";
        echo pg_query( $conexion, $sql);
        $ccbd=new CodeCategoryBD();
        echo $ccbd->save();
    }

    $query = "SELECT id,name FROM  category_room";
    $resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
    $numReg = pg_num_rows($resultado);

    if($numReg>0){
        echo "<table align='center'>
        <tr>
        <th>ID</th>
        <th>Nombre</th>
        </tr>";
        while ($fila=pg_fetch_array($resultado)) {
        echo "<tr><td>".$fila['id']."</td>";
        echo "<td>".$fila['name']."</td></tr>";
        }
                        echo "</table>";
    }else
                        echo "No hay Registros";
    
?>