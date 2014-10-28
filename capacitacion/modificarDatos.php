<!DOCTYPE html>     
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>MODIFICACIÓN DE DATOS</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="alta1.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>                                    
                <br>
                <br>
                <form id="busqueda" name="busqueda" action="modificarDatos.php" method="get">                                                                
                    Expediente: <input type="text" id="consulta" name="consulta" placeholder="Teclee el expediente">                      
                    <button type="submit">Enviar</button>                   
                </form>             
                <br>
                <br>
                <?php
                    if(isset($_GET['consulta']) AND !empty($_GET['consulta'])) {
                        $limpia = mysql_real_escape_string($_GET['consulta']);
                        if(is_numeric($limpia)){
                            $expediente = $limpia;
                            require '../inc/conexion.php';
                            $consulta = "SELECT nombre, puesto, adscripcion, ubicacion, coordinacion, plaza, siden,
                                calidad, area, horario, descanso, grado, concluido, extension, correo FROM general
                                WHERE expediente=$expediente;";
                            $hacerConsulta= mysql_query($consulta);
                            $total = mysql_num_rows($hacerConsulta);
                            if($total != 0) {
                                $nombre = mysql_result($hacerConsulta, 0, "nombre");
                                $puesto = mysql_result($hacerConsulta, 0, "puesto");
                                $adscripcion = mysql_result($hacerConsulta, 0, "adscripcion");
                                $ubicacion = mysql_result($hacerConsulta, 0, "ubicacion");
                                $coordinacion = mysql_result($hacerConsulta, 0, "coordinacion");
                                $plaza = mysql_result($hacerConsulta, 0, "plaza");
                                $siden = mysql_result($hacerConsulta, 0, "siden");
                                $calidad = mysql_result($hacerConsulta, 0, "calidad");
                                $area = mysql_result($hacerConsulta, 0, "area");
                                $horario = mysql_result($hacerConsulta, 0, "horario");
                                $descanso = mysql_result($hacerConsulta, 0, "descanso");
                                $grado = mysql_result($hacerConsulta, 0, "grado");
                                $concluido = mysql_result($hacerConsulta, 0, "concluido");                                                                
                                if($concluido == TRUE) {
                                    $concluido = "CONCLUIDOS";
                                } else {
                                    $concluido = "NO CONCLUIDOS";
                                }
                                $extension = mysql_result($hacerConsulta, 0, "extension");
                                $correo = mysql_result($hacerConsulta, 0, "correo");
                                echo "<table class='estiloTabla' style='width: 100%;'>
                                        <tr class='cabeceraTabla'>
                                            <th colspan='3'>DATOS PERSONALES</th>
                                        </tr>
                                        <tr>
                                            <th>Nombre</th>
                                            <td>$nombre</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=1'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Puesto</th>
                                            <td>$puesto</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=2'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Adscripción</th>
                                            <td>$adscripcion</td>
                                             <td><a href='modificarDatos2.php?expediente=$expediente&op=3'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Ubicación</th>
                                            <td>$ubicacion</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=4'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Cooordinación</th>
                                            <td>$coordinacion</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=5'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Plaza</th>
                                            <td>$plaza</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=6'>Modificar</a></td>
                                        </tr>                                     
                                        <tr>
                                            <th>Plaza SIDEN</th>
                                            <td>$siden</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=7'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Calidad</th>
                                            <td>$calidad</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=8'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Área</th>
                                            <td>$area</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=9'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Horario</th>
                                            <td>$horario</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=10'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Descanso</th>
                                            <td>$descanso</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=11'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Último grado de estudios</th>
                                            <td>$grado</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=12'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>¿Concluido?</th>
                                            <td>$concluido</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=13'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Extensión</th>
                                            <td>$extension</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=14'>Modificar</a></td>
                                        </tr>
                                        <tr>
                                            <th>Correo</th>
                                            <td>$correo</td>
                                            <td><a href='modificarDatos2.php?expediente=$expediente&op=15'>Modificar</a></td>
                                        </tr>
                                    </table>";
                            }
                        } else {
                            echo "ERROR AL INGRESAR EXPEDIENTE";                            
                        }
                    }                        
                ?>
            </div>            
        </div>
    </body>
</html>