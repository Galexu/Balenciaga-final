<?php
session_start();

if (isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}
header('Location: cesta.php');
exit;
?>