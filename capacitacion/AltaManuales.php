<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>FORMULARIO PARA ALTA DE MANUALES</title>
        <link href="../css/movil.css" rel="stylesheet" type="text/css">
        <link href="../css/prueba.css" rel="stylesheet" type="text/css">    
        <title></title>
    </head>
    <body>
         <div id="content">
            <div id="nav">
                <ul>
                    <li><a href="menuManuales.php" title="Regresar"><img src="../img/baatras.png"></a></li>
                    <li><a href="../menu.php" title="Inicio"><img src="../img/bahome.png"></a></li>
                    <li><a href="contacto.php" title="Ayuda"><img src="../img/baayuda.png"></a></li>
                    <li><a href="close.php" title="Salir"><img src="../img/baasalir.png"></a></li>
                </ul>
                <form action="AltaManuales1.php" method="POST" class="smart-green" enctype="multipart/form-data">
                  
                <h1>Alta de Manuales
                <span>Ingresa los siguientes datos para agregar un nuevo manual</span>
                </h1>   
                <label>
                <span>Clave:</span>
                <input type="text" name="clave" />
                    </label>
                <label>
                <span>Nombre del Manual:</span>
                <input type="text" name="titulo"/>
                     </label>
                <label>
                <span>Tipo de Manual:</span><select name='tipo'>
                <option></option>
                <option value='T'>Técnico</option>
                <option value='DH'>Desarrollo Humano</option>
                <option value='I'>Informáticos</option>
                      </select>
                      </label>
                      </label>
                      <label><li>
                <span><ul>Seleccione el manual a subir:</ul></span>
                <input type="file" name="archivo" id="archivo"> 
                </li> </label>
                <label> <span>¿El manual esta actualizado?:</span></label>
                <input type="radio" name='actualizado' value="TRUE" /> Si
                <input type="radio" name='actualizado' value="FALSE" /> No
                
                <br>   
        <br>
        
     <label>
        
         <button type=submit >enviar</button>
    </label>
        
         
                </form>
                
  
    
            
       
    </body>
</html>
