<?php
    $conexion = @mysql_connect("localhost", "root", "");       
    mysql_select_db("metro_disponibilidad", $conexion);
    mysql_set_charset('utf8');
?>
