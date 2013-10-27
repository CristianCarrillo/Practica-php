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
?>				<form action="update.php" method="post">
  				<p>Nombre <input type="text" name="nombre" value="<?php echo $row['nombre'];?>"required/></p>
				<p>Telefono <input type="text" name="telefono" value="<?php echo $row['telefono'];?>"required/></p>
				<p>Celuar <input type="text" name="celular" value="<?php echo $row['celular'];?>"required/></p>
				<p>Codigo <input type="text" name="codigo" value="<?php echo $row['codigo'];?>"required/></p>
				<input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
				<input type="submit" value="guardar"/>
				<?php echo "<a href=\"boton.php\">Volver</a>";?>
	    </form>
<?php
       			}
	 }

?>


</body>
</html>