<!DOCTYPE html>
<html>
<head></head>
<body>
<?php


$id = $_POST["id"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];
$codigo = $_POST["codigo"];
include ("mysql.php");

$insertar="UPDATE contactos SET nombre='$nombre',telefono='$telefono',celular='$celular',codigo='$codigo' where id='$id'";
mysql_query($insertar,$link)or die (mysql_error());
echo "Guardado con EXITO!\n";	
echo "<a href=\"boton.php\">Volver</a>";



?>
</body>
</html>