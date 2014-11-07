<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
  <html>
  <head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>ALTA </title>
    <link href="../css/movil.css" rel="stylesheet" type="text/css">
    <link href="../css/tabla2.css" rel="stylesheet" type="text/css">
    
  </head>
  <body>
  <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="AltaManuales.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
        <?php
        require "../inc/conexion.php";
        if (isset($_POST['clave']) and !empty($_POST['clave']) and !empty($_POST['titulo']) and !empty($_POST['tipo']) and !empty($_POST['actualizado']) ){
           
            $clave= mysql_real_escape_string($_POST['clave']);
            $titulo= mysql_real_escape_string($_POST['titulo']);
            $tipo= mysql_real_escape_string($_POST['tipo']);
            $actualizado= mysql_real_escape_string($_POST['actualizado']);//limpiar caracteres 
            
           
            if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
 
                        $extension = end(explode(".", $_FILES['archivo']['name'])); 
                    if ($extension=="pdf" ){
                        copy($_FILES['archivo']['tmp_name'], 'C:/xampp/htdocs/metroCapacitacion/ced/'.$_FILES['archivo']['name'].'');
 
                        $subido = true;
                           
                     }
                       else{
                           echo "<table cellpading='2' cellspacing='2' border='2'>
                                 <tr><td>ARCHIVO NO VALIDO SOLO ARCHIVOS PDF</td></tr></table>";
                           $subido=false;
                       }
                       
            }
  
                        if($subido) {
 
                       
 
                        } else {
                        echo "<table cellpading='2' cellspacing='2' border='2'>
                                 <tr><td>EL ARCHIVO NO SE  HA SUBIDO </td></tr></table>";
  
                     }  
              
                 
                     if(isset ($_FILES['archivo']['name']) and !empty($_FILES['archivo']['name'])){
                         $nombreArchivo=$_FILES['archivo']['name'];
                     }
                     else{
                         $nombreArchivo="";
                     } 
                     if($extension=="pdf" ){
                     $consulta2= "insert into manuales (clave, titulo, tipo,nombreArchivo, actualizado) values ('$clave','$titulo','$tipo','$nombreArchivo',$actualizado)";
                              $hacerConsulta=  mysql_query($consulta2) or die (mysql_error());
                              echo "<table cellpading='2' cellspacing='2' border='2'>
                                 <tr><td>ALTA EXITOSA</td></tr></table>";
                     }else{
                                   echo "<table cellpading='2' cellspacing='2' border='2'>
                                 <tr><td>ALTA ERRONEA</td></tr></table>";
                              }
                        
        } else {
                          echo "<table cellpading='2' cellspacing='2' border='2'>
                                 <tr><td>TIENES UNO Ó MAS CAMPOS VACÍOS</td></tr></table>";
        
              }
        ?>
                
    

           </div>   
        </div>
    </body>
</html>
