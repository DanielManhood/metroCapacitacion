<!DOCTYPE html>
<html>
    <head>       
        <?php 
            if(isset($_POST['datepicker'])) {
                $datepicker = $_POST['datepicker'];
            } else {
                $datepicker = date("Y-m-d");
            }
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CURSOS DISPONIBLES AL DIA <?php echo $datepicker;?></title>
        <link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.7.2.custom.css" />
        <link href="../css/movil.css" rel="stylesheet" type="text/css">  
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css">  
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">  
        <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="../js/jquery-1.9.1d.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="../js/jquery.ui.datepicker-es.js"></script>

        <script type="text/javascript">                        
            jQuery(function($){
                $.datepicker.regional['es'] = {
                    closeText: 'Cerrar',
                    prevText: '&#x3c;Ant',
                    nextText: 'Sig&#x3e;',
                    currentText: 'Hoy',
                    monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
                    'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                    monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
                    'Jul','Ago','Sep','Oct','Nov','Dic'],
                    dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
                    dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
                    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
                    weekHeader: 'Sm',
                    dateFormat: 'yy-mm-dd',
                    firstDay: 1,
                    changeMonth:true,
                    changeYear:true,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: ''};
                    $.datepicker.setDefaults($.datepicker.regional['es']);
                });    

                $(document).ready(function(){
                    $("#datepicker").datepicker({
                        changeMonth: true 
                    });
                });
        </script>
    </head>                
    <body>            
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="Cursos2.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>                    
                </ul>
                <?php
                    require '../inc/conexion.php';
                    require_once 'claseEmpleado.php';                    
                ?>
                <br>
                <br>
                <div>	                  
                    <form action="<?php echo "calendario.php?datepicker=".$datepicker; ?>" name="formFecha" id="formFecha" method="post">
                        <label> Seleccionar Fecha:</label>
                        <input type="text" name="datepicker" id="datepicker" readonly="readonly" size="12"  value="<?php echo $datepicker;?>"/>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
                <br>
                <br>
                <?php              
                    $consultaFecha = "SELECT nom_curso, ini_curso, fin_curso FROM cursos WHERE ini_curso<=STR_TO_DATE('$datepicker','%Y-%m-%d') AND 
                        fin_curso>=STR_TO_DATE('$datepicker','%Y-%m-%d') ORDER BY nom_curso, ini_curso, fin_curso ASC;"; 
                    $hacerFecha = mysql_query($consultaFecha);    
                    $lista = new cursos();                                    
                    $lista->imprimirListaCurso($hacerFecha, $datepicker);
                ?>                
            </div>
        </div>
    </body>
</html>
