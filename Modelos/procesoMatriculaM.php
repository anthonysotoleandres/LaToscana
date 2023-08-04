<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class procesoMatriculaM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'estudiantes';
        $this->tablaBD2 = 'matriculas';
        
    }


    /// /MOSTRAR Estudiants
    public function mostrarEstudiantesM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $dni = $datosC['dni'];

        $query = "SELECT * FROM $this->tablaBD WHERE dni='$dni'";

        $resultado = $cBD->query($query);
        return $resultado;

    }

    //REALIZAR MATRICULA
    public function registroMatriculaM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $id = $datosC['id'];
        $fecha_matricula = $datosC['fecha_matricula'];
        $ciclo = $datosC['ciclo'];
        $turno = $datosC['turno'];
        $matricula = $datosC['matricula'];
        $mensualidad = $datosC['mensualidad'];
        $año = $datosC['año'];
        $dodigo = $datosC['codigo_estudiante'];
    
    
        
        $query = "INSERT INTO $this->tablaBD2 VALUES 
            (NULL,'$fecha_matricula','$año','$turno','$ciclo','$matricula','$mensualidad','$dodigo ',$id)";


        $query2 = "UPDATE $this->tablaBD SET 
                ciclo = '$ciclo' WHERE estudiantes.idestudiantes = $id ";

        $query3 = "UPDATE $this->tablaBD SET 
                    codigo_estudiante = '$dodigo' WHERE estudiantes.idestudiantes = $id ";
                
    
        $result = $cBD->query($query);
        $result2 = $cBD->query($query2);
        $resulte = $cBD->query($query3);
        return $result;
    }

    /// /MOSTRAR ESTUDIANTES
    public function mostrarMatriculasM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT *
        FROM $this->tablaBD 
        JOIN $this->tablaBD2  ON idestudiantes = estudiantes_idestudiantes";

        $resultado = $cBD->query($query);
        return $resultado;

    }



        /// /MOSTRAR ESTUDIANTES MATRICULADOS
    public function mostrarEstudiantesMatriculadosM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT *
        FROM $this->tablaBD 
        JOIN $this->tablaBD2  ON idestudiantes = estudiantes_idestudiantes";

        $resultado = $cBD->query($query);
        return $resultado;

    } 

    /// /MOSTRAR ESTUDIANTES 2
    public function mostrarMatriculas2M($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $dniEstudiante=$datosC['dni'];

        $query = "SELECT matriculas.ciclo, matriculas.codigo_estudiante
        FROM estudiantes
        JOIN matriculas  ON estudiantes.idestudiantes = matriculas.estudiantes_idestudiantes
        WHERE estudiantes.dni = '$dniEstudiante'";

        $resultado = $cBD->query($query);
        return $resultado;

    }

        /// MODIFICAR CODIGO y ciclo DEL ESTUDIANTES   
        public function registrarCodigoM($datosC){
            $cBD = $this->conectarBD();
            $iduser=$_SESSION['Ingreso'];


            $id = $datosC['id'];
            $codigo = $datosC['codigo_estudiante'];

            
            $query = "UPDATE $this->tablaBD
                SET 
                codigo_estudiante='$codigo'
                
                WHERE idestudiantes=$id";
            
            $resultado = $cBD->query($query);
            return $resultado;    
        }


    /// /BORRAR MATRICULA  
    public function borrarMatriculaM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];
    
        $IDE = $datosC['idmatriculas'];
    

        $query = "DELETE FROM matriculas WHERE matriculas.idmatriculas = '$IDE'";
        $resultado = $cBD->query($query);
    
        return $resultado;
    }

    /// MODIFICAR MATRICULAS 
    public function modificarMatriculaM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $idmatricula = $datosC['idmatriculas'];
        $matricula = $datosC['matricula'];
        $mensualidad = $datosC['mensualidad'];
        

        
        $query = "UPDATE matriculas
            SET 
            matricula='$matricula', 
            mensualidad='$mensualidad'      
            
            WHERE matriculas.idmatriculas='$idmatricula'";
        
        $resultado = $cBD->query($query);
        return $resultado;    
    }   


} 
?>