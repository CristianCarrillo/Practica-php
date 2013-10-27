<!DOCTYPE html>
<html>
<head></head>
<body>
<?php

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		include ("mysql.php");
		$query="SELECT * FROM contactos where id='".$id."'";
		$result = mysql_query($query);


			if ($row = mysql_fetch_array($result))
			{ 
  				 echo "<p>Nombre: ".$row['nombre']."</p><p>Telefono: ".$row['telefono']."</p><p>Celular: ".$row['celular']."</p><p>Codigo: ".$row['codigo']."</p>";
       			}
	 }echo "<a href=\"boton.php\">Volver</a>";
?>

</body>
</html>