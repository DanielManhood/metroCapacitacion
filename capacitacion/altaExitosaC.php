<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/movil.css">
        <link rel="stylesheet" type="text/css" href="../css/tabla2_1.css">
        <title></title> 
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
                <br>
                <br>
                <?php            
                    if(isset($_POST['curso']) and !empty($_POST['curso']) and isset($_POST['datepicker']) and !empty($_POST['datepicker']) and isset($_POST['datepicker2']) and !empty($_POST['datepicker2']) and isset($_GET['expediente']) and !empty($_GET['expediente'])) {
                        require '../inc/conexion.php';
                        $curso = $_POST['curso'];
                        $iniCurso = $_POST['datepicker'];
                        $finCurso = $_POST['datepicker2'];
                        $expediente = $_GET['expediente'];
                        $cambiarStatus = "INSERT INTO cursosimpartidos (expedienteInstructor, idCurso, iniCurso, finCurso) VALUES ($expediente, $curso, '$iniCurso', '$finCurso');";
                        $hacerCambioStatus = mysql_query($cambiarStatus);
                        if($hacerCambioStatus){
                            echo "<div class='titulo' style='width: 50%'>OPERACIÓN EXITOSA
                                </div>";
                        } else {
                            echo "<div class='titulo' style='width: 50%'>OPERACIÓN FALLIDA</div>";
                        }
                    } else {
                        echo "<div class='titulo' style='width: 50%'>CAMBIO NO REALIZADO</div>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>