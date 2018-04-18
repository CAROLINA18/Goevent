<html> 
<body> 
  
<?php 
$link=mysql_connect("localhost", "root");
mysql_select_db("smile",$link) OR DIE ("Error: No es posible establecer la conexión");
$result = mysql_query("SELECT * FROM evento", $link); 
echo "<table border = '1'> \n"; 
$registro = mysql_num_rows($result);
if ($registro>0){
for($i=0 ; $i<= $registro; $i++){ 
$fila = mysql_fetch_array($result); 
echo '<center>';
echo $fila['nombre'];
echo '</center>';
echo '<br>';
}}
echo "</table> \n"; 
?> 
  
</body> 
</html> 