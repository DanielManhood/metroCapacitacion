<!DOCTYPE HTML>
<html>
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CURSOS TOMADOS</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">   
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">    
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css">    
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="Cursos2.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href=".php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href=".php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
                <?php
                    require '../inc/conexion.php';
                    $lista = 0;
                    if(isset($_POST['lista']) and !empty($_POST['lista'])) {
                        $lista = $_POST['lista'];                        
                    } else {
                        $lista = "1";                        
                    }                    
                    $crearSelect = "SELECT * FROM nombrecursos ORDER BY nomCurso;";
                    $hacerSelect = mysql_query($crearSelect);
                    $numeroCursos = mysql_num_rows($hacerSelect);
                    $nomCurso = "";
                    $opcionSeleccionada = "SELECT * FROM nombrecursos WHERE id=$lista;";
                    $hacerOpcionSeleccionada = mysql_query($opcionSeleccionada);
                    $opcion = mysql_result($hacerOpcionSeleccionada, 0, "nomCurso");
                ?>
                <br>
                <br>
                <form name="cursos" id="cursos" action="cursosTomados.php" method="post">ELIJA UN CURSO DISPONIBLE
                    <select name="lista" id="lista">
                        <option></option>
                        <?php
                            for($i = 0; $i < $numeroCursos; $i++) {
                                $id = mysql_result($hacerSelect, $i, "id");
                                $nomCurso = mysql_result($hacerSelect, $i, "nomCurso");
                                echo "<option value='$id'>$nomCurso</option>";
                            }
                        ?>
                    </select>
                    <button type="submit">Aceptar</button>
                </form>
                <?php
                    $crearTabla = "SELECT general.nombre, general.coordinacion, cursos.nom_curso, cursos.ini_curso, cursos.fin_curso FROM cursos, general WHERE general.expediente = cursos.expediente AND cursos.nom_curso ='$lista' ORDER BY cursos.ini_curso, cursos.fin_curso, general.nombre;";
                    $hacerCrear = mysql_query($crearTabla);
                    $numInscritos = mysql_num_rows($hacerCrear);                    
                ?>       
                <br>
                <br>
                <table class="estiloTabla" style="width: 100%">
                    <tr class="cabeceraTabla">
                        <th colspan="3"><?php echo $opcion; ?></th>
                        <th>TOTAL: <?php echo $numInscritos;?></th>
                    </tr>
                    <tr>
                        <th>NOMBRE</th>
                        <th>COORDINACIÓN</th>
                        <th>FECHA DE INICIO</th>
                        <th>FECHA DE TÉRMINO</th>
                    </tr>
                    <?php
                        for($j = 0; $j < $numInscritos; $j++) {
                            $nombre = mysql_result($hacerCrear, $j, "nombre");
                            $coordinacion = mysql_result($hacerCrear, $j, "coordinacion");
                            $fechaInicio = mysql_result($hacerCrear, $j, "ini_curso");
                            $fechaFin = mysql_result($hacerCrear, $j, "fin_curso");
                            echo "<tr>
                                    <td>$nombre</td>
                                    <td>$coordinacion</td>
                                    <td nowrap>$fechaInicio</td>
                                    <td nowrap>$fechaFin</td>
                                </tr>";
                        }
                    ?>
                </table>
            </div>                      
        </div>
     </body>
</html>