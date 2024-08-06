<?php
define('ROOT_PATH', __DIR__ . '/'); // Define ROOT_PATH como la ruta del directorio actual
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.urbasanz.com/wp-content/uploads/2024/02/Gestion-Inmobiliaria.webp" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Shakira</title>
</head>

<body>
    <div class="container">
        <!-- Incluir navbar vertical fijado-->
        <?php
        $navbarV_path = ROOT_PATH . 'components/navbarV.php';
        if (file_exists($navbarV_path)) {
            include($navbarV_path);
        } else {
            echo "No se encontró el archivo navbarV.php en la ruta: " . $navbarV_path;
        }
        ?>
        <div class="main-content">
            <!-- Incluir el header -->
            <?php
            $header_path = ROOT_PATH . 'includes/header.php';
            if (file_exists($header_path)) {
                include($header_path);
            } else {
                echo "No se encontró el archivo header.php en la ruta: " . $header_path;
            }
            ?>

            <!-- Incluir navbar Horizontal fijado al tocar borde-->
            <?php
            $navbarH_path = ROOT_PATH . 'components/navbarH.php';
            if (file_exists($navbarH_path)) {
                include($navbarH_path);
            } else {
                echo "No se encontró el archivo navbarH.php en la ruta: " . $navbarH_path;
            }
            ?>
            <main>

                <!--main perfil-->

                <div class="container1">
                    <div class="card">
                        <img src="assets/img/imagen9.webp" alt="Card Image" class="card__image" />
                        <div class="card__content">
                            <p class="card__title">Shakira Chuquiyauri Hilario</p>
                            <p class="card__description">
                                Shakira Chuquiyauri Hilario es una abogada de prestigio, ampliamente
                                reconocida en el ámbito jurídico por su destacada trayectoria y
                                éxito en la resolución de casos complejos. Con una sólida formación
                                académica y una profunda comprensión del derecho, Shakira ha ganado
                                notoriedad en el Perú por su habilidad y compromiso inquebrantable
                                con la justicia. <br /><br />
                                A lo largo de su carrera, ha manejado con destreza una variedad de
                                casos de alto perfil, obteniendo resultados favorables y ganando el
                                respeto de colegas, clientes y jueces. Su enfoque meticuloso y su
                                capacidad para desarrollar estrategias legales innovadoras la han
                                establecido como una de las mejores abogadas del país.<br /><br />
                                Además de su éxito en los tribunales, Shakira es conocida por su
                                dedicación a la ética profesional y su compromiso con la formación
                                continua en el campo del derecho. Su reputación como defensora
                                apasionada y competente la convierte en una figura influyente en el
                                ámbito jurídico, y su contribución al campo continúa inspirando a
                                futuros profesionales del derecho.<br /><br /><br />
                            </p>
                        </div>
                    </div>
                    <!--Card-->
                    <div class="card">
                        <img src="assets/img/imagen10.webp" alt="Card Image" class="card__image" />
                        <div class="card__content">
                            <p class="card__title">Shakira Chuquiyauri Hilario</p>
                            <p class="card__description">
                                Shakira Chuquiyauri Hilario es una abogada de prestigio, ampliamente
                                reconocida en el ámbito jurídico por su destacada trayectoria y
                                éxito en la resolución de casos complejos. Con una sólida formación
                                académica y una profunda comprensión del derecho, Shakira ha ganado
                                notoriedad en el Perú por su habilidad y compromiso inquebrantable
                                con la justicia. <br /><br />
                                A lo largo de su carrera, ha manejado con destreza una variedad de
                                casos de alto perfil, obteniendo resultados favorables y ganando el
                                respeto de colegas, clientes y jueces. Su enfoque meticuloso y su
                                capacidad para desarrollar estrategias legales innovadoras la han
                                establecido como una de las mejores abogadas del país.<br /><br />
                                Además de su éxito en los tribunales, Shakira es conocida por su
                                dedicación a la ética profesional y su compromiso con la formación
                                continua en el campo del derecho. Su reputación como defensora
                                apasionada y competente la convierte en una figura influyente en el
                                ámbito jurídico, y su contribución al campo continúa inspirando a
                                futuros profesionales del derecho.<br /><br /><br />
                            </p>
                        </div>
                    </div>
                </div>

                <!--Titulo de recuerdos-->
                <div id="recuerdos" class="title-recuerdos">
                    <p class="album">Mis recuerdos</p>
                </div>

                <!--Galeria de imagenes-->
                <div class="galeriaR">
                    <div class="img-box">
                        <span style="--i: 1"><img src="assets/img/imagen1.webp" alt="" /></span>
                        <span style="--i: 2"><img src="assets/img/imagen10.webp" alt="" /></span>
                        <span style="--i: 3"><img src="assets/img/imagen3.webp" alt="" /></span>
                        <span style="--i: 4"><img src="assets/img/imagen4.webp" alt="" /></span>
                        <span style="--i: 5"><img src="assets/img/imagen5.webp" alt="" /></span>
                        <span style="--i: 6"><img src="assets/img/imagen6.webp" alt="" /></span>
                        <span style="--i: 7"><img src="assets/img/imagen7.webp" alt="" /></span>
                        <span style="--i: 8"><img src="assets/img/imagen8.webp" alt="" /></span>
                    </div>
                </div>

                <!--Titulo de videos-->
                <div id="videos" class="title-recuerdos">
                    <p class="album">Mis videos</p>
                </div>

                <!--Mis videos-->
                <div class="video-container">
                    <video src="assets/vid/video1.mp4" controls></video>
                    <video src="assets/vid/video2.mp4" controls></video>
                    <video src="assets/vid/video3.mp4" controls></video>
                    <video src="assets/vid/video4.mp4" controls></video>
                    <video src="assets/vid/video5.mp4" controls></video>
                </div>
                <!--álbum de fotos expand-->
                <div id="album" class="title-recuerdos">
                    <p class="album">Mi álbum de fotos</p>
                </div>

                <section class="album-expand">
                    <img src="assets/img/imagen1.webp" alt="Imagen 1" />
                    <img src="assets/img/imagen2.webp" alt="Imagen 2" />
                    <img src="assets/img/imagen3.webp" alt="Imagen 3" />
                    <img src="assets/img/imagen4.webp" alt="Imagen 4" />
                    <img src="assets/img/imagen5.webp" alt="Imagen 5" />
                    <img src="assets/img/imagen6.webp" alt="Imagen 6" />
                    <img src="assets/img/imagen7.webp" alt="Imagen 7" />
                    <img src="assets/img/imagen9.webp" alt="Imagen 9" />
                    <img src="assets/img/imagen10.webp" alt="Imagen 10" />
                </section>
            </main>
            <?php include 'includes/footer.php'; ?>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>