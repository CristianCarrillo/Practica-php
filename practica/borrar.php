<!DOCTYPE html>
<html>
<head></head>
<body>
<?php

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		include ("mysql.php");
		$query="Delete FROM contactos where id='".$id."'";
		mysql_query($query,$link)or die (mysql_error());
}

		header("location:boton.php");


?>
</body>
</html>