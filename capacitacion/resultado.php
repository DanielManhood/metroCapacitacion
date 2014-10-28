<html>
    <head>
        <title>EXPEDIENTE INDIVIDUAL</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css">
        <link href="../css/movil.css" rel="stylesheet" type="text/css">        
    </head>
    <body>        
         <div id="content">
            <div id="nav">
                <ul>
                    <?php
                        $dir = $_SERVER['REQUEST_URI'];                        
                        if(isset($dir) and !empty($dir)){
                            if(strstr($dir, "busquedaNombre.php")) {
                                echo "<li><a href='busquedaNombre.php' title='Regresar'><img src='../img/baatras.png'></a></li>";
                            } else if (strstr($dir, "resultado.php")) {
                                echo "<li><a href='busquedaq.php' title='Regresar'><img src='../img/baatras.png'></a></li>";
                            }                                                                               
                        }
                    ?>                    
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
                <br>    
                <br>
                 <?php
                    require '../inc/conexion.php';
                    require 'claseEmpleado.php';
                    if(!isset($_GET['consulta']) || empty($_GET['consulta'])) {
                        echo "<div class='titulo'>NO SE HA INTRODUCIDO NINGÚN EXPEDIENTE</div>";
                    } else {     
                        $sujeto = mysql_real_escape_string($_GET['consulta']);
                        $consulta = "SELECT * FROM general WHERE expediente=\"$sujeto\"; ";                                                                            
                        $cursos = "SELECT * FROM cursos WHERE expediente=\"$sujeto\" ORDER BY ini_curso DESC;";
                        $hacerconsulta= mysql_query($consulta);
                        $hacerCursos = mysql_query($cursos);
                        $comprobacion = mysql_num_rows($hacerconsulta);
                        if($comprobacion != 0) {
                            $personal = new empleadoPersonal();
                            $personal->asignar($hacerconsulta);
                            $personal->imprimir($hacerCursos);
                        } else {
                            echo "<div class='titulo'>REGISTRO NO EXISTENTE</div>";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>
