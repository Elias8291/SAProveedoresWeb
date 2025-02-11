<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Registro de Proveedores - Secretaría de Administración</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom/styles.css"> 
    <link rel="stylesheet" href="css/custom/app.css">    
    <link rel="stylesheet" href="css/custom/all.css">   
</head>

<body>
    <div id="particles-js"></div>

    <div class="container min-vh-100 d-flex justify-content-center align-items-center py-5">
        <div class="card shadow-lg border-0 rounded-4 w-100" style="max-width: 500px;">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <img src="{{ asset('imagenes/logo.png') }}" class="img-fluid mb-3" alt="Logo" style="max-width: 250px;">
                    <h2 class="h3 fw-bold" style="color: #9D2449">Control de Registro de Proveedores</h2>
                </div>

                <ul class="nav nav-tabs mb-4" id="authTabs">
                    <li class="nav-item flex-fill text-center">
                        <a class="nav-link active fw-semibold" id="login-tab" data-bs-toggle="tab" href="#loginForm">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item flex-fill text-center">
                        <a class="nav-link fw-semibold" id="register-tab" data-bs-toggle="tab" href="#registerForm">Registrarse</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="loginForm">
                        <form>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Usuario</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Ingrese su usuario">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Contraseña</label>
                                <input type="password" class="form-control form-control-lg" placeholder="Ingrese su contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 btn-lg mb-3">Iniciar Sesión</button>
                            <div class="text-center">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#resetPasswordModal" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="registerForm">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Usuario</label>
                                        <input type="text" class="form-control" placeholder="Ingrese su usuario">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Correo Electrónico</label>
                                        <input type="email" class="form-control" placeholder="Ingrese su correo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Contraseña</label>
                                        <input type="password" class="form-control" placeholder="Cree una contraseña">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" placeholder="Confirme su contraseña">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 btn-lg mt-3">Registrarse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="resetPasswordModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Recuperar Contraseña</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Correo Electrónico</label>
                            <input type="email" class="form-control" placeholder="Ingrese su correo">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar instrucciones</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/lib/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/lib/bootstrap/particles.min.js"></script>
    <script src="{{ asset('js/custom/particulas.js') }}"></script>
</body>

</html>