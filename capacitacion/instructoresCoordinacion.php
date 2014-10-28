<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>INSTRUCTORES POR COORDINACIÓN</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/tablaAdaptable.css" rel="stylesheet" type="text/css"> 
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="coordinacion2.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>                            
            <?php                                      
                if (isset($_GET['coordinacion'])) {
                    $coordinacion = $_GET['coordinacion'];
                } else {
                    $coordinacion="";
                    echo "<table class='tabla'>
                            <tr><td>ERROR EN LA PÁGINA</td></tr>
                        </table>";
                }         
                require '../inc/conexion.php';            
                require 'claseEmpleado.php';
                $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion='$coordinacion';";
                $hacerConsulta = mysql_query($consulta);
                $numeroDeRegistros = mysql_num_rows($hacerConsulta);
        
                if($numeroDeRegistros != 0) {
                    echo "</div>
                        <div class='titulo'>$coordinacion<br>Total: $numeroDeRegistros</div>
                        <br>
                        <br>";                        
                    echo "<table class='tabla'>";
                    echo "<thead>
                            <th>Expediente</th>
                            <th>Nombre</th>
                            <th>Puesto</th>
                            <th>Adscripción</th>
                            <th>Ubicación</th>
                            <th>Coordinación</th>
                            <th>Plaza</th>
                            <th>Siden</th>
                            <th>Calidad</th>
                            <th>Area</th>
                            <th>Horario</th>
                            <th>Descanso</th>
                            <th>Estudios</th>
                            <th>¿Concluidos?</th>
                            <th>Extensión</th>
                            <th>Correo</th>
                            <th>¿Instructor?</th>
                            <th>¿Curso de formación?</th>
                            <th>Cursos que imparte</th>
                        </thead>";
                    $empleadoActual = new empleado();                        
                    echo "<tbody>";
                    for ($i = 0; $i < $numeroDeRegistros; $i++) {
                        $empleadoActual->asignar($hacerConsulta, $i);
                        $empleadoActual->imprimirEmpleado();
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {                    
                    echo "<br><br>
                        <div class='titulo'>NO HAY REGISTROS DISPONIBLES</div>                        
                        </div>";
                }
            ?>                   
        </div>
    </body>
</html>