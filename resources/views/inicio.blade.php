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
            --color-primario: #9D2449;
            --color-primario-oscuro: #7a1c38;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, var(--color-primario), var(--color-primario-oscuro));
        }

    </style>
</head>

<body>
    <div>
        <div class="card shadow-lg border-0 rounded-4 w-100" style="max-width: 500px;">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <img src="{{ asset('imagenes/logo.png') }}" class="img-fluid mb-3" alt="Logo" style="max-width: 250px;">
                    <h2 class="h3 fw-bold" style="color: #9D2449">Control de Registro de Proveedores</h2>
                </div>
                <ul>
                    <li><a id="login-tab" href="#loginForm">Iniciar Sesión</a></li>
                    <li><a id="register-tab" href="#registerForm">Registrarse</a></li>
                </ul>
                <div>
                    <!-- Login -->
                    <div id="loginForm">
                        <form>
                            <label>Usuario</label>
                            <input type="text" placeholder="Ingrese su usuario">
                            <label>Contraseña</label>
                            <input type="password" placeholder="Ingrese su contraseña">
                            <button type="submit">Iniciar Sesión</button>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#resetPasswordModal">¿Olvidaste tu
                                contraseña?</a>
                        </form>
                    </div>

                    <!-- Registrarse -->
                    <div id="registerForm">
                        <form>
                            <label>Usuario</label>
                            <input type="text" placeholder="Ingrese su usuario">
                            <label>Correo Electrónico</label>
                            <input type="email" placeholder="Ingrese su correo">
                            <label>Contraseña</label>
                            <input type="password" placeholder="Cree una contraseña">
                            <label>Confirmar Contraseña</label>
                            <input type="password" placeholder="Confirme su contraseña">
                            <button type="submit">Registrarse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recuperar Contraseña -->
    <div id="resetPasswordModal">
        <div>
            <div>
                <div>
                    <h5>Recuperar Contraseña</h5>
                    <button type="button" data-bs-dismiss="modal">&times;</button>
                </div>
                <div>
                    <form>
                        <label>Correo Electrónico</label>
                        <input type="email" placeholder="Ingrese su correo">
                        <button type="submit">Enviar instrucciones</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
