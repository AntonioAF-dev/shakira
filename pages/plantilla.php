<?php
define('ROOT_PATH', __DIR__ . '/'); // Define ROOT_PATH como la ruta del directorio actual
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.urbasanz.com/wp-content/uploads/2024/02/Gestion-Inmobiliaria.webp" />
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Shakira</title>
</head>

<body>
    <div class="container">
        <!-- Incluir navbar vertical fijado-->
        <?php
        $navbarV_path = ROOT_PATH . '../components/navbarV.php';
        if (file_exists($navbarV_path)) {
            include($navbarV_path);
        } else {
            echo "No se encontró el archivo navbarV.php en la ruta: " . $navbarV_path;
        }
        ?>
        <div class="main-content">
            ?>

            <!-- Incluir navbar Horizontal fijado al tocar borde-->
            <?php
            $navbarH_path = ROOT_PATH . '../components/navbarH.php';
            if (file_exists($navbarH_path)) {
                include($navbarH_path);
            } else {
                echo "No se encontró el archivo navbarH.php en la ruta: " . $navbarH_path;
            }
            ?>
            <main>
                



            </main>
            <?php include '../includes/footer.php'; ?>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
</body>

</html>