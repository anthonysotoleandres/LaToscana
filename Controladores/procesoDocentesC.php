<?php  // registrar PROCESO DE INSCRIPCION
class procesoDocentesC {
    function __construct(){
        $this->procesoDocentesM = new procesoDocentesM();
    }
    // registrar proceso Inscripcion
        public function registroDocentesC(){
            if(isset($_POST['dniRD'])){
                $datosC =array();
                $datosC['nombre'] = $_POST['nombreRD'];
                $datosC['apellido'] = $_POST['apellidoRD'];
                $datosC['dni'] = $_POST['dniRD'];
                $datosC['contraseña'] = $_POST['dniRD'];
                $datosC['telefono'] = $_POST['telefonoRD'];
                $datosC['genero'] = $_POST['generoRD'];
                $datosC['email'] = $_POST['emailRD'];
                
                $resultado = $this->procesoDocentesM->registroDocentesM($datosC);
                
    
            }
        }

 // MOSTRAR DOCENTES
 public function mostrarDocentesC(){
    $resultado = $this->procesoDocentesM->mostrarDocentesM();
    return $resultado;
}  


 // MOSTRAR ASIGNATURAS
 public function mostrarAsignaturasC(){
    $resultado = $this->procesoDocentesM->mostrarAsignaturasM();
    return $resultado;
}  

 // BORRAR ASIGNATURA
 public function borrarAsignaturaC(){
    if(isset($_GET['idCURSOS'])){
        $datosC = array();
        $datosC['idcursos'] = $_GET['idCURSOS'];
        $resultado=$this->procesoDocentesM->borrarAsignaturaM($datosC);
        header("location: index.php?ruta=registro_cursos");
        exit();
        
    }
}

 // ELIMINAR DOCENTES
 public function borrarDocenteC(){
    if(isset($_GET['idPROFE'])){
        $datosC = array();
        $datosC['iddocentes'] = $_GET['idPROFE'];
        $resultado=$this->procesoDocentesM->borrarDocenteM($datosC);
        header("location: index.php?ruta=reporte_docentes");
        exit();
        
    }
}
   




////////////////////////////////////////////////////////////////////////////
// Contar Docentes
public function contarDocentesC(){
    $resultado = $this->procesoDocentesM->contarDocentesM();
    return $resultado;
}

// Contar Estudiantes
public function contarEstudiantesC(){
    $resultado = $this->procesoDocentesM->contarEstudiantesM();
    return $resultado;
}

// Contar Matriculas
public function contarMatriculasC(){
    $resultado = $this->procesoDocentesM->contarMatriculasM();
    return $resultado;
}

// Contar admis
public function contarAdministradoresC(){
    $resultado = $this->procesoDocentesM->contarAdministradoresM();
    return $resultado;
}


    

}
?>
