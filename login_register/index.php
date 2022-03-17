<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/styles.css">
    <title>LogIn | Registro </title>
</head>

<body>
    <main>

        <div class="container">
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para acceder al registro de dominios</p>
                    <button id="btniniciarsesion">Inicar sesión</button>
                </div>

                <div class="caja_trasera_registro">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para poder iniciar sesión</p>
                    <button id="btnregistrar">Registrarse</button>
                </div>
            </div>
            <div class="container_loginregistro">
                <!--Login-->
                <form action="sqls\login_usuario.php" method="POST" class="form_login">
                    <h2>Inicia sesión</h2>
                    <input type="text" placeholder="Nombre de usuario" name="username" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button>Entrar</button>
                </form>
                <!--Registro-->
                <form action="sqls\registro_usuarios.php" method="POST" class="form_registro">
                    <h2>Regístrate</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre" required>
                    <input type="text" pattern="[a-zA-Z0-9]+" placeholder="Nombre de usuario" name="username" required>
                    <input type="email" placeholder="example@mail.com" name="email" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button>Registrate</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>