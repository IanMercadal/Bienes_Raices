<?php

// BBDD

    require '../../includes/config/database.php';
    $db = conectarDB();

    // Array con mensaje de errores
    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedorId'];

        if(!$titulo){
            $errores[] = "Debes añadir un titulo";
        }
        if(!$precio){
            $errores[] = "El precio es obligatorio";
        }
        if( strlen($descripcion) > 50){
            $errores[] = "La descripción debe tener al menos 50 caracteres";
        }
        if(!$habitaciones){
            $errores[] = "El número de habitaciones es obligatorio";
        }
        if(!$wc){
            $errores[] = "El número de baños es obligatorio";
        }
        if(!$estacionamiento){
            $errores[] = "El número de Estacionamientos es obligatorio";
        }
        if(!$vendedorId){
            $errores[] = "Elige un vendedor";
        }

        // echo "<pre>";  
        // var_dump($errores);
        // echo "</pre>";

        // Revisar que el array de errores está vacío

        if(empty($errores)){
            // Insertar en la base de datos
            $query = "INSERT INTO propiedades (titulo, precio, descripcion,habitaciones, wc, estacionamiento,
            vendedorId) VALUES ('$titulo', '$precio', '$descripcion','$habitaciones', '$wc', '$estacionamiento','$vendedorId')";
    
            $resultado = mysqli_query($db, $query);
    
            if($resultado){
                echo "Insertado correctamente";
            }
        }
    }

    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>

        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información General</legend> 

                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Título Propiedad" value="<?php echo $titulo; ?>"></input>

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>"></input>

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png"></input>

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion">"<?php echo $descripcion; ?>"</textarea>

                
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">
    
                <label for="estacionamiento">Estacionamientos:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedorId">
                    <option value="">--Seleccione--</option>
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main> 
<?php
    incluirTemplate('footer');
?>