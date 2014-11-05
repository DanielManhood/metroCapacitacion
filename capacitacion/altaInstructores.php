<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ALTA DE INSTRUCTORES</title>
        <link rel="stylesheet" type="text/css" href="../css/movil.css">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/tabla2_1.css">
        <link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.7.2.custom.css">
        <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="../js/jquery-1.9.1d.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="../js/jquery.ui.datepicker-es.js"></script>                
        <style>
            .ui-datepicker th {
                color: #000;
            }
        </style>
        <script type="text/javascript">                                    
            jQuery(function($){
                $.datepicker.regional['es'] = {
                    closeText: 'Cerrar',
                    prevText: '&#x3c;Ant',
                    nextText: 'Sig&#x3e;',
                    currentText: 'Hoy',
                    monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
                    'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                    monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
                    'Jul','Ago','Sep','Oct','Nov','Dic'],
                    dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
                    dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
                    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
                    weekHeader: 'Sm',
                    dateFormat: 'yy-mm-dd',
                    firstDay: 1,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: ''};
                    $.datepicker.setDefaults($.datepicker.regional['es']);
                });    

                $(document).ready(function(){
                    $("#datepicker").datepicker({
                        changeMonth: true,
                        changeYear: true
                    });
                    $("#datepicker2").datepicker({
                        changeMonth: true,
                        changeYear: true
                    });
                });                                            
        </script>
    </head>
    <?php        
        require '../inc/conexion.php';                
        if(isset($_POST['curso']) and !empty($_POST['curso']) and isset($_POST['datepicker']) and !empty($_POST['datepicker']) and isset($_POST['datepicker2']) and !empty($_POST['datepicker2']) and isset($_GET['BI']) and !empty($_GET['BI'])) {                        
            $curso = $_POST['curso'];
            $iniCurso = $_POST['datepicker'];
            $finCurso = $_POST['datepicker2'];
            $expediente = $_GET['BI'];
            $cambiarStatus = "INSERT INTO cursosimpartidos (expedienteInstructor, idCurso, iniCurso, finCurso) VALUES ($expediente, $curso, '$iniCurso', '$finCurso');";
            $hacerCambioStatus = mysql_query($cambiarStatus);            
        } elseif (isset ($_GET['id']) and !empty ($_GET['id'])) {
            $id = $_GET['id'];
            $cambiarStatus = "DELETE FROM cursosimpartidos WHERE id=$id;";
            $hacerCambioStatus = mysql_query($cambiarStatus); 
            $expediente = $_GET['BI'];
        } 
        if(isset($_POST['instructor']) and !empty($_POST['instructor']) and isset($_POST['formacion']) and !empty($_POST['formacion']) and isset($_GET['BI']) and !empty($_GET['BI'])) {                
                $instructor = $_POST['instructor'];
                $formacion = $_POST['formacion'];
                $expediente = $_GET['BI'];
                $cambiarStatus = "UPDATE general SET instructor=$instructor, formacion=$formacion WHERE expediente=$expediente;";
                $hacerCambioStatus = mysql_query($cambiarStatus);
        }                
    ?>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href='altaInstructoresOpcion.php' title='Regresar'><img src='../img/baatras.png'></a></li>                            
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>                
            </div>
            <?php                
                if(isset($_GET['BI']) and !empty($_GET['BI'])) {
                    $BI = mysql_real_escape_string($_GET['BI']);
                    if(is_numeric($BI)) {
                        $consultaInstructores = "SELECT * FROM general WHERE expediente=$BI;";
                        $hacerConsultaInstructores = mysql_query($consultaInstructores);
                        $registros = mysql_num_rows($hacerConsultaInstructores);
                        if($registros != 0) {
                            $expediente = mysql_result($hacerConsultaInstructores, 0, "expediente");
                            $nombre = mysql_result($hacerConsultaInstructores, 0, "nombre");
                            $instructor = mysql_result($hacerConsultaInstructores, 0, "instructor");                            
                            if($instructor == 0){
                                $instructor = "<font style='color: #DF0101'><b>NO</b></font>";                                
                                echo "<form id='busqInstructores' name='busqInstructores' action='altaInstructores.php?BI=$expediente' method='post' style='background-color: #fff; color: #000'>
                                    <div style='background-color: orange; color: #fff; border-top-left-radius: 10px; border-top-right-radius: 10px'>Cambiar status de instructor a $nombre con número de expediente: $expediente</div>
                                     <div style='color: #fff; background: #000'>¿Es instructor?: <br>$instructor</div>   
                                     <p>¿Asignar como instructor?</p>   
                                        <input type='radio' name='instructor' value='TRUE'> SI                                     
                                        <input type='radio' name='instructor' value='FALSE'> NO                                     
                                     <p>¿Tomó el curso de formación de instructores?</p>   
                                        <input type='radio' name='formacion' value='TRUE'> SI                                     
                                        <input type='radio' name='formacion' value='FALSE'> NO
                                     <p><button type='submit'>Modificar</button></p>
                                  </form>";
                            } else {
                                $cursosImpartidos = "SELECT * FROM cursosimpartidos WHERE expedienteInstructor=$expediente;";
                                $hacerCursosImpartidos = mysql_query($cursosImpartidos);
                                $numCursosImpartidos = mysql_num_rows($hacerCursosImpartidos);
                                echo "<div class='titulo' style='width: 50%'>CURSOS QUE IMPARTE: $nombre</div><br><br>";
                                if($numCursosImpartidos != 0){
                                    echo "<table class='estiloTabla'>
                                            <tr class='cabeceraTabla'>
                                                <th>Cursos impartidos</th>
                                                <th>Inicio del curso</th>
                                                <th>Fin del curso</th>
                                                <th>Eliminar</th>
                                            </tr>";
                                    for($i = 0; $i < $numCursosImpartidos; $i++){
                                        $id = mysql_result($hacerCursosImpartidos, $i, "id");
                                        $buIdCurso = mysql_result($hacerCursosImpartidos, $i, "idCurso");
                                        $buNombreCurso = "SELECT * FROM nombrecursos WHERE id=$buIdCurso;";
                                        $hacerBuNombreCurso = mysql_query($buNombreCurso);
                                        $nombreCurso = mysql_result($hacerBuNombreCurso, 0, "nomCurso");
                                        $buIniCurso = mysql_result($hacerCursosImpartidos, $i, "iniCurso");
                                        $buFinCurso = mysql_result($hacerCursosImpartidos, $i, "finCurso");
                                        echo "<tr>
                                                <td>$nombreCurso</td>
                                                <td>$buIniCurso</td>
                                                <td>$buFinCurso</td>
                                                <td><a href='altaInstructores.php?id=$id&BI=$BI'><img src='../img/eliminar.png' style='width: 50px; height: 50px;'></a></td>    
                                            </tr>";
                                        
                                    }
                                    echo "</table><br><br>";
                                } else {
                                    echo "<div class='titulo' style='width: 50%'>NO TIENE UN CURSO ASIGNADO</div><br><br>";
                                }                                                                
                                $formacion = mysql_result($hacerConsultaInstructores, 0, "formacion");
                                if($formacion == 0){
                                    $imFormacion = "<font style='color: #DF0101'><b>NO</b></font>";
                                } else {
                                    $imFormacion = "<font style='color: #04B404'><b>SI</b></font>";
                                }
                                $opcionCursos =  "SELECT * FROM nombrecursos;";
                                $hacerOpcionCursos = mysql_query($opcionCursos);
                                $numCursos = mysql_num_rows($hacerOpcionCursos);
                                $instructor = "<font style='color: #04B404'><b>SI</b></font>";
                                echo "<form id='busqInstructores' name='busqInstructores' action='altaInstructores.php?BI=$BI' method='post' style='background-color: #fff; color: #000; width: 50%'>
                                    <div style='background-color: orange; color: #fff; border-top-left-radius: 10px; border-top-right-radius: 10px'>Asignar un nuevo curso a $nombre con número de expediente: $expediente</div>
                                     <div style='color: #fff; background: #000'>¿Es instructor?: $instructor <br> ¿Tomó el curso de formación de instructores?: $imFormacion</div><br>   
                                     Curso que desea asignar: <select name='curso' id='curso'>
                                        <option></option>";
                                for($i = 0; $i < $numCursos; $i++){
                                    $id = mysql_result($hacerOpcionCursos, $i, "id");
                                    $nombre = mysql_result($hacerOpcionCursos, $i, "nomCurso");
                                    echo "<option value='$id'>$nombre</option>";
                                }
                                echo "</select><br><br>";
                                echo "Inicio del curso: <input type='text' name='datepicker' id='datepicker' readonly='readonly' size='12'/> <br><br>";
                                echo "Fin del curso: <input type='text' name='datepicker2' id='datepicker2' readonly='readonly' size='12'/> <br><br>";
                                echo "</select>                              
                                   <button type='submit'>Aceptar</button><br><br> 
                                  </form>";
                            }                                                        
                        } else {
                            echo "<br><br>
                                <div class='titulo' style='width: 50%'>EL REGISTRO NO EXISTE</div>";
                        }                       
                    } else {
                        echo "<br><br>
                            <div class='titulo' style='width: 50%'>ERROR: No se ha tecleado un número</div>";
                    }                    
                }
            ?>
        </div>
    </body>
</html>