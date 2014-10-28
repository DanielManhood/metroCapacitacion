<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/movil.css">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/tabla2_1.css">
        <title>RESPUESTA DE CAMBIO</title>
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="altaInstructores.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>    
            </div>
        </div>
        <?php
            if(isset($_POST['instructor']) and !empty($_POST['instructor']) and isset($_POST['formacion']) and !empty($_POST['formacion']) and isset($_GET['expediente']) and !empty($_GET['expediente'])) {
                require '../inc/conexion.php';
                $instructor = $_POST['instructor'];
                $formacion = $_POST['formacion'];
                $expediente = $_GET['expediente'];
                $cambiarStatus = "UPDATE general SET instructor=$instructor, formacion=$formacion WHERE expediente=$expediente;";
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
    </body>
</html>
