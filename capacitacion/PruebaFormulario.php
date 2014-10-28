<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>FORMULARIO PARA ALTA DE PERSONAL</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/prueba.css" rel="stylesheet" type="text/css">       
         <?php           
            if (isset($_GET['expediente'])) {
                $expediente = $_GET['expediente'];
            } else {
                $expediente = "";
            } 
            if (isset($_GET['nombre'])) {
                $nombre = $_GET['nombre'];
            } else {
                $nombre= "";
            }
            if (isset($_GET['puesto'])){
                $puesto= $_GET['puesto'];
            } else {
                $puesto = "";
            }
            if (isset($_GET['adscripcion'])){
                $adscripcion= $_GET['adscripcion'];
            } else {
                $adscripcion = "";
            }
            
            if (isset($_GET['coordinacion'])){
                $coordinacion= $_GET['coordinacion'];
            } else  {
                $coordinacion = "";
                
            }
            if (isset($_GET['ubicacion'])){
                $ubicacion= $_GET['ubicacion'];
            } else {
                $ubicacion = "";
            }
            if (isset($_GET['plaza'])){
                $plaza= $_GET['plaza'];
            } else {
                $plaza ="";
            }
            if (isset($_GET['siden'])){
                $siden= $_GET['siden'];
            } else {
                $siden = "";
            }
            if (isset($_GET['area'])){
                $area= $_GET['area'];
            } else {
                $area = "";
            }
            if (isset($_GET['horario'])){
                $horario= $_GET['horario'];
            } else {
                $horario= "";
            }
            if (isset($_GET['descanso'])){
                $descanso= $_GET['descanso'];
            } else {
                $descanso = "";
            }
            if (isset($_GET['estudios'])){
                $estudios= $_GET['estudios'];
            } else {
                $estudios = "";
            }
            if (isset($_GET['concluido'])){
                $concluido= $_GET['concluido'];
            } else {
                $concluido = "";
            }
            if (isset($_GET['extension'])){
                $extension= $_GET['extension'];
            } else {
                $extension = "";
            }
            if (isset($_GET['correo'])){
                $correo= $_GET['correo'];
            } else {
                $correo = "";
            }
            if (isset($_GET['instructor'])){
                $instructor= $_GET['instructor'];
            } else {
                $instructor = "";
            }
            if (isset($_GET['formacion'])){
                $formacion= $_GET['formacion'];
            } else {
                $formacion = "";
            }
            
          ?>
       </head>
<body>
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
     <form action="pruebaFormulario_1.php" method="POST" class="smart-green">
    <h1>CAPTURA DE PERSONAL
        <span>INGRESA LOS SIGUIENTES DATOS PARA AGREGAR NUEVO PERSONAL</span>
    </h1>
    <label>
        <span>Expediente:</span>
        <input type="text" name="expediente"  value="<?php echo $expediente; ?>" />
    </label>
    <label>
        <span>Nombre:</span>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>" />
    </label>
   
    <label>
        <span>Puesto:</span>
        <input type="text" name="puesto" value="<?php echo $puesto; ?>" />
    </label>
     <label>
        <span>Adscripción:</span><select name='adscripcion'>
        <option></option>
                <option value='DIRECCIÓN DE MANTENIMIENTO DE MATERIAL RODANTE'>DIRECCIÓN DE MANTENIMIENTO DE MATERIAL RODANTE</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN'>COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA'>COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN 1917'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN 1917</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TASQUEÑA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TASQUEÑA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMÁN'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMÁN</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA</option>
                <option value='COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN'>COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN</option>
                <option value='COORDINACIÓN DE REHABILITACIÓN DE TRENES'>COORDINACIÓN DE REHABILITACIÓN DE TRENES</option>                
                <option value='COORDINACIÓN DE ELECTRÓNICA'>COORDINACIÓN DE ELECTRÓNICA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO TLÁHUAC'>COORDINACIÓN DE MANTENIMIENTO TLÁHUAC</option>
                <option value='GERENCIA DE INGENIERÍA'>GERENCIA DE INGENIERÍA</option>
                <option value='GERENCIA DE INSTALACIONES FIJAS'>GERENCIA DE INSTALACIONES FIJAS</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN'>SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I'>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II'>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II</option>
             
        </select>
    </label>  
   <label>
        <span>Coordinacion:</span><select name='coordinacion'>
                <option></option>
                <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN'>COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA'>COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN 1917'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN 1917</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TASQUEÑA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TASQUEÑA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMÁN'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMÁN</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA</option>
                <option value='COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN'>COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN</option>
                <option value='COORDINACIÓN DE REHABILITACIÓN DE TRENES'>COORDINACIÓN DE REHABILITACIÓN DE TRENES</option>                
                <option value='COORDINACIÓN DE ELECTRÓNICA'>COORDINACIÓN DE ELECTRÓNICA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO TLÁHUAC'>COORDINACIÓN DE MANTENIMIENTO TLÁHUAC</option>
                <option value='GERENCIA DE INGENIERÍA'>GERENCIA DE INGENIERÍA</option>
                <option value='GERENCIA DE INSTALACIONES FIJAS'>GERENCIA DE INSTALACIONES FIJAS</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN'>SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I'>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II'>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II</option>
             
        </select>
    </label>  
   <label>
        <span>Ubicación:</span><select name='ubicacion'>
        <option></option>                
                <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN'>COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA'>COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTTUCIÓN 1917'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN 1917</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TASQUEÑA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TASQUEÑA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMÁN'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMÁN</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ZARAGOZA</option>
                <option value='COORDINACIÓN DE REHABILITACIÓN DE TRENES'>COORDINACIÓN DE REHABILITACIÓN DE TRENES</option>
                <option value='COORDINACIÓN DE ELECTRÓNICA'>COORDINACIÓN DE ELECTRÓNICA</option>
                <option value='COORDINACIÓN DE MANTENIMIENTO TLÁHUAC'>COORDINACIÓN DE MANTENIMIENTO TLÁHUAC</option>
                <option value='GERENCIA DE INGENIERÍA'>GERENCIA DE INGENIERÍA</option>
                <option value='GERENCIA DE INSTALACIONES FIJAS'>GERENCIA DE INSTALACIONES FIJAS</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN'>SUBGERENCIA DE MANTENIMIENTO MAYOR Y REHABILITACIÓN</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I'>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO I</option>
                <option value='SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II'>SUBGERENCIA DE MANTENIMIENTO SISTEMÁTICO II</option>
                <option value='ADMINISTRACIÓN DE MATERIALES'>ADMINISTRACIÓN DE MATERIALES</option>
                <option value='COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN (JEFATURA TICOMÁN)'>COORDINACIÓN DE PROGRAMACIÓN Y EVALUACIÓN (JEFATURA TICOMÁN)</option>
                <option value='COMISIÓN SINDICAL'>COMISIÓN SINDICAL</option>
        </select>
    </label>
   <label>
        <span>Plaza:</span>
        <input type="text" name="plaza" value="<?php echo $plaza; ?>"/>
    </label>
   <label>
        <span>Siden:</span>
        <input type="text" name="siden" value="<?php echo $siden; ?>"/>
    </label>
    <label> <span>Calidad:</span></label>
            <input type="radio" name='calidad' value='BASE' /> BASE
            <input type="radio" name='calidad' value='CONFIANZA' /> CONFIANZA
            <input type="radio" name='calidad' value='ESTRUCTURA'/> ESTRUCTURA
            <input type="radio" name='calidad' value='HONORARIOS' /> HONORARIOS
            
    <label>
        <span>Área:</span>
        <input type="text" name="area"  value="<?php echo $area; ?>"/>
    </label>
    <label>
        <span>Horario:</span>
        <input type="text" name="horario" placeholder='EJEMPLO:07:00 A 15:00' value="<?php echo $horario; ?>"/>
    </label>
    <label>
        <span>Descanso:</span>
        <input type="text" name="descanso" placeholder='EJEMPLO: S Y D, L Y M.' value="<?php echo $descanso; ?>"/>
    </label>
    <label>
        <span>Ultimo grado de estudios:</span><select name='estudios' >
            <option></option>
                       <option value='PRIMARIA'>Primaria</option>
                       <option value='SECUNDARIA'>Secundaria</option>
                       <option value='ESPECIALIDADES'>Especialidades(Carrera Tecnica)</option>
                       <option value='MEDIA SUPERIOR'>Media Superior</option>
                       <option value='SUPERIOR'>Superior</option>
                       <option value='POSGRADO'>Posgrado</option>
                       <option value='MAESTRIA'>Maestria</option>
                       <option value='DOCTORADO'>Doctorado</option>
            
        </select>
    </label>
    <label> <span>¿Concluido?:</span></label>
           <input type="radio" name='concluido' value="TRUE" /> Si
           <input type="radio" name='concluido' value="FALSE" /> No
    
    <label>
        <span>Extension:</span>
        <input type="text" name="extension" value="<?php echo $extension; ?>"/>
    </label>        
   <label>
        <span>Correo:</span>
        <input type="text" name="correo" value="<?php echo $correo; ?>" />
    </label> 
           
    <label> <span>Instructor:</span></label>
           <input type="radio" name='instructor' value="TRUE" /> Si
            <input type="radio" name='instructor' value="FALSE" /> No
            <br>   
    <label>
        <span>¿Tomo el curso de formación de instructores?</span></label>
        <input type="radio" name='formacion' value="TRUE" /> Si
        <input type="radio" name='formacion' value="FALSE" /> No
    
        <br>   
        <br>
        
     <label>
        
        <input type=submit value="Enviar">
    </label>    
</form>
     </div>
    </div>
</body>
</html>