<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Apartamento</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a class="logo" href="/">Air<span>bnb</span></a>

                <nav class="navegacion">
                    <a class="btn-nav-header" href="/">Volver</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="contenedor">
        <h1>Registra un Apartamento</h1>

        <?php
            // Verificar si se envió el formulario
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Capturar los valores enviados
                $alias = $_POST['alias'];
                $direccion = $_POST['direccion'];
                $camas = $_POST['camas'];
                $capacidad = $_POST['capacidad'];
                $precio_dia = $_POST['precio_dia'];
                $dias_alquilados = $_POST['dias_alquilados'];

                // ::::::::::::: Conexión :::::::::::::
                include('../conexion.php');

                //Script de consulta
                $sql = "INSERT INTO apartamentos(alias, direccion, camas, capacidad, precio_dia, dias_alquilados) 
                VALUES ('$alias', '$direccion', $camas, $capacidad, $precio_dia, $dias_alquilados)";
                //echo $sql . '<br><br>';

                //---- Enviar Consulta ----
                if (mysqli_query($conn, $sql)) {
                    echo "<p class='alerta alerta-verde'> ¡Se ha almacenado el registro exitosamente! </p>";
                } else {
                    echo "<p class='alerta alerta-roja'> Error: $sql <br>" . mysqli_error($conn) . "</p>";
                }

                //Cerrar la Conexión
                mysqli_close($conn);
            }
        ?>

        <form action="./create.php" method="POST" class="formulario">
            <fieldset>
                <legend>Información Apartamento</legend>

                <label for="alias">Alias:</label>
                <input id="alias" name="alias" type="text" placeholder="Alias" required>

                <label for="direccion">Dirección:</label>
                <input id="direccion" name="direccion" type="text" placeholder="Ej: Cr 5a 21-Sur" required>

                <label for="camas">Camas:</label>
                <input id="camas" name="camas" type="number" min="1" max="9" placeholder="Ej: 3" required>

                <label for="capacidad">Capacidad:</label>
                <input id="capacidad" name="capacidad" type="number" min="1" max="99" placeholder="Ej: 5" required>

                <label for="precio_dia">Precio Día:</label>
                <input id="precio_dia" name="precio_dia" type="number" placeholder="Precio Día del Apartamento" required>

                <label for="dias_alquilados">Días Alquilados:</label>
                <input id="dias_alquilados" name="dias_alquilados" type="number" placeholder="Días Alquilados" required>
            </fieldset>
            <button type="submit" class="boton-verde">Guardar</button>
            <button type="reset" class="boton-azul">Limpiar</button>
        </form>
    </main>

    <footer class="footer seccion">
        <p class="copyright">Todos los Derechos Reservados 2023</p>
    </footer>
</body>

</html>