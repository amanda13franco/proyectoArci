<?php

    $query = "SELECT id,name FROM  role";
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