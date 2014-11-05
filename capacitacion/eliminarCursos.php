<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ELIMINACIÓN DE CURSOS</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css"> 
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="busquedaEliminacionCursos.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>                                       
                </ul>
                <br><br>
                <?php
                    require '../inc/conexion.php';
                    if(isset($_GET['id']) && !empty($_GET['id'])){                        
                        $id = $_GET['id'];
                        $consultaEliminacion = "DELETE FROM metro_disponibilidad.cursos WHERE cursos.id=$id;";                        
                        $hacerConsultaEliminacion = mysql_query($consultaEliminacion) or die();                        
                    }                    
                    if(isset($_GET['expediente']) && !empty($$_GET['expediente']) && is_numeric($$_GET['expediente'])){
                        echo "<div class='titulo'>ERROR EN LA PÁGINA</div>";  
                    } else {
                        $expediente = $_GET['expediente'];                                                                
                        $consultaEmpleado="SELECT expediente, nombre, coordinacion FROM general WHERE expediente = $expediente";
                        $realizarConsultaEmpleado = mysql_query($consultaEmpleado);
                    
                        $nombre = mysql_result($realizarConsultaEmpleado, 0, "nombre");
                        $coordinacion = mysql_result($realizarConsultaEmpleado, 0, "coordinacion");                                        
                                
                        echo "<table class='estiloTabla' style='width: 100%'>
                            <tr class='cabeceraTabla'>
                                <th colspan='2'>DATOS GENERALES</th>
                            </tr>
                            <tr>
                                <th>EXPEDIENTE: </th>
                                <td>$expediente</td>                        
                            </tr>
                            <tr>
                                <th>NOMBRE: </th>
                                <td>$nombre</td>                        
                            </tr>
                            <tr>
                                <th>COORDINACIÓN: </th>
                                <td>$coordinacion</td>                        
                            </tr>
                        </table>
                        <br>
                        <br>
                        <br>";
                        
                        $consultaCursos = "SELECT * FROM cursos WHERE expediente=$expediente ORDER BY ini_curso;";
                            $hacerConsultaCursos = mysql_query($consultaCursos);
                            $numCursos = mysql_num_rows($hacerConsultaCursos);
                        if($numCursos != 0) {                                                    
                            echo "<table class='estiloTabla' style='width: 100%'>
                                    <tr class='cabeceraTabla'>
                                        <th>NOMBRE DEL CURSO</th>
                                        <th>INICIO DEL CURSO</th>
                                        <th>FIN DEL CURSO</th>
                                        <th>ELIMINAR</th>
                                    </tr>";                                                                        
                            for($i = 0; $i < $numCursos; $i++) {
                                $id = mysql_result($hacerConsultaCursos, $i, "id");
                                $nom_curso = mysql_result($hacerConsultaCursos, $i, "nom_curso");
                                $nombreCurso = "SELECT * FROM nombrecursos WHERE id=$nom_curso;";
                                $hacerNombreCurso = mysql_query($nombreCurso);
                                $consulta = mysql_result($hacerNombreCurso, 0, "nomCurso");
                                $ini_curso = mysql_result($hacerConsultaCursos, $i, "ini_curso");
                                $fin_curso = mysql_result($hacerConsultaCursos, $i, "fin_curso");                            
                            
                                echo "<tr>
                                        <td>$consulta</td>
                                        <td nowrap>$ini_curso</td>
                                        <td nowrap>$fin_curso</td>
                                        <td><a href='eliminarCursos.php?id=".$id."&expediente=".$expediente."'><img src='../img/eliminar.png' style='width: 50px; height: 50px;'></a></td>
                                    </tr>";
                                }
                            echo "</table>";
                        } else {
                            echo "<div class='titulo'>NO TIENE CURSOS ASIGNADOS</div>";
                        }
                    }
                ?>                
            </div>                        
        </div>
     </body>
</html>