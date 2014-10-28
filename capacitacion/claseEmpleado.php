<?php
    class empleado {
        public $expediente;
        public $nombre;
        public $puesto;
        public $adscripcion;
        public $ubicacion;
        public $coordinacion;
        public $plaza;
        public $siden;
        public $calidad;
        public $area;
        public $horario;
        public $descanso;
        public $grado;
        public $concluido;
        public $extension;
        public $correo;
        public $instructor;
        public $formacion;
        public $numCursos;      
        public $cadena;
        public $temp;
        public $nC;
        public $consultaNC;
        public $resCurso;
                
        function asignar($hacerConsulta, $contador) {
            $this->expediente = mysql_result($hacerConsulta, $contador, "expediente");            
            $this->nombre = mysql_result($hacerConsulta, $contador, "nombre");            
            $this->puesto = mysql_result($hacerConsulta, $contador, "puesto");
            if($this->puesto == NULL) {
                $this->puesto = "N.A";
            }
            $this->adscripcion = mysql_result($hacerConsulta, $contador, "adscripcion");
            if($this->adscripcion == NULL) {
                $this->adscripcion = "N.A";
            }
            $this->ubicacion = mysql_result($hacerConsulta, $contador, "ubicacion");
            if($this->ubicacion == NULL) {
                $this->ubicacion = "N.A";
            }            
            $this->coordinacion = mysql_result($hacerConsulta, $contador, "coordinacion");
            if($this->coordinacion == NULL) {
                $this->coordinacion = "N.A";
            }            
            $this->plaza = mysql_result($hacerConsulta, $contador, "plaza");
            if($this->plaza == "0000") {
                $this->plaza = "N.A";
            }                 
            $this->siden = mysql_result($hacerConsulta, $contador, "siden");
            if($this->siden == NULL) {
                $this->siden = "N.A";
            }            
            $this->calidad = mysql_result($hacerConsulta, $contador, "calidad");
            if($this->calidad == NULL) {
                $this->calidad = "N.A";
            }            
            $this->area = mysql_result($hacerConsulta, $contador, "area");
            if($this->area == NULL) {
                $this->area = "N.A";
            }
            $this->horario = mysql_result($hacerConsulta, $contador, "horario");
            if($this->horario == NULL) {
                $this->horario = "N.A";
            }            
            $this->descanso = mysql_result($hacerConsulta, $contador, "descanso");
            if($this->descanso == NULL) {
                $this->descanso = "N.A";
            }            
            $this->grado = mysql_result($hacerConsulta, $contador, "grado");
            if($this->grado == NULL) {
                $this->grado = "NO INDICADO";
            }
            $this->concluido = mysql_result($hacerConsulta, $contador, "concluido");
            if($this->concluido == TRUE) {
                $this->concluido = "CONCLUIDOS";
            } else {
                $this->concluido = "NO CONCLUIDOS";
            }            
            $this->extension = mysql_result($hacerConsulta, $contador, "extension");
            $this->correo = mysql_result($hacerConsulta, $contador, "correo");
            if($this->correo == NULL || $this->correo == 0) {
                $this->correo = "SIN CORREO";
            }             
            $this->instructor = mysql_result($hacerConsulta, $contador, "instructor"); 
            if($this->instructor == TRUE) {
                $this->instructor="SI";
            } else {
                $this->instructor="NO";
            }
            $this->formacion = mysql_result($hacerConsulta, $contador, "formacion");
            if($this->formacion == TRUE) {
                $this->formacion="SI";
            } else {
                $this->formacion="NO";
            }
            $this->cadena="";
            $cursosConsulta = "SELECT * FROM cursos WHERE expediente=$this->expediente;";
            $hacerCursos = mysql_query($cursosConsulta);
            $this->numCursos = mysql_num_rows($hacerCursos);
            if($this->numCursos != 0) {
                for($i = 0; $i < $this->numCursos; $i++) {                
                    $this->temp=mysql_result($hacerCursos, $i, "nom_curso");
                    $this->nC = "SELECT * FROM nombrecursos WHERE id=$this->temp;";
                    $this->consultaNC = mysql_query($this->nC);
                    $this->resCurso = mysql_result($this->consultaNC, 0, "nomCurso");
                    $this->cadena.="*$this->resCurso<br>";
                }
            } else {
                $this->cadena = "NINGUNO";
            }
        }             
        function imprimirEmpleado() {
            echo "<tr>";
            echo "<td>$this->expediente</td>";
            echo "<td>$this->nombre</td>";
            echo "<td>$this->puesto</td>";
            echo "<td>$this->adscripcion</td>";
            echo "<td>$this->ubicacion</td>";
            echo "<td>$this->coordinacion</td>";
            echo "<td>$this->plaza</td>";
            echo "<td>$this->siden</td>";
            echo "<td>$this->calidad</td>";
            echo "<td>$this->area</td>";
            echo "<td>$this->horario</td>";
            echO "<td>$this->descanso</td>";
            echo "<td>$this->grado</td>";
            echo "<td>$this->concluido</td>";
            echo "<td>$this->extension</td>";
            echo "<td>$this->correo</td>";
            echo "<td>$this->instructor</td>"; 
            echo "<td>$this->formacion</td>";
            if($this->instructor == TRUE) {
                echo "<td>$this->cadena</td>";
            }
            echo "<tr>";
        }                   
    }        
    
    class empleadoPersonal extends empleado {
        public $cadenaCurso;
        public $numCursos;
        public $annio;
        public $temporalAnnio;        
                function asignar($hacerConsulta) {
            parent::asignar($hacerConsulta, 0);
        }

        function imprimir($hacerCursos) {            
            $this->numCursos = mysql_num_rows($hacerCursos);
            for($i = 0; $i < $this->numCursos; $i++) {                
                $this->temporalAnnio = mysql_result($hacerCursos, $i, "ini_curso");
                $this->temporalAnnio = substr($this->temporalAnnio, 0, 4);   
                if($this->temporalAnnio != $this->annio) {
                    $this->annio = $this->temporalAnnio;
                    if($this->annio == 0000) {                        
                        $this->cadenaCurso.="<font color=\"\#00FF00\">SIN FECHA DEFINIDA</font><br>";
                    } else {
                        $this->cadenaCurso.="<font color=\"\#00FF00\">$this->annio</font><br>";
                    }
                }
                $this->temp=mysql_result($hacerCursos, $i, "nom_curso");
                $this->nC = "SELECT * FROM nombrecursos WHERE id=$this->temp;";
                $this->consultaNC = mysql_query($this->nC);
                $this->resCurso = mysql_result($this->consultaNC, 0, "nomCurso");
                $this->cadenaCurso.="*$this->resCurso<br>";                    
            }

            echo "<table class='estiloTabla' style='width: 100%;'>
                    <tr class='cabeceraTabla'> 
                        <th colspan=\"2\">DATOS PERSONALES</th>
                    </tr>
                    <tr>
                        <th>Expediente</th>
                        <td>$this->expediente</td> 
                    </tr>           
                    <tr>
                        <th>Nombre</th>
                        <td>$this->nombre</td>          
                    </tr>           
                    <tr>
                        <th>Puesto</th>
                        <td>$this->puesto</td> 
                    </tr>           
                    <tr>
                        <th>Adscripción</th>
                        <td>$this->adscripcion</td>
                    </tr>           
                    <tr>
                        <th>Ubicación</th>
                        <td>$this->ubicacion</td> 
                    </tr>           
                    <tr>
                    <th>Coordinación</th>
                        <td>$this->coordinacion</td> 
                    </tr>                     
                    <tr>
                        <th>Plaza</th>
                        <td>$this->plaza</td>
                    </tr>           
                    <tr>
                        <th>Plaza SIDEN</th>
                        <td>$this->siden</td>
                    </tr>           
                    <tr>
                        <th>Calidad</th>
                        <td>$this->calidad</td>
                    </tr>           
                    <tr>
                        <th>Area</th>
                        <td>$this->area</td>           
                    </tr>           
                    <tr>
                        <th>Horario</th>          
                        <td>$this->horario</td>
                    </tr>           
                    <tr>
                        <th>Descanso</th>
                        <td>$this->descanso</td>           
                    </tr>         
                    <tr>
                        <th>Ultimo grado de estudios</th>
                        <td>$this->grado</td>           
                    </tr>
                    <tr>
                        <th>¿Concluido?</th>
                        <td>$this->concluido</td> 
                    </tr>                     
                    <tr>
                        <th>Extensión</th>
                        <td>$this->extension</td> 
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td>$this->correo</td> 
                    </tr>                     
                    <tr>
                        <th>¿Es instructor?</th>
                        <td>$this->instructor</td> 
                    </tr>              
                    <tr>
                        <th>¿Tomó el curso de formación de instructores?</th>
                        <td>$this->formacion</td> 
                    </tr>   
                    <tr>
                   <th>Cantidad de cursos tomados</th>";
                    if ($this->numCursos == 0) {
                        echo "<td>NINGUNO</td>";
                    } else {                       
                        echo "<td>$this->numCursos</td>";
                        echo "</tr>
                        <tr>
                        <th>Cursos tomados</th>
                        <td>$this->cadenaCurso</td>"; 
                    }
                    echo "</tr>";  
            echo "</table>";
        }
    }
    
    class cursos {
        public $totalCurso;
        public $nombreCurso;
        public $cadena;
        public $fechaDeInicio;
        public $fechaDeTermino;
        public $comprobacion;
        public $indice = "";
        public $consulta;
        public $hacerConsulta;
        public $bandera;
                        
        function imprimirListaCurso($hacerCursos, $fechaSeleccionada) {
            if($fechaSeleccionada != NULL) {            
                $this->totalCurso = mysql_num_rows($hacerCursos);
                if($this->totalCurso != 0) {
                    echo "<table class='estiloTabla' style='width: 100%;'>
                        <tr class='cabeceraTabla'>
                            <th>NOMBRE DE LOS CURSOS<br>(AL $fechaSeleccionada)</th>
                            <th>FECHA DE INICIO</th>
                            <th>FECHA DE TÉRMINO</th>
                        </tr>";
                    for($i=0; $i < $this->totalCurso; $i++){
                        $this->nombreCurso = mysql_result($hacerCursos, $i, "nom_curso");
                        $this->fechaDeInicio = mysql_result($hacerCursos, $i, "ini_curso");
                        $this->fechaDeTermino = mysql_result($hacerCursos, $i, "fin_curso");
                        $this->consulta = "SELECT * FROM nombrecursos WHERE id=$this->nombreCurso;";
                        $this->hacerConsulta = mysql_query($this->consulta);
                        $this->cadena = mysql_result($this->hacerConsulta, 0, "nomCurso");
                        $this->comprobacion = "$this->nombreCurso $this->fechaDeInicio $this->fechaDeTermino";
                        $this->bandera = strcmp($this->comprobacion, $this->indice);
                    
                        if($this->bandera != 0) {
                            echo "<tr>";
                            echo "<td>$this->cadena</td>";
                            echo "<td nowrap>$this->fechaDeInicio</td>";
                            echo "<td nowrap>$this->fechaDeTermino</td>";
                            echo "</tr>";                    
                            $this->indice = $this->comprobacion;
                        }                        
                    }    
                    echo "</table>";
                } else {
                    echo "<div class='titulo'>NO HAY CURSOS DISPONIBLES</div>";
                }                
            }    
        }
    }
    
    function totalCapacitados($hacerConsulta) {  
        require 'conexion.php'; 
        $contarCursos = 0;
        $totalEnGerencia = mysql_num_rows($hacerConsulta);
        for ($i = 0; $i < $totalEnGerencia; $i++) {
            $expedienteCurso = mysql_result($hacerConsulta, $i, "expediente");
            $cursosTomados = "SELECT * FROM cursos WHERE expediente = $expedienteCurso;";
            $hacerCursosTomados = mysql_query($cursosTomados, $conexion);
            $totalHacerCursosTomados = @mysql_num_rows($hacerCursosTomados);
            if ($totalHacerCursosTomados != 0) 
                $contarCursos++;
        }
        return $contarCursos;
    }
    
    class periodoResumen {
        public $ini_curso;
        public $fin_curso;
        public $nom_curso;
        public $totalInscritos;
        public $temporalNombre;
        public $temporalNombre1;
        public $inscritosCurso;
        public $total;
        public $nombreCurso;
        public $conteo;
        public $hacerNombreCurso;
        public $resultadoNombreCurso;
        public $consulta1;
        public $hacerConsulta1;
        public $registrosConsulta1;
        public $temp;        
        public $contador;
                
        function imprimir() {
            echo "<table class='estiloTabla' style='width: 100%'> 
                <tr class='cabeceraTabla'>
                    <th>NOMBRE CURSO</th>
                    <th>INICIO DEL CURSO</th>
                    <th>FIN DEL CURSO</th>
                    <th>PERSONAL INSCRITO</th>
                </tr>";            
        }
        function obtenerDatos($consultaRealizada) {            
            $this->totalInscritos=  mysql_num_rows($consultaRealizada);
            for($i = 0; $i < $this->totalInscritos; $i++) {
                $this->nom_curso=  mysql_result($consultaRealizada, $i, "nom_curso");
                $this->nombreCurso = "SELECT * FROM nombrecursos WHERE id=$this->nom_curso;";
                $this->hacerNombreCurso = mysql_query($this->nombreCurso);
                $this->resultadoNombreCurso = mysql_result($this->hacerNombreCurso, 0, "nomCurso");                                
                $this->ini_curso=  mysql_result($consultaRealizada, $i, "ini_curso");    
                $this->fin_curso=  mysql_result($consultaRealizada, $i, "fin_curso");
                $this->temporalNombre = $this->resultadoNombreCurso.$this->ini_curso.$this->fin_curso;
                if($this->temporalNombre != $this->temporalNombre1){                    
                    $this->consulta1 = "SELECT * FROM cursos WHERE ini_curso = '$this->ini_curso' AND fin_curso = '$this->fin_curso' AND nom_curso=$this->nom_curso;";
                    $this->hacerConsulta1 = mysql_query($this->consulta1);
                    $this->registrosConsulta1 = mysql_num_rows($this->hacerConsulta1);
                    echo "<tr>
                            <td>$this->resultadoNombreCurso</td>
                            <td nowrap>$this->ini_curso</td>
                            <td nowrap>$this->fin_curso</td>                                
                            <td>$this->registrosConsulta1</td>
                        </tr>";
                    $this->temporalNombre1 =  $this->temporalNombre;
                }  
            } 
            echo "<tr>
                    <th colspan='3'>TOTAL: </th>
                    <th>$this->totalInscritos</th>
                </tr>";
            echo "</table>";
        }
    }
?>