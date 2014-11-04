<!DOCTYPE html>
<html>
    <head>       
        <?php 
            if(isset($_POST['datepicker']) AND isset($_POST['datepicker2'])) {
                $datepicker = $_POST['datepicker'];
                $datepicker2 = $_POST['datepicker2'];
                echo $datepicker;
                echo $datepicker2;
            } else {
                $datepicker = date("0000-00-00");
                $datepicker2 = date("0000-00-00");
            }
            if (isset($_GET['expediente'])) {
                $expediente = $_GET['expediente'];
            } else {
                $expediente = "";
            } 
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ALTA DE CURSOS </title>
        <link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.7.2.custom.css" />
        <link href="../css/prueba.css" rel="stylesheet" type="text/css"> 
        <link href="../css/movil.css" rel="stylesheet" type="text/css">         
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
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: ''};
                    $.datepicker.setDefaults($.datepicker.regional['es']);
                });    

                $(document).ready(function(){
                    $("#datepicker").datepicker({
                        changeMonth: true,
                        changeYear: true
                    });
                    $("#datepicker2").datepicker({
                        changeMonth: true,
                        changeYear: true
                    });
                });
        </script>
    </head>                
    <body>  
        <?php 
        require '../inc/conexion.php';
        $consulta ="SELECT * FROM nombrecursos ORDER BY nomCurso;";
        $hacerConsulta = mysql_query($consulta);
        $numReg = mysql_num_rows($hacerConsulta); 
        
        ?>
        
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="cursosAlta.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>                                                                                    
                <div>	 
                    <br>
                    <br>
                    <form action="<?php echo "recibirDatos.php?datepicker=".$datepicker."&datepicker2=".$datepicker2; ?>" name="formFecha" id="formFecha" method="post" class="smart-green">
                        <h1>CAPTURA DE CURSOS
                        <span>INGRESA LOS SIGUIENTES DATOS PARA AGREGAR UN NUEVO CURSO</span>
                           </h1>
                        <label><span>Expediente ó nombre completo (AAN):</span> </label> 
                        <input type="text" name="expediente"  value="<?php echo $expediente; ?>" /><br>
                        <label><span> Seleccionar Fecha inicio:</span></label> 
                        <input type="text" name="ini_curso" id="datepicker" readonly="readonly" size="12"  value="<?php echo $datepicker;?>"/> <br>
                        <label><span> Seleccionar Fecha fin:</span></label>
                        <input type="text" name="fin_curso" id="datepicker2" readonly="readonly" size="12"  value="<?php echo $datepicker2;?>"/> <br>
                        <label><span> Nombre del curso:</span> </label>
                        <select name="nombreCursos">
                        <option></option>w
                        <?php 
                         for ($i=0; $i < $numReg; $i++ ){
                             $cursosOpcion = mysql_result($hacerConsulta, $i, "nomCurso");
                             $idOpcion = mysql_result($hacerConsulta, $i, "id");
                             echo "<option value ='$idOpcion'>$cursosOpcion</option>";                            
                         }
                        
                        ?>
                        </select>
                            
                        <button type="submit">Enviar</button>
                    </form>
                </div>
                
                
                </ul> 
            </div>
        </div>
    </body>
</html>