<div class="card">
    <?php
    require './config/database.php';
    $query = "select * from productos";
    $res = $conn->query($query);
    while ($row = $res->fetch_assoc()) {
        ?>
        
        <img src="assets/icons/logo.jpg" class="card__img">
        <div class="card__text">
            <h3><?php echo $row["nombre"]; ?></h3>
            <p><?php echo $row["descripcion"] ?></p>
            <p><?php echo $row ["precio"] ?></p>
        </div>
        
        <?php
    }
    
    ?>
</div>