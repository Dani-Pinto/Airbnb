<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Apartamento</title>
    <link rel="stylesheet" href="../../build/css/app.css">
</head>

<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a class="logo" href="../../">Air<span>bnb</span></a>

                <nav class="navegacion">
                    <a class="btn-nav-header" href="../../index.php">Volver</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="contenedor view">
        <h1>Detalle del Apartamento</h1>

        <?php
            //Obtener la variable que viene por la url
            $id = $_GET['id'];

            include('../conexion.php');
            $sql = "SELECT *
                    FROM apartamento
                    WHERE id_apartamento = $id";

            $resultado = mysqli_query($conn, $sql);
            $apartamento = $resultado->fetch_assoc();

            if($apartamento) {
                ?>      
                <p>
                    <span class="label">ID: </span>
                    <span class="label-info"><?= $apartamento['id_apartamento'] ?></span>
                </p>
                <p>
                    <span class="label">Alias:</span>
                    <span class="label-info"><?= $apartamento['alias'] ?></span>
                </p>

                <p>
                    <span class="label">Dirección:</span>
                    <span class="label-info"><?= $apartamento['direccion'] ?></span>
                </p>
                <p>
                    <span class="label">Número de Camas:</span>
                    <span class="label-info"><?= $apartamento['camas'] ?></span>
                </p>
                <p>
                    <span class="label">Capacidad: </span>
                    <span class="label-info"><?= $apartamento['capacidad'] ?></span>
                </p>
                <p>
                    <span class="label">Precio por Día: </span>
                    <span class="label-info">$<?= $apartamento['precio_dia'] ?></span>
                </p>
                <p>
                    <span class="label">Días que se ha Alquilado: </span>
                    <span class="label-info"><?= $apartamento['dias_alquilados'] ?></span>
                </p>

                <a href="./update.php?id=<?= $apartamento['id_apartamento'] ?>" class='boton boton-azul'>Actualizar</a>
                <a href="./delete.php?id=<?= $apartamento['id_apartamento'] ?>" class='boton boton-rojo'>Eliminar</a>

        <?php
            }
        ?>
    </main>
        
    <footer class="footer seccion">
        <p class="copyright">Todos los Derechos Reservados 2023</p>
    </footer>
</body>

</html>