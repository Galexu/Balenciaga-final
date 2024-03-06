<?php
include("codigo_login.php");
include("header.php");
$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : 'hombre';
if (isset($_SESSION['login'])) {
?>

<div class="body_novedades">
    <div class="div_top_novedades">
        <?php
if(isset($_GET['categoria']) && $_GET['categoria'] != 'discover') { ?>
        <nav>
            <ul class="ul_links">
                <li class="li_links_novedades">
                    <a href="novedades.php?categoria=mujer" target="" class="nav_links"><span
                            class="nav_links texto">NOVEDADES -
                            MUJER</span></a>
                </li>
                <li class="li_links_novedades">
                    <a href="novedades.php?categoria=hombre" target="" class=" nav_links"><span
                            class="nav_links texto">NOVEDADES -
                            HOMBRE</span></a>
                </li>
                <li class="li_links_novedades">
                    <a href="novedades.php?categoria=discover" target="" class="nav_links"><span
                            class="nav_links texto">DISCOVER</span></a>
                </li>
            </ul>
        </nav>

        <?php } else { ?>
        <nav>
            <ul class="ul_links">
                <li class="li_links_novedades">
                    <a href="novedades.php?categoria=mujer" target="" class="nav_links"><span
                            class="nav_links texto">VERANO 23 MUJER</span></a>
                </li>
                <li class="li_links_novedades">
                    <a href="novedades.php?categoria=hombre" target="" class=" nav_links"><span
                            class="nav_links texto">VERANO 23 HOMBRE</span></a>
                </li>
                <li class="li_links_novedades">
                    <a href="novedades.php?categoria=discover" target="" class="nav_links"><span
                            class="nav_links texto">HIGH SUMMER - BAGS</span></a>
                </li>
                <li class="li_links_novedades">
                    <a href="novedades.php?categoria=discover" target="" class="nav_links"><span
                            class="nav_links texto">HIGH SUMMER - SHOES</span></a>
                </li>
                <li class="li_links_novedades">
                    <a href="novedades.php?categoria=discover" target="" class="nav_links"><span
                            class="nav_links texto">GARDE-ROBE</span></a>
                </li>
                <li class="li_links_novedades">
                    <a href="novedades.php?categoria=discover" target="" class="nav_links"><span
                            class="nav_links texto">LE CAGOLE</span></a>
                </li>
                <li class="li_links_novedades">
                    <a href="novedades.php?categoria=discover" target="" class="nav_links"><span
                            class="nav_links texto">KIDS</span></a>
                </li>
            </ul>
        </nav>
        <?php } ?>
    </div>

    <?php
if(isset($_GET['categoria']) && $_GET['categoria'] === 'discover') {
  echo '<div class="div_discover">
          <span class="discover_texto">OTOÑO 23</span>
        </div>';
}
?>

    <div class="div_medio_novedades"><?php
                switch ($categoria) {
                    case 'mujer':
                    ?>
        <img src="./imagenes/novedades_principal.jpg" alt="Imagen 1" class="img_novedades"> <?php
                break;
                case 'hombre': ?>
        <img src="./imagenes/novedades_principal1.jpg" alt="Imagen 1" class="img_novedades"><?php
                break;?>
        <img src="./imagenes/novedades_principal1.jpg" alt="Imagen 1" class="img_novedades">
        <?php case 'discover': ?>
        <img src="./imagenes/novedades_principal2.jpg" alt="Imagen 1" class="img_novedades">
        <?php break;
        } ?>
    </div>
    <div class="containerrr">
        <div class="left-section">
            <span class="resultadoos">12 resultados</span>
        </div>
        <div class="right-section">
            <span class="resultadoos">VISUALIZACIONES</span>
            <img src="./imagenes/visualizaciones.png" alt="" id="visualizaciones" />
        </div>
    </div>
</div>

<?php switch ($categoria) {
    case 'mujer':
        $query = "SELECT * FROM productos WHERE categoria_id = 1";
        $result = $conexion->query($query);
        $contador = 0;
        echo '<div class="catalogo">';
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                  if ($contador % 4 === 0) {
                        echo '<div class="fila">'; 
            }
            $nombreProducto = $row["nombre"];
            $imagenProducto = $row["imagen"];
            $categoriaId = $row["categoria_id"];
            $idProducto = $row["id"];
            ?>

<div class="columna">
    <div class="imagen">
        <a href="producto.php?id=<?=$idProducto?>"><img src="./imagenes/<?=$imagenProducto?>" alt="Imagen 1"
                class="img_catalogo"></a>
        <button data-text="SHOP NOW" class="boton_compra" data-producto-id="<?=$idProducto?>" id="boton_now">
            <span class="novedades_button_texto">SHOP NOW</span>
        </button>
    </div>
</div>

<?php
            $contador++;
            if ($contador % 4 === 0) {
                echo '</div>';
            }
            }
            }
        echo '</div>
            </div>';
        break;
    case 'hombre':
        $query = "SELECT * FROM productos WHERE categoria_id = 2";
        $result = $conexion->query($query);
        $contador = 0;
        echo '<div class="catalogo">';
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                  if ($contador % 4 === 0) {
                        echo '<div class="fila">'; 
            }
            $nombreProducto = $row["nombre"];
            $imagenProducto = $row["imagen"];
            $categoriaId = $row["categoria_id"];
            $idProducto = $row["id"];
            ?>

<div class="columna">
    <div class="imagen">
        <a href="producto.php?id=<?=$idProducto?>"><img src="./imagenes/<?=$imagenProducto?>" alt="Imagen 1"
                class="img_catalogo"></a>
        <button data-text="SHOP NOW" class="boton_compra" data-producto-id="<?=$idProducto?>" id="boton_now">
            <span class="novedades_button_texto">SHOP NOW</span></button>
    </div>
</div>

<?php
            $contador++;
            if ($contador % 4 === 0) {
                echo '</div>';
            }
            }
            }
        echo '</div>
            </div>';
        break;
    case 'discover':
        $query = "SELECT * FROM productos WHERE categoria_id = 3";
        $result = $conexion->query($query);
        $contador = 0;
        echo '<div class="catalogo">';
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                  if ($contador % 4 === 0) {
                        echo '<div class="fila">'; 
            }
            $nombreProducto = $row["nombre"];
            $imagenProducto = $row["imagen"];
            $categoriaId = $row["categoria_id"];
            $idProducto = $row["id"];
            ?>

<div class="columna">
    <div class="imagen">
        <a href="producto.php?id=<?=$idProducto?>"><img src="./imagenes/<?=$imagenProducto?>" alt="Imagen 1"
                class="img_catalogo"></a>
        <button data-text="SHOP NOW" class="boton_compra" data-producto-id="<?=$idProducto?>" id="boton_now">
            <span class="novedades_button_texto">SHOP NOW</span></button>
    </div>
</div>

<?php
            $contador++;
            if ($contador % 4 === 0) {
                echo '</div>';
            }
            }
            }
        echo '</div>
            </div>';
        break;
} ?>

<div>
    <?php
                switch ($categoria) {
                    case 'mujer':
                    ?>
    <img src="./imagenes/novedades_secundaria.jpg" alt="Imagen 1" class="img_secundaria"> <?php
                break;
                case 'hombre': ?>
    <img src="./imagenes/novedades_secundaria1.jpg" alt="Imagen 1" class="img_secundaria"><?php
                break;?>
    <img src="./imagenes/novedades_secundaria1.jpg" alt="Imagen 1" class="img_secundaria">
    <?php case 'discover': ?>
    <img src="./imagenes/novedades_secundaria2.jpg" alt="Imagen 1" class="img_secundaria">
    <?php break;
        } ?>
</div>
</div>
<?php
} else { ?>

<div class="container">
    <div class="izq"></div>
    <div class="der"></div>
    <div class="arri"></div>
    <div class="med">
        <span class="texto" style="font-weight: bold">Para ver las ofertas y productos por favor inicie
            sesión.</span><br>
        <a href="login.php" class="inicie texto">Iniciar Sesión.</a>
    </div>
    <div class="aba"></div>
</div>

<?php
}
include("footer.php");
?>