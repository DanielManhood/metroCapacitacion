<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>INFORMACIÓN GENERAL</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/tablaAdaptable.css" rel="stylesheet" type="text/css">
        
        
        <?php
        require '../inc/conexion.php';
        $consulta = "SELECT * FROM general;";
        $hacerconsulta= mysql_query($consulta);        
        $numeroDeRegistros= mysql_num_rows($hacerconsulta);        
        ?>
    </head>
    <body >
        
         <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="personal1.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
            </div>
           </div>
        <div class="titulo">TABLA GENERAL<br>TOTAL: <?php echo $numeroDeRegistros; ?></div>
        <br>
        <br>
        <table class="tabla">
           <thead>                           
           <tr>
           <th>Expediente</th>
           <th>Nombre</th>
           <th>Puesto</th>
           <th>Adscripción</th>
           <th>Ubicación</th>
           <th>Coordinación</th>
           <th>Plaza</th>
           <th>Plaza SIDEN</th>
           <th>Calidad</th>
           <th>Area</th>
           <th>Horario</th>
           <th>Descanso</th>
          </thead>   
         
        <?php
        for ($contador=0; $contador<$numeroDeRegistros; $contador ++){           
            $expediente=mysql_result ($hacerconsulta, $contador, "expediente");
            $nombre=mysql_result ($hacerconsulta, $contador, "nombre");
            $puesto=mysql_result ($hacerconsulta, $contador, "puesto");
            $adscripcion=mysql_result ($hacerconsulta, $contador, "adscripcion");
            $ubicacion=mysql_result ($hacerconsulta, $contador, "ubicacion");
            $coordinacion=  mysql_result($hacerconsulta, $contador, "coordinacion");
            $plaza=mysql_result ($hacerconsulta, $contador, "plaza");
            $siden=mysql_result ($hacerconsulta, $contador, "siden");
            $calidad=mysql_result ($hacerconsulta, $contador, "calidad");
            $area=mysql_result ($hacerconsulta, $contador, "area");
            $horario=mysql_result ($hacerconsulta, $contador, "horario");
            $descanso=mysql_result ($hacerconsulta, $contador, "descanso");            
          ?>
          <tr>
          <td><?php echo $expediente; ?></td>
          <td><?php echo $nombre; ?></td>          
          <td><?php echo $puesto; ?></td>
          <td><?php echo $adscripcion; ?></td>
          <td><?php echo $ubicacion; ?></td>
          <td><?php echo $coordinacion; ?></td>
          <td><?php echo $plaza; ?></td>
          <td><?php echo $siden; ?></td>
          <td><?php echo $calidad; ?></td>
          <td><?php echo $area; ?></td>
          <td><?php echo $horario; ?></td>
          <td><?php echo $descanso; ?></td>          
          </tr>
          <?php 
        }
        ?>
            
        </table>
     </body>
