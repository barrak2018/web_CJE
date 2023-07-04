

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="CJE Perfumes">
    <link rel="stylesheet" href="assets/stiles/stiles.css">
    <link rel="icon" href="assets/icons/logo.jpg">
    <title>CJE Perfumes</title>
</head>
<body>
    <div class="container__main">
        <?php
        require 'nav.php'
        ?>



        <div class="shop">
            
            <?php
            require './cartaProducto.php'
            ?>
        </div>

    </div>


    <script src="assets/js/scripts.js"></script>
</body>
</html>