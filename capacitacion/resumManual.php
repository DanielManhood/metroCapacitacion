<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>RESUMEN MANUALES</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css">
        <?php
            $total = 0;
            require '../inc/conexion.php';
        ?>
    </head>
    <body>  
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="manuales.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>  
                <br>
                <br>
                <table class="estiloTabla">
                    <tr class="cabeceraTabla">
                        <th>MANUALES</th>
                        <th>NÚMERO DE MANUALES</th>
                    </tr>            
                    <?php
                        $consulta = "SELECT * FROM manuales WHERE tipo='T'";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);
                        $total=$total+$numeroDeRegistros; 
                    ?>
                    <tr>               
                        <td>Total de Manuales Técnicos: </td>
                        <td><?php echo $numeroDeRegistros; ?></td>
                    </tr>
                    <?php
                        $consulta = "SELECT * FROM manuales WHERE tipo='DH'";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);
                        $total=$total+$numeroDeRegistros;
                      ?>
                    
                    <tr>               
                        <td>Total de Manuales Desarrollo Humanos: </td>
                        <td><?php echo $numeroDeRegistros; ?></td>
                    </tr>
                    <?php
                        $consulta = "SELECT * FROM manuales WHERE tipo='I'";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);
                        $total=$total+$numeroDeRegistros;
                     ?>
                     <tr>               
                        <td>Total de Manuales Informáticos: </td>
                        <td><?php echo $numeroDeRegistros; ?></td>
                    </tr>
                    <tr>               
                        <th>Total: </th>
                        <th><?php echo $total; ?></th>
                    </tr>
                    
                </table>
            </div>
        </div>
       </body>
</html>