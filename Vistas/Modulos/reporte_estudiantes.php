<?php
$mostrarC = new procesoMatriculaC();

$mostrarEstudiantes = $mostrarC->mostrarEstudiantesMatriculadosC();
?>



<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Fade In Utility -->
        <div class="col-lg-12">
            <div class="card position-relative">
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                        <h6 class="m-0 font-weight-bold text-primary">Estudiantes de La Toscana</h6>   
                    </div>
                </div>
                <div class="card-body">
                    <!-- contenido del body -->
                    <div class="table-responsive">
                    <caption>CICLO-I</caption>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-white">Turno</th>
                                    <th class="bg-dark text-white">Nombre</th>
                                    <th class="bg-dark text-white">Apellido</th>
                                    <th class="bg-dark text-white">Email</th>
                                    <th class="bg-dark text-white">Telefono</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach($mostrarEstudiantes as $mostrarEstudiante): ?>
                                <?php if ($mostrarEstudiante['ciclo'] == '1'): ?> <!-- Agregar condición para el ciclo 1 -->          
                                    <tr>
                                                    
                                        <td><?=$mostrarEstudiante['turno']?></td>
                                        <td><?=$mostrarEstudiante['nombre']?></td>
                                        <td><?=$mostrarEstudiante['apellido']?></td>
                                        <td><?=$mostrarEstudiante['email']?></td>
                                        <td><?=$mostrarEstudiante['telefono']?></td>
                                            
                                                    
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    
                    <div class="table-responsive">
                    <caption>CICLO-II</caption>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th class="bg-dark text-white">Turno</th>
                                    <th class="bg-dark text-white">Nombre</th>
                                    <th class="bg-dark text-white">Apellido</th>
                                    <th class="bg-dark text-white">Email</th>
                                    <th class="bg-dark text-white">Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($mostrarEstudiantes as $mostrarEstudiante): ?>
                                <?php if ($mostrarEstudiante['ciclo'] == '2'): ?> <!-- Agregar condición para el ciclo 1 -->          
                                    <tr>
                                                    
                                        <td><?=$mostrarEstudiante['turno']?></td>
                                        <td><?=$mostrarEstudiante['nombre']?></td>
                                        <td><?=$mostrarEstudiante['apellido']?></td>
                                        <td><?=$mostrarEstudiante['email']?></td>
                                        <td><?=$mostrarEstudiante['telefono']?></td>
                                            
                                                    
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Add four more tables here -->
                    <!-- Table 3 -->
                    <div class="table-responsive">
                    <caption>CICLO-III</caption>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th class="bg-dark text-white">Turno</th>
                                    <th class="bg-dark text-white">Nombre</th>
                                    <th class="bg-dark text-white">Apellido</th>
                                    <th class="bg-dark text-white">Email</th>
                                    <th class="bg-dark text-white">Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($mostrarEstudiantes as $mostrarEstudiante): ?>
                                <?php if ($mostrarEstudiante['ciclo'] == '3'): ?> <!-- Agregar condición para el ciclo 1 -->          
                                    <tr>
                                                    
                                        <td><?=$mostrarEstudiante['turno']?></td>
                                        <td><?=$mostrarEstudiante['nombre']?></td>
                                        <td><?=$mostrarEstudiante['apellido']?></td>
                                        <td><?=$mostrarEstudiante['email']?></td>
                                        <td><?=$mostrarEstudiante['telefono']?></td>
                                            
                                                    
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Table 4 -->
                    <div class="table-responsive">
                    <caption>CICLO-IV</caption>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th class="bg-dark text-white">Turno</th>
                                    <th class="bg-dark text-white">Nombre</th>
                                    <th class="bg-dark text-white">Apellido</th>
                                    <th class="bg-dark text-white">Email</th>
                                    <th class="bg-dark text-white">Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($mostrarEstudiantes as $mostrarEstudiante): ?>
                                <?php if ($mostrarEstudiante['ciclo'] == '4'): ?> <!-- Agregar condición para el ciclo 1 -->          
                                    <tr>
                                                    
                                        <td><?=$mostrarEstudiante['turno']?></td>
                                        <td><?=$mostrarEstudiante['nombre']?></td>
                                        <td><?=$mostrarEstudiante['apellido']?></td>
                                        <td><?=$mostrarEstudiante['email']?></td>
                                        <td><?=$mostrarEstudiante['telefono']?></td>
                                            
                                                    
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Table 5 -->
                    <div class="table-responsive">
                    <caption>CICLO-V</caption>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th class="bg-dark text-white">Turno</th>
                                    <th class="bg-dark text-white">Nombre</th>
                                    <th class="bg-dark text-white">Apellido</th>
                                    <th class="bg-dark text-white">Email</th>
                                    <th class="bg-dark text-white">Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($mostrarEstudiantes as $mostrarEstudiante): ?>
                                <?php if ($mostrarEstudiante['ciclo'] == '5'): ?> <!-- Agregar condición para el ciclo 1 -->          
                                    <tr>
                                                    
                                        <td><?=$mostrarEstudiante['turno']?></td>
                                        <td><?=$mostrarEstudiante['nombre']?></td>
                                        <td><?=$mostrarEstudiante['apellido']?></td>
                                        <td><?=$mostrarEstudiante['email']?></td>
                                        <td><?=$mostrarEstudiante['telefono']?></td>
                                            
                                                    
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Table 6 -->
                    <div class="table-responsive">
                    <caption>CICLO-VI</caption>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th class="bg-dark text-white">Turno</th>
                                    <th class="bg-dark text-white">Nombre</th>
                                    <th class="bg-dark text-white">Apellido</th>
                                    <th class="bg-dark text-white">Email</th>
                                    <th class="bg-dark text-white">Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($mostrarEstudiantes as $mostrarEstudiante): ?>
                                <?php if ($mostrarEstudiante['ciclo'] == '6'): ?> <!-- Agregar condición para el ciclo 1 -->          
                                    <tr>
                                                    
                                        <td><?=$mostrarEstudiante['turno']?></td>
                                        <td><?=$mostrarEstudiante['nombre']?></td>
                                        <td><?=$mostrarEstudiante['apellido']?></td>
                                        <td><?=$mostrarEstudiante['email']?></td>
                                        <td><?=$mostrarEstudiante['telefono']?></td>
                                            
                                                    
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
