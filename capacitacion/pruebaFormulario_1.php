<!DOCTYPE HTML>
<html>
<head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>ALTA </title>
    <link href="../css/movil.css" rel="stylesheet" type="text/css">
    <link href="../css/tabla2.css" rel="stylesheet" type="text/css">
    <link href="../css/tablaAdaptable.css" rel="stylesheet" type="text/css"> 
    
</head>
<body>
<div id="content">
            <div id="nav">
                <ul>
                    <li><a href="PruebaFormulario.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
                <?php
                    if((empty($_POST['expediente']) || !isset($_POST['expediente']))
                    || (empty($_POST['nombre']) || !isset($_POST['nombre']))
                    || (empty($_POST ['puesto']) || !isset($_POST['puesto']))
                    || (empty($_POST ['adscripcion']) || !isset($_POST['adscripcion']))
                    || (empty($_POST ['coordinacion']) || !isset($_POST['coordinacion']))
                    || (empty($_POST ['ubicacion']) || !isset($_POST['ubicacion']))
                    || (empty($_POST ['plaza']) || !isset($_POST['plaza']))
                    || (empty($_POST ['siden']) || !isset($_POST['siden']))
                    || (empty($_POST ['calidad']) || !isset($_POST['calidad']))
                    || (empty($_POST ['area']) || !isset($_POST['area']))
                    || (empty($_POST ['horario']) || !isset($_POST['horario']))
                    || (empty($_POST ['descanso']) || !isset($_POST['descanso']))
                    || (empty($_POST ['estudios']) || !isset($_POST['estudios']))
                    || (empty($_POST ['concluido']) || !isset($_POST['concluido']))
                    || (empty($_POST ['extension']) || !isset($_POST['extension']))
                    || (empty($_POST ['correo']) || !isset($_POST['correo']))
                    || (empty($_POST ['instructor']) || !isset($_POST['instructor']))
                    || (empty($_POST ['formacion']) || !isset($_POST['formacion'])))
                    {
                             
                        echo "<div class='titulo'>
                            <a href='PruebaFormulario.php?expediente=".$_POST['expediente']."&nombre=".$_POST['nombre']."&puesto=".$_POST['puesto']."
                            &adscripcion=".$_POST['adscripcion']."&coordinacion=".$_POST['coordinacion']."&ubicacion=".$_POST['ubicacion']."&plaza=".$_POST['plaza']."
                            &siden=".$_POST['siden']."&calidad=".@$_POST['calidad']."&area=".$_POST['area']."&horario=".$_POST['horario']."&descanso=".$_POST['descanso']."&estudios=".$_POST['estudios']."
                            &concluido=".@$_POST['concluido']."&extension=".$_POST['extension']."&correo=".$_POST['correo']."&instructor=".@$_POST['instructor']."&formacion=".@$_POST['formacion']."'> Datos Incompletos <BR> regresar</div>";
                   } else {                 
                        require '../inc/conexion.php'; 
                        $expediente = strtoupper(mysql_real_escape_string($_POST['expediente']));
                        $existencia = "SELECT * FROM general WHERE expediente=$expediente;";
                        $consultaExistencia = mysql_query($existencia);
                        $siExiste = mysql_num_rows($consultaExistencia);
                        if($siExiste == 0) {                                                                           
                            $nombre = strtoupper(mysql_real_escape_string($_POST['nombre']));
                            $puesto = strtoupper(mysql_real_escape_string($_POST['puesto']));
                            $adscripcion = mysql_real_escape_string($_POST['adscripcion']);
                            $coordinacion = mysql_real_escape_string($_POST['coordinacion']);
                            $ubicacion = mysql_real_escape_string($_POST['ubicacion']);
                            $plaza = mysql_real_escape_string($_POST['plaza']);
                            $siden = mysql_real_escape_string($_POST['siden']);
                            $calidad = mysql_real_escape_string(@$_POST['calidad']);
                            $area = strtoupper(mysql_real_escape_string($_POST['area']));
                            $horario = strtoupper(mysql_real_escape_string($_POST['horario']));
                            $descanso = strtoupper(mysql_real_escape_string($_POST['descanso']));
                            $estudios = mysql_real_escape_string($_POST['estudios']);
                            $concluido = mysql_real_escape_string(@$_POST['concluido']);
                            $extension = mysql_real_escape_string($_POST['extension']);
                            $correo = mysql_real_escape_string($_POST['correo']);
                            $instructor = mysql_real_escape_string(@$_POST['instructor']);
                            $formacion = mysql_real_escape_string(@$_POST['formacion']);

                            $consulta1= "SELECT * FROM general  WHERE expediente= '$expediente' AND nombre = '$nombre' AND puesto = '$puesto' AND  
                                              adscripcion = '$adscripcion'  AND ubicacion= '$ubicacion' AND 
                                              coordinacion = '$coordinacion' AND plaza = '$plaza' AND siden = '$siden' AND
                                              calidad = '$calidad' AND area = '$area' AND horario = '$horario' AND descanso = '$descanso' AND
                                              grado = '$estudios' AND concluido = $concluido AND extension = '$extension' AND
                                              correo = '$correo' AND instructor = $instructor AND formacion = $formacion";
                            $registro1 =  mysql_query($consulta1) or die (mysql_error());               
                            if(mysql_num_rows($registro1)== 0){                            
                                $consulta = "INSERT INTO general (expediente,nombre,puesto,adscripcion,ubicacion,coordinacion,plaza,siden,calidad,area,horario,descanso,
                                        grado,concluido,extension,correo,instructor,formacion) 
                                        VALUES ('$expediente','$nombre','$puesto','$adscripcion','$ubicacion','$coordinacion','$plaza',
                                        '$siden','$calidad','$area','$horario','$descanso','$estudios',$concluido,'$extension',
                                        '$correo',$instructor,$formacion);";
                                $realizarconsulta= mysql_query($consulta) or die (mysql_error());
                             echo "<div class='titulo'>ALTA DE PERSONAL EXITOSA</div>";                                                 
                   
                             }
                        } else {
                            
                        }
                   }
                ?>
            </div>
    
           
        </div>
     </body>
</html>

