<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css">
        <title>MODIFICACIÓN DE DATOS</title>
    </head>
    <body>
        <div id="content">
            <div id="nav">
                <?php
                    $limpiaOp = mysql_real_escape_string($_GET['op']);
                    $limpiaExp = mysql_real_escape_string($_GET['expediente']);
                ?>
                <ul>
                    <li><a href="modificarDatos.php?consulta=<?php echo $limpiaExp; ?>" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="ayuda.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>    
                </ul>
            </div>                                        
                <?php                                       
                    if(isset($limpiaOp) AND !empty($limpiaOp) AND isset($limpiaExp) AND !empty($limpiaExp)) {                
                        switch ($limpiaOp) {
                            case 1:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=1&expediente=$limpiaExp'>                                
                                    Nombre: <input id='nombre' name='nombre' type='text' placeholder='Introduzca el nuevo nombre'>
                                    <br>";                            
                                break;
                            case 2:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=2&expediente=$limpiaExp'>                                
                                    Puesto: <input id='puesto' name='puesto' type='text' placeholder='Introduzca el puesto'>
                                    <br>";
                                break;
                            case 3:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=3&expediente=$limpiaExp'>                                
                                    Adscripción: <select id='adscripcion' name='adscripcion'>
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
                                    </select>";
                                break;      
                            case 4:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=4&expediente=$limpiaExp'>                                
                                        Ubicación: <select id='ubicacion' name='ubicacion'>
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
                                    </select>";
                                break;
                            case 5:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=5&expediente=$limpiaExp'>                                
                                        Coordinación: <select id='coordinacion' name='coordinacion'>
                                        <option></option>
                                        <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN'>COORDINACIÓN DE MANTENIMIENTO MAYOR TICOMÁN</option>
                                        <option value='COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA'>COORDINACIÓN DE MANTENIMIENTO MAYOR ZARAGOZA</option>
                                        <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CD. AZTECA</option>
                                        <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTTUCIÓN 1917'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO CONSTITUCIÓN 1917</option>
                                        <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO LA PAZ</option>
                                        <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO ROSARIO</option>
                                        <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TASQUEÑA'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TASQUEÑA</option>
                                        <option value='COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOM´SN'>COORDINACIÓN DE MANTENIMIENTO SISTEMÁTICO TICOMÁN</option>
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
                                    </select>";
                                break;
                            case 6:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=6&expediente=$limpiaExp'>
                                        Plaza: <input type='text' name='plaza' id='plaza' placeholder='Teclee la nueva plaza'>
                                        <br>";
                                break;
                            case 7:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=7&expediente=$limpiaExp'>
                                        SIDEN: <input type='text' name='siden' id='siden' placeholder='Modificar SIDEN'>
                                        <br>";
                                break;
                            case 8:
                                echo "<form class='estiloRadio' id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=8&expediente=$limpiaExp'>
                                        <br>
                                        Calidad: 
                                        <br>
                                        <br>
                                        <input type='radio' name='calidad' id='calidad' value='BASE'> BASE
                                        <br>
                                        <input type='radio' name='calidad' id='calidad' value='CONFIANZA'> CONFIANZA
                                        <br>
                                        <input type='radio' name='calidad' id='calidad' value='ESTRUCTURA'> ESTRUCTURA
                                        <br>
                                        <input type='radio' name='calidad' id='calidad' value='HONORARIOS'> HONORARIOS
                                        <br>
                                        <br>";                                
                                break;
                            case 9:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=9&expediente=$limpiaExp'>
                                    Área: <input type='text' name='area' id='area' placeholder='Teclee la nueva área'>
                                    <br>";                                    
                                break;
                            case 10:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=10&expediente=$limpiaExp'>
                                    Horario: <input type='text' name='horario' id='horario' placeholder='Ej. 07:00 A 15:00'>
                                    <br>";                                    
                                break;
                            case 11:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=11&expediente=$limpiaExp'>
                                    Descanso: <input type='text' name='descanso' id='descanso' placeholder='Ej. L Y M'>
                                    <br>";                                    
                                break;   
                            case 12:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=12&expediente=$limpiaExp'>
                                        Último grado de estudios: <select name='estudios'>
                                            <option></option>
                                            <option value='PRIMARIA'>Primaria</option>
                                            <option value='SECUNDARIA'>Secundaria</option>
                                            <option value='ESPECIALIDADES'>Especialidades(Carrera Tecnica)</option>
                                            <option value='MEDIA SUPERIOR'>Media Superior</option>
                                            <option value='SUPERIOR'>Superior</option>
                                            <option value='POSGRADO'>Posgrado</option>
                                            <option value='MAESTRIA'>Maestria</option>
                                            <option value='DOCTORADO'>Doctorado</option>            
                                        </select>";
                                break;
                            case 13:
                                echo "<form class='estiloRadio' id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=13&expediente=$limpiaExp'>
                                        <br>
                                        ¿Estudios concluidos?
                                        <br>
                                        <br>
                                        <input type='radio' name='concluido' id='concluido' value='TRUE'> SI
                                        <br>
                                        <input type='radio' name='concluido' id='concluido' value='FALSE'> NO                                        
                                        <br>
                                        <br>";                                
                                break;
                            case 14:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=14&expediente=$limpiaExp'>
                                    Extensión: <input type='text' name='extension' id='extension' placeholder='Ej. 4532 ó 4565-4325'>
                                    <br>";                                    
                                break;
                            case 15:
                                echo "<form id='modificacion' name='modificacion' method='post' action='modificacionRealizar.php?op=15&expediente=$limpiaExp'>
                                    Correo: <input type='text' name='correo' id='correo' placeholder='Ej. micorreo@correo.com'>
                                    <br>";                                    
                                break;
                            default:
                          
                            break;
                        }
                    } else {
                        echo "ERROR EN LA PÁGINA";
                    }            
                ?>                       
                <button type='submit'>Modificar</button>
            </form>
        </div>
    </body>
</html>
