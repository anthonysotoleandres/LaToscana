<?php
class AdminC {
    function __construct() {
        $this->adminM = new AdminM();
    }

    public function IngresoC() {
        if(isset($_SESSION['Ingreso'])){
            header("location: index.php?ruta=dashboard");
        }
       

        if (isset($_POST["usuarioI"])) {
            $datosC = array(
                "usuario" => $_POST["usuarioI"],
                "contraseña" => $_POST["claveI"],
                "perfil" => $_POST["perfilI"]
            );

            $resultado = $this->adminM->IngresoM($datosC);

            if ($resultado) {
                session_start();
                $_SESSION['Ingreso'] = $resultado;
                $_SESSION['perfil'] = $datosC['perfil'];

                if ($_SESSION['perfil'] == 'administrador') {
                    header("location:index.php?ruta=dashboard");
                    exit();
                } else {
                    header("location:index.php?ruta=reporte_estudiantes");
                    exit();
                }
            } else {
                return false;
            }
        }

        return true;
    }

    public function salirC() {
        ob_start();
        session_destroy();
        header('location:index.php?ruta=ingreso');
        exit();
        ob_end_flush();
    }

    public function sesionIniciadaC() {
        session_start();
        if (isset($_SESSION['Ingreso'])) {
            return true;
        }
        return false;
    }

    public function redirigirSesionC($ruta) {
        if (!$_SESSION["Ingreso"]) {
            header("location:index.php?=$ruta");
            exit();
        }
    }
}
?>
