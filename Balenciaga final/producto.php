<?php
include("codigo_login.php");
include("header.php");
$idProducto = $_GET['id'];
$query = "SELECT * FROM productos WHERE id = $idProducto";
$result = $conexion->query($query);
$row = $result->fetch(PDO::FETCH_ASSOC);
$imagen = $row["imagen_hd"];
$nombre = $row["nombre"];
$precio = $row["precio"];
$descripcion = $row["descripcion"];
?>
<div class="div_producto">
    <div class="div_producto_izq">
        <img src="./imagenes/<?=$imagen?>" alt="" class="producto_img">
    </div>
    <div class="div_producto_der">
        <span class="nombre_producto"><?=$nombre?></span><br>
        <span><?=$precio?>€</span>
        <p class="descripcion_producto"><?=$descripcion?></p>
        <button data-text="Añadir a la cesta" class="boton_producto" data-producto-id="<?=$idProducto?>"><span class="boton_producto_texto">Añadir a la
                cesta</span></button><br>
        <button data-text="Disponibilidad en tienda" class="boton_producto"><span
                class="boton_producto_texto">Disponibilidad en tienda</span></button><br>
        <span>Puede pagar de manera segura con Klarna o Paypal</span>
    </div>
</div>
<?php
include("footer.php");
?>