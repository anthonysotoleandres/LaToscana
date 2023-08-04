<?php
$mostrarC = new procesoDocentesC();

$mostrarDocentes = $mostrarC->mostrarDocentesC();


$mostrarC->borrarDocenteC();
?>



<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Fade In Utility -->
        <div class="col-lg-12">
            <div class="card position-relative">
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                        <h6 class="m-0 font-weight-bold text-primary">Docentes de la Toscana</h6>   
                    </div>
                </div>
                <div class="card-body">
                    <!-- contenido del body -->
                    <div class="table-responsive">
                    <caption>Docentes</caption>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-white">Nombre</th>
                                    <th class="bg-dark text-white">Apellido</th>
                                    <th class="bg-dark text-white">DNI</th>
                                    <th class="bg-dark text-white">Telefono</th>
                                    <th class="bg-dark text-white">Genero</th>
                                    <th class="bg-dark text-white">Email</th>
                                    <th class="bg-dark text-white">Opciones</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach($mostrarDocentes as $mostrarDocente): ?>
                                <?php if ($mostrarDocente['perfil'] == 'docente'): ?> <!-- Agregar condición para el ciclo 1 -->    
                                    <tr>
                                                    
                                        <td><?=$mostrarDocente['nombre']?></td>
                                        <td><?=$mostrarDocente['apellido']?></td>
                                        <td><?=$mostrarDocente['dni']?></td>
                                        <td><?=$mostrarDocente['telefono']?></td>
                                        <td><?=$mostrarDocente['genero']?></td>
                                        <td><?=$mostrarDocente['email']?></td>
                                        <td class="text-center">
                                            <?php if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'administrador'): ?>
                                                <!-- Enlace para eliminar el DOCENTES -->
                                                <a href="#confirmacionModal<?=$mostrarDocente['iddocentes']?>" class="btn btn-danger btn-circle" data-toggle="modal">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            <?php endif; ?>


                                            <!-- Ventana emergente de confirmación -->
                                            <div class="modal fade" id="confirmacionModal<?=$mostrarDocente['iddocentes']?>" tabindex="-1" role="dialog" aria-labelledby="confirmacionModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="confirmacionModalLabel">Confirmación</h5>
                                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">×</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Estás seguro de eliminar al Docente?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                                                <a href="index.php?ruta=reporte_docentes&idPROFE=<?=$mostrarDocente['iddocentes']?>" class="btn btn-primary">Eliminar</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>





                                            </td>
                                            
                                                    
                                    </tr>
                                    <?php endif; ?>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
