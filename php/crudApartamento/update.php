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
        <h1>Actualizar Apartamento</h1>

        <?php
            // Verificar si se envió el formulario
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                include('../conexion.php');
                // Capturar los valores enviados
                $id2 = $_POST['id'];
                $alias = $_POST['alias'];
                $direccion = $_POST['direccion'];
                $camas = $_POST['camas'];
                $capacidad = $_POST['capacidad'];
                $precio_dia = $_POST['precio_dia'];
                $dias_alquilados = $_POST['dias_alquilados'];

                // ::::::::::::: Conexión :::::::::::::
                include('../conexion.php');

                //Script de consulta
                $sql = "UPDATE apartamentos
                    SET alias='$alias', direccion='$direccion', camas=$camas, capacidad=$capacidad, precio_dia=$precio_dia, dias_alquilados=$dias_alquilados
                    WHERE id=$id2";

                //Generar alerta de confirmación
                if( mysqli_query($conn, $sql) ) {
                    echo "<p class='alerta alerta-verde'> ¡Se ha actualizado el apartamento Correctamente! </p>";
                } else {
                    echo "<p class='alerta alerta-roja'> Error: $sql <br>" . mysqli_error($conn) . "</p>";
                }

                //Cerrar la Conexión
                mysqli_close($conn);
            }
        ?>

        <?php
        //Obtener la variable id que viene por get
        $id = $_GET['id'];
        include('../conexion.php');

        $sql = "SELECT *
            FROM apartamentos
            WHERE id = $id";

        $resultado = mysqli_query($conn, $sql);
        $apartamento = $resultado->fetch_assoc(); //->fetch_assoc(), Arreglo asociativo.

        //Cerrar la Conexión
        mysqli_close($conn);
        ?>
        
        <form action="./update.php?id=<?= $apartamento['id'] ?>" method="POST" class="formulario">
            <fieldset>
                <legend>Información Apartamento</legend>
                <input type="hidden" name="id" value=<?= $apartamento['id'] ?> > <!-- echo -->

                <label for="alias">Alias:</label>
                <input id="alias" name="alias" type="text" placeholder="Alias" required value='<?= $apartamento['alias'] ?>'>

                <label for="direccion">Dirección:</label>
                <input id="direccion" name="direccion" type="text" placeholder="Ej: Cr 5a 21-Sur" required  value='<?= $apartamento['direccion'] ?>'> 

                <label for="camas">Camas:</label>
                <input id="camas" name="camas" type="number" min="1" max="9" placeholder="Ej: 3" required  value='<?= $apartamento['camas'] ?>'>

                <label for="capacidad">Capacidad:</label>
                <input id="capacidad" name="capacidad" type="number" min="1" max="99" placeholder="Ej: 5" required  value='<?= $apartamento['capacidad'] ?>'>

                <label for="precio_dia">Precio Día:</label>
                <input id="precio_dia" name="precio_dia" type="number" placeholder="Precio Día del Apartamento" required  value='<?= $apartamento['precio_dia'] ?>'>

                <label for="dias_alquilados">Días Alquilados:</label>
                <input id="dias_alquilados" name="dias_alquilados" type="number" placeholder="Días Alquilados" required  value='<?= $apartamento['dias_alquilados'] ?>'>
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