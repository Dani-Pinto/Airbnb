<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a class="logo" href="/">Air<span>bnb</span></a>

                <nav class="navegacion">
                    <a class="btn-nav-header" href="/">Arrendar</a>
                    <a class="btn-nav-header" href="/php/crudApartamento/create.php">Registrar Apartamento</a>
                </nav>
            </div>

            <h1>Arrienda tus Apartamentos</h1>
        </div>
    </header>

    <main class="seccion contenedor">
        <h1>Apartamentos en Arrendamiento</h1>

        <div class="contenedor-anuncios">
            <?php
                include('./php/conexion.php');
                $imagen = 1;

                // Script de consulta
                $sql = "SELECT id, alias, precio_dia, camas FROM apartamentos";
                $apartamentos = $conn->query($sql);

                if ($apartamentos) {
                    foreach ($apartamentos as $apartamento) {
                        echo "<div class='anuncio'>";
                            echo "<picture>" .
                                    "<source srcset='build/img/anuncio$imagen.webp' type='image/webp'>" .
                                    "<source srcset='build/img/anuncio1.jpg' type='image/jpeg'>" .
                                    "<img loading='lazy' src='build/img/anuncio1.jpg' alt='anuncio'>" .
                                "</picture>";

                            echo "<div class='contenido-anuncio'>";
                                echo "<h3>" . $apartamento['alias'] . "</h3>";
                                echo "<p class='precio'>" . $apartamento['precio_dia'] ."</p>";
                                echo "<ul class='iconos-caracteristicas'>" .
                                        "<li>" .
                                            "<img loading='lazy' src='build/img/icono_dormitorio.svg' alt='Icono Camas'>".
                                            "<p>". $apartamento['camas'] ."</p>" . 
                                        "</li>" .
                                    "</ul>";
                                echo "<a class='boton boton-amarillo' href='./php/crudApartamento/view.php?id=" . $apartamento['id'] . "'>Ver Propiedad</a>";
                            echo "</div>";
                        echo "</div>";

                        $imagen++;
                        if($imagen === 6){
                            $imagen = 1;
                        }
                    }
                }

            ?>
            
        </div>
    </main>

    <footer class="footer seccion">
        <p class="copyright">Todos los Derechos Reservados 2023 &copy;</p>
    </footer>
</body>

</html>