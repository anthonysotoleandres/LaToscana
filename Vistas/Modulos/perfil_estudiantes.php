<?php
$perfilC = new perfilC();
$perfilC->actualizarPerfilC();

$mostrarPerfiles = $perfilC->mostrarPerfil2C();
?>






<div class="container-fluid">

    <!-- Content Row -->
    <div class="row justify-content-center">

        <!-- Principal Content -->
        <div class="col-xl-8 col-lg-7">

            <div class="card position-relative">
                <div class="card-header py-3">
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                        <h6 class="m-0 font-weight-bold text-primary">Datos ssPersonales</h6>
                    </div>
                </div>

                <div class="card-body">
                    <!-- Contenido del body -->
                    <form method="post" class="user">
                        <div class="form-row align-items-center">
                            <div class="form-group col-sm-6">
                                <label for="nombre" class="font-weight-bold">Nombre</label>
                                    <?php foreach($mostrarPerfiles as $mostrarPerfile):?>                       
                                        <input type="text" value="<?=$mostrarPerfile['nombre']?>" class="form-control" id="nombre" name="nombreAP">
                                    <?php endforeach; ?>
                                
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="estado" class="font-weight-bold">Apellido</label>

                                <?php foreach($mostrarPerfiles as $mostrarPerfile):?>                       
                                        <input type="text" value="<?=$mostrarPerfile['apellido']?>" class="form-control" id="nombre" name="apellidoAP">
                                    <?php endforeach; ?>
                            </div>

                            

                            <div class="form-group col-sm-6">
                                <label for="telefono" class="font-weight-bold">Telefono</label>
                                <?php foreach($mostrarPerfiles as $mostrarPerfile):?>                       
                                        <input type="text" value=<?=$mostrarPerfile['telefono']?> class="form-control" id="nombre" name="telefonoAP">
                                    <?php endforeach; ?>
                            </div>

                            <!-- Agrega más grupos de campos si es necesario -->

                            <div class="form-group col-sm-6">
                                <label for="matricula" class="font-weight-bold">Género</label>
                                <?php foreach($mostrarPerfiles as $mostrarPerfile):?>                       
                                        <input type="text" value=<?=$mostrarPerfile['genero']?> class="form-control" id="nombre" name="generoAP" readonly>
                                    <?php endforeach; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="mensualidad" class="font-weight-bold">Email</label>
                                <?php foreach($mostrarPerfiles as $mostrarPerfile):?>                       
                                        <input type="text" value=<?=$mostrarPerfile['email']?> class="form-control" id="nombre" name="emailAP">
                                    <?php endforeach; ?>
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="mensualidad" class="font-weight-bold">Perfil</label>
                                <?php foreach($mostrarPerfiles as $mostrarPerfile):?>                       
                                        <input type="text" value=<?=$mostrarPerfile['perfil']?> class="form-control" id="nombre" name="perfilAP" readonly>
                                    <?php endforeach; ?>
                            </div>

                            <div class="form-group col-sm-12 text-center">
                                <button class="btn btn-primary" type="submit">Guardar Cambios</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
