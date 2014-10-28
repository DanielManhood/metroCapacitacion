<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ALTA DE INSTRUCTORES</title>
        <link rel="stylesheet" type="text/css" href="../css/movil.css">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/tabla2_1.css">
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="alta.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>                
            </div>
            <form id="busqInstructores" name="busqInstructores" action="altaInstructores.php" method="post">
                Expediente: <input type="text" id="BI" name="BI"  placeholder="Teclee un expediente"><br>
                <button type="submit">Modificar</button>
            </form>
            <?php
                require '../inc/conexion.php';
                if(isset($_POST['BI']) and !empty($_POST['BI'])) {
                    $BI = mysql_real_escape_string($_POST['BI']);
                    if(is_numeric($BI)) {
                        $consultaInstructores = "SELECT * FROM general WHERE expediente=$BI;";
                        $hacerConsultaInstructores = mysql_query($consultaInstructores);
                        $registros = mysql_num_rows($hacerConsultaInstructores);
                        if($registros != 0) {
                            $expediente = mysql_result($hacerConsultaInstructores, 0, "expediente");
                            $nombre = mysql_result($hacerConsultaInstructores, 0, "nombre");
                            echo "<br><br>";
                            echo "<form id='busqInstructores' name='busqInstructores' action='altaExitosa.php?expediente=$expediente' method='post' style='background-color: #fff; color: #000'>
                                    <p style='background-color: orange; color: #fff; border-top-left-radius: 10px; border-top-right-radius: 10px'>Cambiar status de instructor a $nombre con número de expediente: $expediente</p>
                                     <p>¿Asignar como instructor?</p>   
                                        <input type='radio' name='instructor' value='TRUE'> SI                                     
                                        <input type='radio' name='instructor' value='FALSE'> NO                                     
                                     <p>¿Tomó el curso de formación de instructores?</p>   
                                        <input type='radio' name='formacion' value='TRUE'> SI                                     
                                        <input type='radio' name='formacion' value='FALSE'> NO
                                     <p><button type='submit'>Modificar</button></p>
                                  </form>";
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
