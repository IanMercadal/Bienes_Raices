<?php

require 'includes/config/database.php';
$db = conectarDB();
    // Autenticar el usuario

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email){
            $errores[] = "El email es obligatorio o no es válido.";
        }
        if(!$password){
            $errores[] = "El password es obligatorio";
        }
        if(empty($errores)){
            $query = "SELECT * FROM usuarios WHERE email = '${email}' ";
            $resultado = mysqli_query($db,$query);

            if($resultado -> num_rows){
                // Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);
                // Verificar si el password es correcto o no
                $auth = password_verify($password, $usuario['password']);

                if($auth){
                    // El usuario está autenticado
                    session_start();

                    // Llenar el array de la sesión
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('Location: /admin');
                }else{
                    $errores[] = 'El password es incorrecto';
                }
            }else{
                $errores[] = "El usuario no existe";
            }
        }
    }

    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Email y password</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario">
        <fieldset>
                <legend>Información Personal</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu Email" id="email">

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu Password" id="password">
            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
        </form>
    </main>
<?php
    incluirTemplate('footer');
?>