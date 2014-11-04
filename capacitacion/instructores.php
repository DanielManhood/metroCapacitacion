<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>RESUMEN DE INSTRUCTORES POR COORDINACIÓN</title>
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
                    <li><a href="capa1.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>  
                <br>
                <br>
                <table class="estiloTabla" style="width: 100%">
                    <tr class="cabeceraTabla">
                        <th>TALLER</th>
                        <th>INSTRUCTORES</th>
                    </tr>            
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td >SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN</td>
                        <td><?php echo $numeroDeRegistros;?></td>
                    </tr>
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td>COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA</td>
                        <td><?php echo $numeroDeRegistros;?></td>
                    </tr>            
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);    
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td>COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN</td>
                        <td><?php echo $numeroDeRegistros;?></td>
                    </tr>            
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE REHABILITACIÓN DE TRENES\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);  
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td>COORDINACIÓN DE REHABILITACIÓN DE TRENES</td>
                        <td><?php echo $numeroDeRegistros;?></td>
                    </tr>
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);  
                        $total=$total+$numeroDeRegistros;
                    ?>            
                    <tr>
                        <td>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I</td>
                        <td><?php echo $numeroDeRegistros;?></td>
                    </tr>
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);   
                        $total=$total+$numeroDeRegistros;
                    ?>            
                    <tr>
                        <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA</td>
                        <td><?php echo $numeroDeRegistros;?></td>
                    </tr>            
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN 1917\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);   
                        $total=$total+$numeroDeRegistros;
                    ?>            
                    <tr>
                        <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN 1917</td>
                        <td><?php echo $numeroDeRegistros;?></td>
                    </tr>
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TASQUEÑA\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta); 
                        $total=$total+$numeroDeRegistros;                
                    ?>            
                    <tr>
                        <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TASQUEÑA</td>
                        <td><?php echo $numeroDeRegistros;?></td>
                    </tr>              
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE MANTENIMIENTO TLAHUAC\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);   
                        $total=$total+$numeroDeRegistros;
                    ?>            
                    <tr>
                        <td>COORDINACIÓN DE MANTENIMIENTO TLAHUAC</td>
                        <td><?php echo $numeroDeRegistros;?></td>
                    </tr>             
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);  
                        $total=$total+$numeroDeRegistros;
                    ?>            
                    <tr>
                        <td>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II</td>
                        <td><?php echo $numeroDeRegistros;?></td>
                    </tr>            
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);  
                        $total=$total+$numeroDeRegistros;
                    ?>            
                    <tr>
                        <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO</td>
                        <td><?php echo $numeroDeRegistros;?></td>
                    </tr>            
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta); 
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ</td>
                        <td><?php echo $numeroDeRegistros; ?></td>
                    </tr>            
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMÁN\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);   
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMÁN</td>
                        <td><?php echo $numeroDeRegistros; ?></td>                
                    </tr>            
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);  
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA</td>
                        <td><?php echo $numeroDeRegistros; ?></td>                
                    </tr>            
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"GERENCIA DE INGENIERÍA\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta); 
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td>GERENCIA DE INGENIERÍA</td>
                        <td><?php echo $numeroDeRegistros; ?></td>                
                    </tr>
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE SUPERVISIÓN DE FABRICACIÓN DE TRENES\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta); 
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td>COORDINACIÓN DE SUPERVISIÓN DE FABRICACIÓN DE TRENES</td>
                        <td><?php echo $numeroDeRegistros; ?></td>                
                    </tr>
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE ELECTRÓNICA\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);     
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td>COORDINACIÓN DE ELECTRÓNICA</td>
                        <td ><?php echo $numeroDeRegistros; ?></td>                
                    </tr>            
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);     
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td>COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN</td>
                        <td><?php echo $numeroDeRegistros; ?></td>                
                    </tr>           
                    <?php
                        $consulta = "SELECT * FROM general WHERE instructor=TRUE AND coordinacion=\"DIRECCIÓN DE MANTENIMIENTO DE MATERIAL RODANTE\";";
                        $hacerConsulta = mysql_query($consulta, $conexion);
                        $numeroDeRegistros = mysql_num_rows($hacerConsulta);     
                        $total=$total+$numeroDeRegistros;
                    ?>
                    <tr>
                        <td>DIRECCIÓN DE MANTENIMIENTO DE MATERIAL RODANTE</td>
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