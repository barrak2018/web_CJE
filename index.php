

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



        
            
        <?php

        if (isset($_GET['page'])) {
            if ($_GET['page'] == 'home') {
                require 'home.php';
            }
            elseif ($_GET['page'] == 'catalog') {
                require 'cartaProducto.php';
            }
        } else {
            require 'home.php';
        }

        ?>
        

    </div>


    <script src="assets/js/scripts.js"></script>
</body>
</html>