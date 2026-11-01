<?php
/**
 * UT2 - Actividad 3
 * Venta de entradas de cine
 * Condicionales anidados y switch
 */

// Datos del cliente y de la sesión
$edad = 20;
$edadMinima = 12;
$entradasDisponibles = 10;
$tipoEntrada = "General";

// Seleccionamos el tipo de entrada y su precio
switch ($tipoEntrada) {
    case "General":
        $precio = 10;
        break;

    case "Reducida":
        $precio = 7;
        break;

    case "3D":
        $precio = 15;
        break;

    default:
        $precio = null;
}

// Comprobamos las condiciones de venta
if ($edad >= $edadMinima) {
    if ($entradasDisponibles > 0) {
        if ($precio !== null) {
            echo "Tipo de entrada: $tipoEntrada\n";
            echo "Precio: $precio euros\n";
            echo "Venta autorizada.\n";
        } else {
            echo "Tipo de entrada no disponible.\n";
        }
    } else {
        echo "No quedan entradas disponibles.\n";
    }
} else {
    echo "No cumple la edad mínima para esta sesión.\n";
}
?>