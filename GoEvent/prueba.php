<?php 
//Conexión a la base de datos 
$servidor = "localhost"; //Nombre del servidor 
$usuario = "root"; //Nombre de usuario en tu servidor 
$password = " "; //Contraseña del usuario 
$base = "smile"; //Nombre de la BD 
$conexion = mysqli_connect($servidor, $usuario, $password) or die("Error al conectarse al servidor"); 
mysqli_select_db($conexion, $base) or die("Error al conectarse a la base de datos"); 

$buscar = mysqli_query($conexion, "SELECT * FROM evento"); 
if (mysqli_num_rows($buscar) > 0) { 
?> 
<table border = "1" width = "100%"> 
<tr> 
<th>Nombre</th> 
<th>hora</th> 
<th>fecha</th> 
</tr> 
<?php 
while ($datos = mysqli_fetch_array($buscar)){ 
?> 
<tr> 
<td> <?=$datos["nombre"]?> </td> 
<td> <?=$datos["hora"]?> </td> 
<td> <?=$datos["fecha"]?> </td> 
</tr> 
<?php 
} 
mysqli_free_result($buscar); 
?> 
</table> 
<?php 
} else { 
echo "No se encontraron datos en la base de datos"; 
} 
?> 