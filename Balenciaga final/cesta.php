<?php
include("codigo_login.php");
include("header.php");
if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
    ?>

    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <h1 style="font-size: 48px; font-weight: bold;">La cesta está vacía</h1>
    </div>

    <?php
    include("footer.php");
    exit;
}

$idsProductos = implode(',', $_SESSION['carrito']);
$query = "SELECT * FROM productos WHERE id IN ($idsProductos)";
$resultado = $conexion->query($query);
$precioTotal = 0;

?>
<div class="div_cesta_contenedor">
    <div class="cesta_izq">
    </div>
    <div class="cesta_mid">
        <div class="texto_cesta">
            <span class="cesta_cesta">CESTA</span>
            <span>Entregas y devolucion gratuitas</span>
        </div>
        <?php foreach ($resultado as $row) : ?>
            <?php
            $cantidadProducto = 0;
            foreach ($_SESSION['carrito'] as $idProducto) {
                if ($idProducto == $row['id']) {
                    $cantidadProducto++;
                }
            }
            ?>
            <div class="div_cesta_prod">
                <img src="./imagenes/<?= $row['imagen'] ?>" alt="Imagen" class="img_cesta_prod">
                <div>
                    <h6><?= $row['nombre'] ?></h6>
                    <p class="precio_producto">Precio: <?= $row['precio'] ?>€</p>
                    <span>Cantidad del producto: <?= $cantidadProducto ?></span>
                </div>
            </div>
            <?php
            $precioTotal += $row['precio'] * $cantidadProducto;
            ?>
        <?php endforeach; ?>
<div class="precio_total">
    <div>
        <p>Total: <?= $precioTotal ?>€</p>
        <a href="index.php" class="boton_vaciar_cesta"><span class="link_texto">Realizar compra</span></a>
        <a href="vaciar_cesta.php" class="boton_vaciar_cesta"><span class="link_texto">Vaciar cesta</span></a>
    </div>
</div>
    </div>
    <div class="cesta_der"></div>
</div>
<?php
include('footer.php');
?>
