<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>INSTRUCTORES DETALLADA</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/tablaAdaptable.css" rel="stylesheet" type="text/css">
        <?php
            require '../inc/conexion.php';
            require 'claseEmpleado.php'
        ?>
    </head>
    <body>
         <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="capa1.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
            </div>
             <?php
                $consulta="SELECT * FROM general WHERE instructor=TRUE;";
                $hacerConsulta=  mysql_query($consulta);
                $numInstructores=  mysql_num_rows($hacerConsulta);     
                echo "<div class='titulo'>TABLA DETALLADA DE INSTRUCTORES DEL SISTEMA DE TRANSPORTE COLECTIVO<br>Total: $numInstructores</div>
                        <br>
                        <br>";
                if($numInstructores != 0) {
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
                    
                    $tablaDetallada= new empleado();                              
                    echo "<tbody>";
                    for($i = 0; $i < $numInstructores; $i++) {                        
                        $tablaDetallada->asignar($hacerConsulta, $i);
                        $tablaDetallada->imprimirEmpleado();
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<table cellpading='2' cellspacing='2' border='2'>
                            <td>NO HAY REGISTROS DISPONIBLES</td>
                        </table>";
                }
                
             ?>
         </div>        
    </body>
</html>
