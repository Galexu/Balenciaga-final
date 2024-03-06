<?php
session_start();

$jsonData = file_get_contents('php://input');
$productoId = json_decode($jsonData, true);
if (is_array($productoId)) {
    $_SESSION['productoId'] = $productoId;
    echo "Array procesado correctamente";
} else {
    echo "Error al procesar el array JSON";
}
