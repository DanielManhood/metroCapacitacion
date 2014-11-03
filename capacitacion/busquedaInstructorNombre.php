<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>BUSQUEDA POR NOMBRE</title>
        <link rel="stylesheet" type="text/css" href="../css/movil.css">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/tabla2_1.css">        
    </head>
    <body>        
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="altaInstructoresOpcion.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>    
            </div>
            <form name="nombre" id="nombre" method="get" action="busquedaInstructorNombre.php">                
                <p align="justify">Introduzca el nombre que desea buscar, empezando por apellido. Si no recuerda el nombre completo, el sistema
                mostrará una lista con posibles coincidencias.</p>
                Nombre: <input type="text" name="busNombre" id="busNombre" placeholder="Introducir nombre">
                <br><button type="submit">Buscar</button>
            </form>            
            <?php
                if(isset($_GET['busNombre']) and !empty($_GET['busNombre'])) {
                    include '../inc/conexion.php';
                    $chequeo = mysql_real_escape_string(strtr(strtoupper($_GET['busNombre']), "áéíóú", "ÁÉÍÓÚ"));                
                    $consultaNombre = "SELECT expediente, nombre FROM general WHERE nombre LIKE '%$chequeo%' ORDER BY nombre";
                    $hacerConsultaNombre = mysql_query($consultaNombre);
                    $resultados = mysql_num_rows($hacerConsultaNombre);
                    $archivoActual = basename($_SERVER['PHP_SELF']);
                    if($resultados != 0) {
                        echo "<br>
                              <br>
                              <table class='estiloTabla' id='texto'>
                                <tr class='cabeceraTabla'>
                                    <th colspan='4'>RESULTADOS: $resultados</th>
                                </tr>
                                <tr class='cabeceraTabla'>
                                    <th>#</th>
                                    <th>Expediente</th>
                                    <th>Nombre</th>
                                    <th>Enlace</th>
                                </tr>";                               
                        for($i = 0; $i < $resultados; $i++) {
                            $numero = $i + 1;
                            $expediente = mysql_result($hacerConsultaNombre, $i, "expediente");
                            $nombre = mysql_result($hacerConsultaNombre, $i, "nombre");
                            
                            echo "<tr>
                                    <td>$numero</td>
                                    <td>$expediente</td>
                                    <td>$nombre</td>
                                    <td><a href='altaInstructores.php?BI=$expediente&pag=$archivoActual'>Ir al enlace</a></td>
                                  </tr>";
                        }
                        echo "</table>";                                                
                    } else {
                        echo "<br>
                            <br>
                            <div class='titulo'>NO SE HAN ENCONTRADO RESULTADOS</div>";
                    }                        
                }                
            ?>            
        </div>        
    </body>   
</html>