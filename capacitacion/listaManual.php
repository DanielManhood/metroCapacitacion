<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>MANUALES</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/tabla2_1.css" rel="stylesheet" type="text/css">                        
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">                        
    </head>
    <body>   
        <?php           
            require '../inc/conexion.php';             
            if(isset($_POST['manual']) and !empty($_POST['manual'])){
                $tipo = $_POST['manual'];
            } else {
               $tipo = "T"; 
            }                        
        ?>
        <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="manuales.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>                                                   

                <br>
                <br>
                <form id="tipo" name="tipo" method="post" action="listaManual.php">
                    Tipo de manual: <select name="manual" id="manual">                        
                        <option value="T">TÉCNICOS</option>
                        <option value="DH">DESARROLLO HUMANO</option>
                        <option value="I">INFORMÁTICA</option>
                    </select>
                    <button>Aceptar</button>
                </form>
                <br>
                <br>
                <?php
                    $listado = "SELECT * FROM manuales WHERE tipo='$tipo' ORDER BY titulo;";
                    $hacerListado = mysql_query($listado);
                    $registros = mysql_num_rows($hacerListado);
                    switch ($tipo) {
                        case "T":
                            $etiqueta = "MANUALES TÉCNICOS<br>TOTAL: $registros";
                            break;
                        case "DH":
                            $etiqueta = "MANUALES DE DESARROLLO HUMANO<br>TOTAL: $registros";
                            break;
                        case "I":
                            $etiqueta = "MANUALES DE INFORMÁTICA<br>TOTAL: $registros";
                            break;
                        default:
                            echo "NO HAY CURSOS DISPONIBLES";
                            break;
                    }
                    echo "<div class='titulo'>$etiqueta</div><br><br>";
                ?>
                <table class="estiloTabla" style="width: 100%">
                    <tr class="cabeceraTabla">
                        <th>CLAVE</th>
                        <th>TÍTULO</th>                        
                        <th>STATUS</th>
                        <th>ENLACE</th>
                    </tr>
                <?php                                                            
                    for($i = 0; $i < $registros; $i++){
                        $clave = mysql_result($hacerListado, $i, "clave");
                        $titulo = mysql_result($hacerListado, $i, "titulo");
                        $tipo = mysql_result($hacerListado, $i, "tipo");                        
                        $nombreArchivo = mysql_result($hacerListado, $i, "nombreArchivo");
                        $actualizado = @mysql_result($hacerListado, $i, "actualizado");
                        echo "<tr>
                                <td nowrap>$clave</td>
                                <td>$titulo</td>";                                                                
                        if($actualizado == 0) {
                            $actualizado = "NO ACTUALIZADO";
                        } elseif ($actualizado == 1) {
                            $actualizado = "ACTUALIZADO";
                        }                       
                        echo "  <td>$actualizado</td>
                                <td><a href='../ced/$nombreArchivo'>Descargar</a></td>
                            </tr>";
                    }
                ?>
                </table>            
            </div>
        </div>     
    </body>
</html>
