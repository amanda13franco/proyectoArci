<?php
$user = "postgres";
$password = "123456789";
$dbname = "jajabd";
$port = "5432";
$host = "127.0.0.1";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";

?>