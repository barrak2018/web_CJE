
    <?php
    require './config/database.php';

    // Verifica si se ha seleccionado un botón de categoría
    if (isset($_GET['categoria'])) {
        // Consulta los productos de la base de datos que corresponden a la categoría seleccionada
        $query = "SELECT * FROM productos WHERE categoria = '".$_GET['categoria']."'";
    } 
    // Si no se ha seleccionado ningún botón, muestra todos los productos
    else {
        // Consulta todos los productos de la base de datos
        $query = "SELECT * FROM productos";
    }

    $res = $conn->query($query);
    
    while ($row = $res->fetch_assoc()) {
        ?>
        <div class="card">
            <img src="assets/icons/logo.jpg" class="card__img">
            <div class="card__text">
                <h3><?php echo $row["nombre"]; ?></h3>
                <p><?php echo $row["descripcion"] ?></p>
                <p><?php echo $row ["precio"].'$' ?></p>
            </div>
        </div>
        <?php

    };
    $conn->close();
    ?>
