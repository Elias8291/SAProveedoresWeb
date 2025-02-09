<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Registro de Proveedores - Secretaría de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #9D2449;
            --primary-dark: #7a1c38;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        }
        .welcome-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            z-index: 2000;
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }

        .welcome-screen.fade-out {
            opacity: 0;
            transform: scale(1.1);
            pointer-events: none;
        }

        .welcome-logo {
            width: 250px;
            border: 3px solid white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
            padding: 10px;
            background: #e0e0e0;
            animation: pulseAnimation 2s infinite;
        }

        @keyframes pulseAnimation {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .nav-tabs .nav-link {
            color: var(--primary-color);
        }

        .nav-tabs .nav-link.active {
            color: #ffffff !important;
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }
    </style>
</head>

<body>
    <div class="welcome-screen d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset('imagenes/logo.png') }}" class="welcome-logo mb-4" alt="Logo Secretaría de Administración">
        <h1 class="text-white text-center display-5 fw-bold" >Bienvenido al Sistema de<br>Control de Proveedores</h1>
    </div>

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
                    <!-- Formulario de login -->
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

                    <!-- Formulario de registro -->
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

    <!-- Recuperar contraseña-->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.querySelector('.welcome-screen').classList.add('fade-out');
            }, 2000);
        });
    </script>
</body>
</html>