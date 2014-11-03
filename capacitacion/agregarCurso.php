<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css">
        <title>AGREGAR NUEVO CURSO</title>
    </head>
    <body>
        <?php
            require '../inc/conexion.php';            
        ?>
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
                <form id="subir" name="subir" method="post" action="agregarCurso.php">
                    Ingrese el nombre del nuevo curso: <br>
                    <textarea name="curso" id="curso"></textarea><br>
                    <button type="submit">Aceptar</button>
                </form>
                <br>
                <br>
                <?php
                    if(isset($_POST['curso']) and !empty($_POST['curso'])){
                        $cursoNuevo = strtr(strtoupper(mysql_real_escape_string($_POST['curso'])),  "áéíóú", "ÁÉÍÓÚ");                        
                        $consulta = "SELECT * FROM nombrecursos WHERE nomCurso='$cursoNuevo';";
                        $hacerConsulta = mysql_query($consulta);                            
                        $numReg = mysql_num_rows($hacerConsulta);
                        if($numReg == 0) {
                            $update = "INSERT INTO nombrecursos(nomCurso) VALUES ('$cursoNuevo');";
                            $query = mysql_query($update);
                            echo $update;
                            if($query){
                                echo "PROCESO CORRECTO";
                            } else {
                                echo "PROCESO FALLIDO";
                            }
                        } else {
                            echo "EL CURSO YA EXISTE";
                        }                        
                    }
                ?>
            </div>
        </div>
    </body>
</html>
