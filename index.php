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
                    <a class="btn-nav-header" href="/php/crudApartamento/crear.php">Registrar Apartamento</a>
                </nav>
            </div>

            <h1>Arrienda tus Apartamentos</h1>
        </div>
    </header>

    <main class="seccion contenedor">
        <h1>Apartamentos en Arrendamiento</h1>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Apartamento de Lujo en el Lago</h3>
                    <p>Apartamento en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$2,400,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                            <p>3</p>
                        </li><!-- wc -->

                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li> <!-- estacionamiento -->

                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
                            <p>3</p>
                        </li><!-- camas -->
                    </ul>

                    <a class="boton boton-amarillo" href="">Ver Propiedad</a>
                </div><!-- .contenido-anuncio -->
            </div><!-- .anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Apartamento de Lujo en el Lago</h3>
                    <p>Apartamento en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$2,400,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                            <p>3</p>
                        </li><!-- wc -->

                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li> <!-- estacionamiento -->

                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
                            <p>3</p>
                        </li><!-- camas -->
                    </ul>

                    <a class="boton boton-amarillo" href="">Ver Propiedad</a>
                </div><!-- .contenido-anuncio -->
            </div><!-- .anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Apartamento de Lujo en el Lago</h3>
                    <p>Apartamento en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$2,400,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                            <p>3</p>
                        </li><!-- wc -->

                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li> <!-- estacionamiento -->

                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
                            <p>3</p>
                        </li><!-- camas -->
                    </ul>

                    <a class="boton boton-amarillo" href="">Ver Propiedad</a>
                </div><!-- .contenido-anuncio -->
            </div><!-- .anuncio -->
        </div>
    </main>

    <?php
        include('./php/conexion.php');
    ?>

    <footer class="footer seccion">
        <p class="copyright">Todos los Derechos Reservados 2023 &copy;</p>
    </footer>
</body>

</html>