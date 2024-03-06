<?php
session_start();

if (isset($_GET['id'])) {
    $productoId = $_GET['id'];

    // Agregar el ID del producto al array o a una variable de sesión
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }
    $_SESSION['carrito'][] = $productoId;

    // Imprimir el contenido del array
    print_r($_SESSION['carrito']);
}
?>