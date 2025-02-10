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
            --primary-light: rgba(157, 36, 73, 0.1);
            --secondary-color: #2c3e50;
            --background-gradient: linear-gradient(135deg, #f5f7fa, #c3cfe2);
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: var(--background-gradient);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        .welcome-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
            height: auto;
            margin-bottom: 2rem;
            animation: pulseAnimation 2s infinite;
            border: 3px solid rgb(255, 255, 255);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
            padding: 10px;
            background: #e0e0e0;
        }

        .welcome-text {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-top: 1rem;
            animation: slideUpFade 1s ease-out;
        }

        @keyframes pulseAnimation {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes slideUpFade {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .particles-js {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
            z-index: 1;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }

        .login-container.show {
            opacity: 1;
            transform: translateY(0);
        }

        .login-header img {
            width: 100%;
            max-width: 250px;
            margin-bottom: 1.5rem;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .login-header h1 {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .form-group {
            margin-bottom: 1rem;
            text-align: left;
        }

        .form-group label {
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
            display: block;
        }

        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            padding: 0.8rem 1rem;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 8px rgba(157, 36, 73, 0.3);
        }

        .login-button {
            width: 100%;
            padding: 1rem;
            background: var(--primary-color);
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 1rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .login-button:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .login-footer {
            margin-top: 1.5rem;
            text-align: center;
            color: #666;
        }

        .login-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .login-footer a:hover {
            color: var(--primary-dark);
        }

        .nav-tabs .nav-link {
            color: var(--secondary-color);
            font-weight: 600;
            transition: color 0.3s ease, background-color 0.3s ease;
        }

        .nav-tabs .nav-link.active {
            color: #ffffff !important;
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }

        .nav-tabs .nav-link:hover {
            color: var(--primary-color);
        }

        .tab-content {
            min-height: 300px;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .modal-dialog {
            max-width: 500px;
            margin: 30vh auto;
        }

        .modal-content {
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            background: var(--primary-color);
            color: white;
            border-radius: 15px 15px 0 0;
        }

        .modal-title {
            font-weight: 600;
        }

        .btn-close {
            filter: invert(1);
        }

        @media (max-width: 576px) {
            .login-container {
                padding: 2rem;
                max-width: 90%;
            }

            .welcome-text {
                font-size: 1.8rem;
                padding: 0 1rem;
            }
        }
    </style>
</head>

<body>

    <div class="welcome-screen">
        <img src="{{ asset('imagenes/logo.png') }}" class="welcome-logo" alt="Logo Secretaría de Administración">
        <h1 class="welcome-text">Bienvenido al Sistema de<br>Control de Proveedores</h1>
    </div>

    <div id="particles-js" class="particles-js"></div>

    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="login-container">
            <div class="login-header">
                <img src="{{ asset('imagenes/logo.png') }}" class="img-fluid" alt="Logo Secretaría de Administración">
                <h1>Control de Registro de Proveedores</h1>
            </div>

            <!-- Pestañas para Login y Registro -->
            <ul class="nav nav-tabs mb-3" id="authTabs">
                <li class="nav-item">
                    <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#loginForm">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#registerForm">Registrarse</a>
                </li>
            </ul>

            <div class="tab-content">
                <!-- Formulario de Inicio de Sesión -->
                <div class="tab-pane fade show active" id="loginForm">
                    <form>
                        <div class="form-group">
                            <label for="username">Usuario</label>
                            <input type="text" id="username" class="form-control" placeholder="Ingrese su usuario"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" class="form-control"
                                placeholder="Ingrese su contraseña" required>
                        </div>
                        <button type="submit" class="login-button">Iniciar Sesión</button>
                    </form>
                    <div class="login-footer">
                        <p>¿Olvidaste tu contraseña? <a href="#" data-bs-toggle="modal"
                                data-bs-target="#resetPasswordModal">Recuperar aquí</a></p>
                    </div>
                </div>

                <!-- Formulario de Registro -->
                <div class="tab-pane fade" id="registerForm">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="newUsername">Usuario</label>
                                    <input type="text" id="newUsername" class="form-control"
                                        placeholder="Ingrese su usuario" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="email" id="email" class="form-control"
                                        placeholder="Ingrese su correo" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="newPassword">Contraseña</label>
                                    <input type="password" id="newPassword" class="form-control"
                                        placeholder="Cree una contraseña" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword">Confirmar Contraseña</label>
                                    <input type="password" id="confirmPassword" class="form-control"
                                        placeholder="Confirme su contraseña" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="login-button">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para recuperación de contraseña -->
    <div class="modal fade" id="resetPasswordModal" tabindex="-1" aria-labelledby="resetPasswordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resetPasswordModalLabel">Recuperar Contraseña</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="resetEmail">Correo Electrónico</label>
                            <input type="email" id="resetEmail" class="form-control"
                                placeholder="Ingrese su correo" required>
                        </div>
                        <button type="submit" class="login-button">Enviar instrucciones</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mostrar el contenedor de login después de 2 segundos
            setTimeout(() => {
                document.querySelector('.welcome-screen').classList.add('fade-out');
                document.querySelector('.login-container').classList.add('show');
            }, 2000);
        });
    </script>
</body>

</html>