<?php
$adminC = new AdminC();
$resultado = $adminC->IngresoC();
?>

<body class="bg-gradient-warning">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row-center">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">La Toscana</h1>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Incio de Sesion</h1>
                                    </div>
                                    <form class="user"method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="usuarioI"
                                                placeholder="Usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="claveI" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordarme</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control "  name="perfilI" >
                                                <option value="administrador">Administrador</option>
                                                <option value="estudiante">Estudiante</option>

                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Ingreso
                                        </button>
                                        <hr>
                                        
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">¿Olvidaste tu contraseña?</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>







