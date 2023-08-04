<?php  
require_once "conexionBD.php";

class procesoDocentesM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'docentes';
        $this->tablaBD2 = 'cursos';
        
    }

    // REGISTRAR DOCENTES
    public function registroDocentesM($datosC){
        $cBD = $this->conectarBD();

        $nombr = $datosC['nombre'];
        $apellid = $datosC['apellido'];
        $dni = $datosC['dni'];
        $contraseña = $datosC['dni'];
        $tefef = $datosC['telefono'];
        $gener = $datosC['genero'];
        $emai = $datosC['email'];

      
    

 

        $nombre = mysql_entities_fix_string($cBD,$nombr);
        $apellido = mysql_entities_fix_string($cBD,$apellid);
        $dnii = mysql_entities_fix_string($cBD,$dni);
        $pw_temp = mysql_entities_fix_string($cBD,$contraseña);
        $tefefono = mysql_entities_fix_string($cBD,$tefef);
        $genero = mysql_entities_fix_string($cBD,$gener);
        $email = mysql_entities_fix_string($cBD,$emai);

   

        $password = password_hash($pw_temp, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$nombre','$apellido','$dnii','$password','docente','$tefefono','$genero','$email',01)";

        $resultado = $cBD->query($query);
        return $resultado;
    }


    /// /MOSTRAR DOCENTES
    public function mostrarDocentesM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT * FROM $this->tablaBD WHERE estado = 01";

        $resultado = $cBD->query($query);
        return $resultado;

    }

    /// /MOSTRAR ASIGNATURA
    public function mostrarAsignaturasM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT * FROM $this->tablaBD JOIN $this->tablaBD2 ON docentes_iddocentes= iddocentes";

        $resultado = $cBD->query($query);
        return $resultado;

    }   
     /// /BORRAR ASIGNATURA  
     public function borrarAsignaturaM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];
    
        $IDE = $datosC['idcursos'];
    

        $query = "DELETE FROM cursos WHERE cursos.idcursos = '$IDE'";
        $resultado = $cBD->query($query);
    
        return $resultado;
    }   

    /// /BORRAR DOCENTES   
    public function borrarDocenteM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];
    
        $IDE = $datosC['iddocentes'];
    

        $query = "UPDATE docentes SET estado = 02 WHERE docentes.iddocentes = '$IDE'";
        $resultado = $cBD->query($query);
    
        return $resultado;
    }



////////////////////////////////////////////////////////////////////

/// /Contar Docentes
public function contarDocentesM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  docentes where perfil='docente'";
            $result = $cBD->query($query);
            return $result;

}


/// /Contar Estudiantes
public function contarEstudiantesM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  estudiantes";
            $result = $cBD->query($query);
            return $result;

}


/// /Contar Matriculas
public function contarMatriculasM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  matriculas";
            $result = $cBD->query($query);
            return $result;

}

/// /Contar Matriculas
public function contarAdministradoresM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  docentes where perfil='administrador'";
            $result = $cBD->query($query);
            return $result;

}


} 
?>