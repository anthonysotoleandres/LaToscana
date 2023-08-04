
<?php
ob_start(); // Habilitar almacenamiento en búfer de salida bg-gradient-success
	$adminC = new AdminC();
ob_start();
?>

<?php if($adminC->sesionIniciadaC()):?>

<?php
$perfilC = new perfilC();
$mostrarPerfiles = $perfilC->mostrarPerfilC();
$mostrarPerfiles2 = $perfilC->mostrarPerfil2C();
?>

<?php if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'administrador'): ?>


<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-toscana sidebar sidebar-dark accordion" id="accordionSidebar">
            
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
        <img class="img-fluid" src="Vistas/img/toscana.png" alt="Logo de Toscana">
    </div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php?ruta=dashboard">
        <i class="fas fa-home"></i>
            
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-graduation-cap"></i>

            <span>Gestion de Estudiantes</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Estudiantes/Matrícula:</h6>
                <a class="collapse-item" href="index.php?ruta=registroestudiantes">Estudiantes</a>        
                <a class="collapse-item" href="index.php?ruta=matriculatotal">Matriculas</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-book"></i>
            <span>Gestion de Cursos</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Reporte de los Cursos:</h6>
                
                <a class="collapse-item" href="index.php?ruta=plan_estudio">Plan de Estudio</a>
                <a class="collapse-item" href="index.php?ruta=horario">Horarios</a>
                
                
            </div>
        </div>
    </li>


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
            aria-expanded="true" aria-controls="collapse3">
            <i class="fas fa-file"></i>

            <span>Reportes</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Generacion de Reportes</h6>
                <a class="collapse-item" href="index.php?ruta=reporte_estudiantes">Reporte de Estudiantes</a>        
                <a class="collapse-item" href="index.php?ruta=reporte_docentes">Reporte de Docentes</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrador
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-cog"></i>
            <span>Administración</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Panel Administrarivo:</h6>
                <a class="collapse-item" href="index.php?ruta=registro_docentes">Registro de Docentes</a>         
                <a class="collapse-item" href="index.php?ruta=registro_cursos">Mantenimiento de Cursos</a>
                
                
        
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

   

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

    
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav perfil de usuario  -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                            <?php foreach($mostrarPerfiles as $mostrarPerfil): ?> 
                                <p class="mb-1"><?=$mostrarPerfil['nombre']?> <?=$mostrarPerfil['apellido']?></p>                     
                            <?php endforeach; ?>
                        </span>
                        <img class="img-profile rounded-circle" src="Vistas\img\user.png">
                    </a>

                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php?ruta=perfil">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Perfil
                        </a>
                       
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Cerrar sesion
                        </a>
                    </div>
                </li>

            </ul>

        </nav>



<!-- End of Page Wrapper -->

<!-- Button para acercar arriba-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Mensaje para cerrar sesion xdd-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Desea Cerrar Sesion?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Salir" para finalizar su sesión actual</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="index.php?ruta=salir">Salir</a>
            </div>
        </div>
    </div>
</div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- MOSTRAR MENU PARA LOS ESTUDIANTES -->

<?php elseif (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'estudiante'): ?>
        <!-- Page Wrapper -->
        <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-toscana sidebar sidebar-dark accordion" id="accordionSidebar">
                    
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                <img class="img-fluid" src="Vistas/img/toscana.png" alt="Logo de Toscana">
            </div>
            </a>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfaces
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Utilities Collapse Menu -->
          


                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?ruta=reporte_estudiantes" >
                    <i class="fas fa-file"></i>

                    <span>Reportes de Estudiantes</span>
                </a>

                <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?ruta=reporte_docentes" >
                    <i class="fas fa-file"></i>

                    <span>Reportes de Docentes</span>
                </a>

                <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?ruta=plan_estudio" >
                    <i class="fas fa-file"></i>

                    <span>Plan de Estudio Estudiantes</span>
                </a>

                <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?ruta=horario" >
                    <i class="fas fa-file"></i>

                    <span>Horarios</span>
                </a>

            


                
            </li>

         
           

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Matriculas</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Panel de Matricula:</h6>
                        <a class="collapse-item" href="index.php?ruta=estudiante_matricula">Realizar Matriculas</a>         
                
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

            
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav perfil de usuario  -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php foreach($mostrarPerfiles2 as $mostrarPerfil): ?> 
                                        <p class="mb-1"><?=$mostrarPerfil['nombre']?> <?=$mostrarPerfil['apellido']?></p>                     
                                    <?php endforeach; ?>
                                </span>
                                <img class="img-profile rounded-circle" src="Vistas\img\user.png">
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="index.php?ruta=perfil_estudiantes">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                            
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>



        <!-- End of Page Wrapper -->

        <!-- Button para acercar arriba-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

        <!-- Mensaje para cerrar sesion xdd-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Desea Cerrar Sesion?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Salir" para finalizar su sesión actual</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="index.php?ruta=salir">Salir</a>
                    </div>
                </div>
            </div>
        </div>


<?php else: ?>
                <!-- Mostrar elementos del menú para otros perfiles o un menú básico si no se ha identificado el perfil -->
                <!-- ... Código para un menú básico o elementos del menú para otros perfiles ... -->
<?php endif; ?>
  


<?php else:?>

<!-- Mostrar mensaje o redirigir a página de acceso denegado si no hay sesión iniciada -->

<?php endif; ?>

<?php
ob_end_flush(); // Vaciar el búfer de salida y enviar al navegador
?>






