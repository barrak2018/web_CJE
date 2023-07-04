<?php
    require 'config/database.php'
?>


<nav class="nav">
    <ul class="list">

        <li class="list__item">
            <div class="list__button">
                <img src="assets/icons/menu.svg" class="list__img">
                <a href="#" class="nav__link">Inicio</a>
            </div>
        </li>

        <li class="list__item list__item--click">
            <div class="list__button list__button--click">
                <img src="assets/icons/shoping.svg" class="list__img"">
                        <a href=" #" class="nav__link">Productos</a>
                <img src="assets/icons/arrowR.svg" class="list__arrow">
            </div>
            <ul class="list__show">
                <li class="list__inside">
                    <img src="assets/icons/diamod.svg" alt="">
                    <a href="index.php" class="nav__link nav__link--inside">Todos</a>
                </li>
                <?php
                $query = "SELECT * FROM categorias";
                $res = $conn->query($query);
                while($row = $res->fetch_assoc()){
                ?>
                <li class="list__inside">
                    <?php 
                    $imagen = $row["icono"];
                    $data_uri = 'data:image/svg+xml;base64,' . base64_encode($imagen); 
                    ?>

                    <img src="<?php echo $data_uri ?>" alt="">
                    <a href="?categoria=<?php echo $row["id"] ?>" class="nav__link nav__link--inside"><?php echo $row["categoria"] ?></a>
                </li>
                <?php
                }
                $conn->close();
                ?>



                <!-- <li class="list__inside">
                    <img src="assets/icons/male.svg" alt="">
                    <a href="#" class="nav__link nav__link--inside">Hombre</a>
                </li>

                <li class="list__inside">
                    <img src="assets/icons/female.svg" alt="">
                    <a href="#" class="nav__link nav__link--inside">Mujer</a>
                </li> -->
            </ul>
        </li>

        <li class="list__item">
            <div class="list__button">
                <img src="assets/icons/whatsapp.svg" class="list__img">
                <a href="#" class="nav__link">Contactanos</a>
            </div>
        </li>
    </ul>
</nav>