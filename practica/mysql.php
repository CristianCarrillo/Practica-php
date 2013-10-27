<?php
$link = @mysql_connect("localhost", "root","")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("directorio", $link)
      or die ("Error al conectar a la base de datos.");

?>