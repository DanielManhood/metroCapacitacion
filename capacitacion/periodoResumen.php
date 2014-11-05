<html>
    <head>
        <?php 
            if(isset($_POST['selector'])) {
                $selector = $_POST['selector'];
            } else {
                $selector = date("Y");
            }
            require '../inc/conexion.php';
            require 'claseEmpleado.php';
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>PERIODO/RESUMEN</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css">
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="capacitacion.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>                                        
                <br>
                <br>
                <form name="annio" id="annio" action="periodoResumen.php" method="post"> ELIJA UN PERIODO
                    <select name="selector" id="selector">
                        <option value=""></option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                    </select>
                    <button type="submit">Consultar</button>
                </form>  
                <br>
                <br>
                <?php
                    $consultaAnnio = "SELECT * FROM cursos WHERE YEAR( ini_curso ) =$selector ORDER BY ini_curso, fin_curso, nom_curso;";
                    $consultaRealizada=  mysql_query($consultaAnnio);
                    $prueba= mysql_num_rows($consultaRealizada);
                    if($prueba != 0){
                        $info = new periodoResumen();
                        $info->imprimir();
                        $info->obtenerDatos($consultaRealizada);
                    } else {
                        echo "<div class='titulo'>REGISTROS NO DISPONIBLES</div>";
                    }
                ?>
                
            </div>
        </div>
     </body>
</html>