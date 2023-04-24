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

    <main class="contenedor view">
        <h1>Eliminar Apartamento</h1>

        <?php
           $id = $_GET['id'];

           include('../conexion.php');

           $sql = "DELETE
                   FROM apartamentos 
                   WHERE id = $id";

           mysqli_query($conn, $sql);
           echo "<p class='alerta alerta-verde'> ¡Se ha eliminado el apartamento correctamente! </p>";
        ?>
    </main>
        
    <footer class="footer seccion">
        <p class="copyright">Todos los Derechos Reservados 2023</p>
    </footer>
</body>

</html>